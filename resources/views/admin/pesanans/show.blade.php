@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Lihat Pesanan') }}
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <tr>
                            <th>pelanggan</th>
                            <td>{{ $pesanan->pelanggan->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Pricelist</th>
                            <td>{{ $pesanan->pricelist->nama_paket }}</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>${{ $pesanan->pricelist->harga }}</td>
                        </tr>
                        <tr>
                            <th>time from</th>
                            <td>{{ $pesanan->time_from }}</td>
                        </tr>
                        <tr>
                            <th>time to</th>
                            <td>{{ $pesanan->time_to }}</td>
                        </tr>
                        <tr>
                            <th>amount</th>
                            <td>{{ $pesanan->amount }}</td>
                        </tr>
                        <tr>
                            <th>additional information</th>
                            <td>{{ $pesanan->additional_information }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection
