@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm">
        <div class="page-header text-center">
            <div class="page-title">
                <h1>Surat Perintah Tugas (SPT)</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="animated fadeIn">
    <div class="breadcrumbs">

            <div class="page-header float-left mt-3">
                <div class="page-title">
                    <a href="tambahspt" class="btn btn-primary" style="border-radius: 7px; font-weight: bold;"><i class="fa-solid fa-file-circle-plus"></i></i>&nbspBuat SPT</a>
                </div>
            </div>

            <div class="col-sm-12 table-responsive">
                <table id="example" class="table-bordered table-striped dataTable no-footer table" style="width: 100%;" role="grid" aria-describedby="t_draft_letter_info">
                    <thead>
                        <tr role="row">
                            <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 70px;" aria-label="Aksi">Aksi</th>
                            <th class="text-left " tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1" style="width: 75px;" aria-sort="descending">Nomor SPT</th>
                            <th style="width: 10px;" class="text-left sorting" tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1">Tanggal SPT</th>
                            <th style="width: 76px;" class="text-left sorting" tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1">Judul SPT</th>
                            <th style="width: 76px;" class="text-left sorting" tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1">Tanggal Perjalanan</th>
                            <th style="width: 76px;" class="text-left sorting" tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1">Nama Yang Bertugas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr role="row">
                                <td class="text-center sorting_disabled">
                                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton_334319" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Aksi
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_334319">
                                        <a class="dropdown-item text-danger" href="#">
                                            Edit SPT
                                        </a>            
                                        <button class="dropdown-item btn_history" type="button">
                                            Preview SPT
                                        </button>      
                                    </div>
                                    
                                </td>
                                <td class="text-left">{{ $row->no }}</td>
                                <td class="text-left">{{ $row->tglspt }}</td>
                                <td class="text-left">{{ $row->judul }}</td>
                                <td class="text-left">{{ date('d-m-Y',@$row->tanggal_perjalanan) }}</td>
                                <?php $no=0; ?>
                                <td class="text-left">{{ ++$no }}. {{ @$row->nama_pegawai1 }} <br>
                                                      {{ ++$no }}. {{ @$row->nama_pegawai2 }} <br>
                                                      {{ ++$no }}. {{ @$row->nama_pegawai3 }} <br>
                                                      {{ ++$no }}. {{ @$row->nama_pegawai4 }} <br>
                                                      {{ ++$no }}. {{ @$row->nama_pegawai5 }} <br>
                                                    </td>
                            </tr>
                        @endforeach
                    </tbody>            
                </table>
@endsection
