@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header py-3 d-flex">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Tambah Pelanggan') }}</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin.pelanggan.index') }}" class="btn btn-primary">
                        <span class="text">{{ __('Kembali') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pelanggans.update', $pesanan->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_lengkap">{{ __('Nama Lengkap') }}</label>
                        <input type="text" class="form-control" id="nama_lengkap" placeholder="{{ __('Nama Lengkap') }}" name="nama_lengkap" value="{{ old('nama_lengkap', $pesanan->nama_lengkap) }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="{{ __('email') }}" name="email" value="{{ old('email',  $pesanan->email) }}" />
                    </div>

                    <div class="form-group">
                        <label for="no_hp">{{ __('Nomor Telepon') }}</label>
                        <input type="number" class="form-control" id="no_hp" placeholder="{{ __('Nomor Telepon') }}" name="no_hp" value="{{ old('no_hp', $pesanan->no_hp) }}" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">{{ __('Alamat') }}</label>
                        <textarea class="form-control" name="alamat" id="alamat" placeholder="alamat" cols="30" rows="10">{{ old('Alamat', $pesanan->alamat) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>


    <!-- Content Row -->

</div>
@endsection
