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
            <h1 class="h3 mb-0 text-gray-800">{{ __('Tambah Pricelist') }}</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin.pricelists.index') }}" class="btn btn-primary">
                        <span class="text">{{ __('Kembali') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pricelists.update', $pricelist->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_paket">{{ __('Nama Paket') }}</label>
                        <input type="text" class="form-control" id="nama_paket" placeholder="{{ __('Nama Paket') }}" name="nama_paket" value="{{ old('nama_paket', $pricelist->nama_paket) }}" />
                    </div>
                    <div class="form-group">
                        <label for="harga">{{ __('Harga') }}</label>
                        <input type="number" class="form-control" id="harga" placeholder="{{ __('harga') }}" name="harga" value="{{ old('harga', $pricelist->harga) }}" />
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_paket">{{ __('Deskripsi Paket') }}</label>
                        <textarea class="form-control" name="deskripsi_paket" id="deskripsi_paket" placeholder="deskripsi_paket" cols="30" rows="10">{{ old('deskripsi_paket', $pricelist->deskripsi_paket) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="jenisfoto">{{ __('Jenisfoto') }}</label>
                        <select class="form-control" name="jenisfoto_id" id="jenisfoto">
                            @foreach($jenisfotos as $id => $jenisfoto)
                                <option {{ $id == $pricelist->jenisfoto->id ? 'selected' : null }} value="{{ $id }}">{{ $jenisfoto }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>


    <!-- Content Row -->

</div>
@endsection
