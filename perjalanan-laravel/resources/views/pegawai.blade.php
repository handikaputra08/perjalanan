@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm">
        <div class="page-header text-center">
            <div class="page-title">
                <h1>Data Pegawai</h1>
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
                    <a href="tambahpegawai" class="btn btn-primary" style="border-radius: 7px; font-weight: bold;"><i class="fa-solid fa-user-plus"></i>&nbspInput</a>
                </div>
            </div>
        {{-- <div class="page-header float-right mt-3">
            <div class="page-title">
                <form action="pegawai" method="GET"    >
                    <div class="input-group mb-3">
                        <input type="search" name="search" class="form-control" placeholder="Cari Pegawai" name="search">

                    </div>
                </form>
            </div>
        </div> --}}


    <div class="col-sm-12 table-responsive">
        <table id="example" class="table-bordered table-striped dataTable no-footer table" style="width: 100%;" role="grid" aria-describedby="t_draft_letter_info">
            <thead>
                <tr role="row">
                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 70px;" aria-label="Aksi">Aksi</th>
                    <th class="text-left " tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1" style="width: 75px;" aria-sort="descending">Nama</th>
                    <th style="width: 10px;" class="text-left sorting" tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1">Pangkat/Gol</th>
                    <th style="width: 76px;" class="text-left sorting" tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1">NIP</th>
                    <th style="width: 76px;" class="text-left sorting" tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1">Jabatan</th>
                    <th style="width: 76px;" class="text-left sorting" tabindex="0" aria-controls="t_draft_letter" rowspan="1" colspan="1">Nomor Rekening</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr role="row">
                        <td class="text-center sorting_disabled">
                            <a href="tampilkandata/{{ $row->id }}"class="btn btn-success" style="border-radius: 7px;"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" type="button" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}" style="border-radius: 7px;"><i class="fa-solid fa-trash-can" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')"></i></a>
                        </td>
                        <td class="text-left">{{ $row->nama }}</td>
                        <td class="text-left">{{ $row->gol }}</td>
                        <td class="text-left">{{ $row->nip }}</td>
                        <td class="text-left">{{ $row->jabatan }}</td>
                        <td class="text-left">{{ $row->rekening }}</td>
                    </tr>
                @endforeach                
            </tbody>            
        </table>
        
        {{-- <div>
            Showing
            {{ $data->firstItem() }}
            to
            {{ $data->lastItem() }}
            of
            {{ $data->total() }}
            <div class="pull-right">
                {{ $data->links('pagination::bootstrap-4') }}
            </div>        
        </div>       --}}
    </div>
    </div>
</div>
@endsection
