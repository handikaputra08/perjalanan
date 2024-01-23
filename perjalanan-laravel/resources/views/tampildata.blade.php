@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm">
        <div class="page-header text-center">
            <div class="page-title">
                <h1>Edit Data Pegawai</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="animated fadeIn">
    <div class="breadcrumbs" style="padding: 0 5px 10px;">
        <div class="row" style="margin-right:auto; margin-left:auto; padding:10px; display:block">
            <div style="height: 255px; border: 1px solid rgb(228, 228, 228);">
                <form action="{{ route('updatedata', @$data->id) }}" method="POST" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        @csrf
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="mail_type">Golongan</label>
                            <select name="gol" class="form-control relation_to_number valid" required="" aria-required="true" aria-invalid="false">
                                <option selected>{{ $data->gol }}</option>
                                <option value="Pengatur (II/C)">Pengatur (II/C)</option>
                                <option value="Pengatur Tingkat I (II/D)">Pengatur Tingkat I (II/D)</option>
                                <option value="Penata Muda (III/A)">Penata Muda (III/A)</option>
                                <option value="Penata Muda Tingkat I (III/B)">Penata Muda Tingkat I (III/B)</option>
                                <option value="Penata (III/C)">Penata (III/C)</option>
                                <option value="Penata Tingkat I (III/D)">Penata Tingkat I (III/D)</option>
                                <option value="Pembina (IV/A)">Pembina (IV/A)</option>
                                <option value="Pembina Tingkat I (IV/B)">Pembina Tingkat I (IV/B)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIP</label>
                            <input type="number" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nip }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->jabatan }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Rekening</label>
                                <input type="text" name="rekening" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->rekening }}">
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary" style="border-radius: 7px; position: absolute; bottom: -40px; right: 16px;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
