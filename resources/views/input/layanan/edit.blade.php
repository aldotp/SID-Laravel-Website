
@extends('layout.aplikasi')

@section('title', 'Tambah Wilayah ')

@section('konten')
<h1>Edit </h1>
    <form method="post" action="{{'/layanan/'.$data->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_layanan">Nama Layanan</label>
            <input type="text" class="form-control" id="nama_layanan" placeholder="Nama Layanan" name="nama_layanan" value=" {{ $data->nama_layanan }}">
        </div>
        <div class="mb-3">
            <label for="id_opd">Id Opd</label>
            <select class="form-control" name="id_opd" id="id_opd">
                @foreach($opd as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/layanan" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
@endsection

