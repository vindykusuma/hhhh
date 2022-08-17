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
            <h1 class="h3 mb-0 text-gray-800">{{ __('Tambah Portofolio') }}</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin.portofolios.index') }}" class="btn btn-primary">
                        <span class="text">{{ __('Kembali') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.portofolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_portofolio">{{ __('Nama Portofolio') }}</label>
                        <input type="text" class="form-control" id="nama_portofolio" placeholder="{{ __('nama portofolio') }}" name="nama_portofolio" value="{{ old('nama_portofolio') }}" />
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_foto">{{ __('Deskripsi Foto') }}</label>
                        <textarea class="form-control" name="deskripsi_foto" id="deskripsi_foto" placeholder="deskripsi_foto" cols="30" rows="10">{{ old('deskripsi_foto') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="jenisfoto">{{ __('Jenis Foto') }}</label>
                        <select class="form-control" name="jenisfoto_id" id="jenisfoto">
                            @foreach($jenisfotos as $id => $jenisfoto)
                                <option value="{{ $id }}">{{ $jenisfoto }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">{{ __('File Foto') }}</label>
                        <input class="form-control" type="file" id="image">
                      </div>
                    <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>


    <!-- Content Row -->

</div>
@endsection
