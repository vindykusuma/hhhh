@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Calendar
        </div>

        <div class="card-body">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
            <form>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="pricelist_id">Pricelist</label>
                            <select class="form-control select2" name="pricelist_id" id="pricelist_id">
                                @foreach($pricelists as $id => $pricelist)
                                    <option value="{{ $id }}" {{ request()->input('pricelist_id') == $id ? 'selected' : '' }}>{{ $pricelist }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="pelanggan_id">pelanggan</label>
                            <select class="form-control select2" name="pelanggan_id" id="pelanggan_id">
                                @foreach($pelanggans as $id => $pelanggan)
                                    <option value="{{ $id }}" {{ request()->input('pelanggan_id') == $id ? 'selected' : '' }}>{{ $pelanggan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary mt-4">
                            Filter
                        </button>
                    </div>
                </div>
            </form>

            <div id='calendar'></div>
        </div>
    </div>
</div>

@endsection

@push('script-alt')
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...

            pesanans={!! json_encode($pesanans) !!};

            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: pesanans


            });
        });
</script>

@endpush
