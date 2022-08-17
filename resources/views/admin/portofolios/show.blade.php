@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('view pricelist') }}
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <tr>
                            <th>Nama Paket</th>
                            <td>{{ $pricelist->nama_paket }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi Paket</th>
                            <td>{{ $pricelist->deskripsi_paket }}</td>
                        </tr>
                    </table>
                </div>
            </div>


        <!-- Tab panes -->
        <div class="card-header py-3 mt-5 bg-info text-white d-flex">
                <h6 class="m-0 font-weight-bold text-white">
                    {{ __('Lihat Pesanan') }}
                </h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-pesanan" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th width="10"></th>
                        <th>pelanggan</th>
                        <th>Nama Paket</th>
                        <th>price</th>
                        <th>capacity</th>
                        <th>time-from</th>
                        <th>time-to</th>
                        <th>additional-information</th>
                        <th>action</th>
                    </tr>
                    </thead>

                    <tbody>
                        @forelse($pesanans as $pesanan)
                            <tr data-entry-id="{{ $pesanan->id }}">
                                <td></td>
                                <td field-key='pelanggan'>{{ $pesanan->pelanggan->full_name  }}</td>
                                <td field-key='pricelist'>{{ $pesanan->pricelist->nama_paket }}</td>
                                <td field-key='pricelist'>{{ $pesanan->price }}</td>
                                <td field-key='pricelist'>{{ $pesanan->capacity }}</td>
                                <td field-key='time_from'>{{ $pesanan->time_from }}</td>
                                <td field-key='time_to'>{{ $pesanan->time_to }}</td>
                                <td field-key='additional_information'>{!! $pesanan->additional_information !!}</td>
                                <td>
                                    @can('pesanan_view')
                                        <a href="{{ route('admin.pesanans.show',[$pesanan->id]) }}"
                                            class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                                    @endcan
                                    @can('pesanan_edit')
                                        <a href="{{ route('admin.pesanans.edit',[$pesanan->id]) }}"
                                            class="btn btn-xs btn-info"><i class="fa fa-pencil-alt"></i></a>
                                    @endcan
                                    @can('pesanan_delete')
                                    <form onclick="return confirm('Apakah Anda Yakin Untuk Hapus Data ? ')" class="d-inline" action="{{ route('admin.pesanans.destroy', $pesanan->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="10">data not found !</td>
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


@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'Hapus yang dipilih'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.pesanans.mass_destroy') }}",
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
  $('.datatable-pesanan:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush
