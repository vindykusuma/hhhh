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
                    <a href="{{ route('admin.pelanggans.index') }}" class="btn btn-secondary">
                        <span class="text">{{ __('Kembali') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pelanggans.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">{{ __('Nama Lengkap') }}</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" />
                    </div>

                    <div class="form-group">
                        <label for="no_hp">{{ __('Nomor Telepon') }}</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">{{ __('Alamat') }}</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10">{{ old('alamat') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>


    <!-- Content Row -->

</div>
@endsection
