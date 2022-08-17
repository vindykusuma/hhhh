@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <form action="{{ route('admin.cari_pesanans.index') }}" method="post">
                    @csrf
                    <div class="row" style="margin-top: 5px;">
                        <div class="col-12 d-flex " style="column-gap: 2rem; align-items: center;">
                            <div class="form-group">
                                <label for="time_from">{{ __('Time From') }}</label>
                                <input type="text" class="form-control datetime" id="time_from" name="time_from" value="{{ old('time_from') }}"  required/>
                                <p class="help-block"></p>
                                @if($errors->has('time_from'))
                                    <p class="help-block">
                                        {{ $errors->first('time_from') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="time_to">{{ __('Time to') }}</label>
                                <input type="text" class="form-control datetime" id="time_to" name="time_to" value="{{ old('time_to') }}" required />
                                <p class="help-block"></p>
                                @if($errors->has('time_to'))
                                    <p class="help-block">
                                        {{ $errors->first('time_to') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: 5px;">
                                <label class="control-label"></label>
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-pricelist" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Paket</th>
                                <th>Price</th>
                                <th>Floor</th>
                                <th>Description</th>
                                <th>jenisfoto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pricelists as $pricelist)
                            <tr data-entry-id="{{ $pricelist->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pricelist->nama_paket }}</td>
                                <td>{{ $pricelist->price }}</td>
                                <td>{{ $pricelist->floor }}</td>
                                <td>{{ $pricelist->description }}</td>
                                <td>{{ $pricelist->jenisfoto>name }}</td>
                                <td>
                                    @can('pesanan_create')
                                        <button class="btn btn-info">
                                            <a style="color: #ffffff;" href="{{ route('admin.pesanans.create',
                                            ['pricelist_id' => $pricelist->id,'time_from' => $time_from, 'time_to' => $time_to]) }}">
                                                Pesanan
                                        </button>
                                    @endcan
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">{{ __('Data Kosong') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection

@push('style-alt')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
@endpush

@push('script-alt')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'Hapus yang dipilih'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.pricelists.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('Tidak Ada Yang Dipilih')
        return
      }
      if (confirm('Apakah Anda Yakin Untuk Hapus Data ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-pricelist:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>

<script>
    $(document).ready(function () {
  window._token = $('meta[name="csrf-token"]').attr('content')
  window._stripe_key = $('meta[name="stripe-key"]').attr('content')

  moment.updateLocale('en', {
    week: {dow: 1} // Monday is the first day of the week
  })

  $('.date').datetimepicker({
    format: 'YYYY-MM-DD',
    locale: 'en',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.datetime').datetimepicker({
    format: 'YYYY-MM-DD HH:mm',
    locale: 'en',
    sideBySide: true,
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    },
    stepping: 10
  })

  $('.timepicker').datetimepicker({
    format: 'HH:mm:ss',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.select-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', 'selected')
    $select2.trigger('change')
  })
  $('.deselect-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', '')
    $select2.trigger('change')
  })

  $('.select2').select2()

  $('.treeview').each(function () {
    var shouldExpand = false
    $(this).find('li').each(function () {
      if ($(this).hasClass('active')) {
        shouldExpand = true
      }
    })
    if (shouldExpand) {
      $(this).addClass('active')
    }
  })
})
</script>
@endpush
