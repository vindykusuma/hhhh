@extends('layouts.main')
@section('judul','Pesanan')
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <div class="col-lg-12 py-5">
            <h2>Keranjang Pesanan</h2>
          </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-pesanan" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            {{-- <th width="10">

                            </th> --}}
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Nama Paket</th>
                            <th>Lokasi Pemotretan</th>
                            <th>Tanggal Pemotretan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @forelse($pesanans as $pesanan)
                        <tr data-entry-id="{{ $pesanan->id }}">
                            <td>

                            </td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pesanan->pelanggan->full_name }}</td>
                            <td>{{ $pesanan->pricelist->nama_paket }}</td>
                            <td>{{ $pesanan->time_from }}</td>
                            <td>{{ $pesanan->time_to }}</td>
                            <td>{{ $pesanan->status }}</td>
                            <td>
                                <a href="{{ route('admin.pesanans.show', $pesanan->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.pesanans.edit', $pesanan->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data ? ')" class="d-inline" action="{{ route('admin.pesanans.destroy', $pesanan->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">{{ __('Data Kosong') }}</td>
                        </tr>
                        @endforelse
                    </tbody> --}}
                </table>
            </div>
        </div>

        </div>
      </section><!-- End Contact Section -->
@endsection
