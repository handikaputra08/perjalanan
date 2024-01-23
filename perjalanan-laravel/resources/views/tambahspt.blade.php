@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm">
            <div class="page-header text-center">
                <div class="page-title">
                    <h1>Input Data Surat Perintah Tugas (SPT)</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="animated fadeIn">
        <div class="breadcrumbs" style="padding: 0 5px 10px;">
            <div class="row" style="margin-right:auto; margin-left:auto; padding:10px; display:block">
                <div style="height: 500px; border: 1px solid rgb(228, 228, 228);">
                    <form action="{{ route('spt.insertspt') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nomor_spt" class="form-label">Nomor SPT</label>
                                <input type="text" name="nomor_spt" class="form-control" id="nomor_spt" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_spt" class="form-label">Tanggal SPT</label>
                                <input type="date" name="tanggal_spt" class="form-control" id="tanggal_spt" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="perihal_spt" class="form-label">Perihal SPT</label>
                                <textarea name="perihal_spt" class="form-control" style="width: 100%; height:120px;" id="perihal_spt"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_perjalanan" class="form-label">Tanggal Perjalanan</label>
                                <input type="date" name="tanggal_perjalanan" class="form-control" id="tanggal_perjalanan" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nama_yang_bertugas" class="form-label">Nama Yang Bertugas 1</label>
                                <select name="nama_yang_bertugas[]" class="form-control" id="nama_yang_bertugas" aria-describedby="emailHelp" >
                                    <option value="">- Pilih -</option>
                                    @foreach ($data as $row)
                                        <option value="{{ $row->id }}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nama_yang_bertugas" class="form-label">Nama Yang Bertugas 2</label>
                                <select name="nama_yang_bertugas[]" class="form-control" id="nama_yang_bertugas" aria-describedby="emailHelp" >
                                    <option value="">- Pilih -</option>
                                    @foreach ($data as $row)
                                        <option value="{{ $row->id }}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nama_yang_bertugas" class="form-label">Nama Yang Bertugas 3</label>
                                <select name="nama_yang_bertugas[]" class="form-control" id="nama_yang_bertugas" aria-describedby="emailHelp" >
                                    <option value="">- Pilih -</option>
                                    @foreach ($data as $row)
                                        <option value="{{ $row->id }}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nama_yang_bertugas" class="form-label">Nama Yang Bertugas 4</label>
                                <select name="nama_yang_bertugas[]" class="form-control" id="nama_yang_bertugas" aria-describedby="emailHelp" >
                                    <option value="">- Pilih -</option>
                                    @foreach ($data as $row)
                                        <option value="{{ $row->id }}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nama_yang_bertugas" class="form-label">Nama Yang Bertugas 5</label>
                                <select name="nama_yang_bertugas[]" class="form-control" id="nama_yang_bertugas" aria-describedby="emailHelp" >
                                    <option value="">- Pilih -</option>
                                    @foreach ($data as $row)
                                        <option value="{{ $row->id }}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        
                        <div class="col" style="padding:initial;">
                            <button type="submit" name="submit" class="btn btn-primary" style="border-radius: 7px; float:right;">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
