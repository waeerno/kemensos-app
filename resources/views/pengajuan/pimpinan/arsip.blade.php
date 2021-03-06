@extends('layouts.app')


@section('content')

<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Arsip Bantuan</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                       Arsip pengajuan bantuan oleh yang diajukan oleh lansia berdasarkan sepengetahuan pembimbing yang telah ditetapkan sebelumnya
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lansia</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Sesi</th>
                                <th>Status</th>
                                <th>keputusan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td><span class="font-weight-bold">{{$loop->iteration}}</span> </td>
                                <th>{{ $data->lansia->nama }} <br> <small>{{ $data->nama_usaha }}</small></th>
                                <td><span class="font-weight-bold">{{ $data->created_at }}</span> </td>
                                <th>{{ $data->sesi->tahun_anggaran }}</th>
                                <td>
                                    <div class="badge badge-pill badge-glow badge-{{ $data->status_pengajuan == 1 ? 'info' : ($data->status_pengajuan == 2 ? 'warning' : 'primary' ) }}">
                                        {{ $data->status_pengajuan == 1 ? 'Belum di proses' : ($data->status_pengajuan == 2 ? 'Proses Pendamping' : 'Proses Pimpinan' ) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-pill badge-glow badge-{{ $data->keputusan == 1 ? 'primary' : ($data->keputusan == 2 ? 'warning' : 'warning' ) }}">
                                        {{ $data->keputusan == 1 ? 'Diterima' : ($data->keputusan == 2 ? 'Ditolak' : 'Belum diproses' ) }}
                                    </div>
                                </td>
                                <td><div class="row">
                                    {{-- show --}}
                                    <a class="btn btn-outline-info waves-effect btn-xm mb-1"  data-toggle="modal" data-backdrop="false" data-target="#backdrop-{{ $loop->index}}">

                                        <span><i data-feather='info'></i></span>
                                    </a>
                                    {{-- acc --}}
                                    <a>
                                        <form onsubmit="return confirm('Terima pengajuan ini?')" class="form"  method="POST" action="{{ route('pengajuan-baru.terima', [$data->id]) }}">
                                            @csrf
                                            <input type="hidden" value="PUT" name="_method">
                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                            <button type="submit" class="btn btn-outline-primary waves-effect"><i data-feather='check-circle'></i></button>
                                        </form>
                                    </a>
                                    {{-- reject --}}
                                    <a>
                                        <form onsubmit="return confirm('Tolak pengajuan ini?')" class="form"  method="POST" action="{{ route('pengajuan-baru.tolak', [$data->id]) }}">
                                            @csrf
                                            <input type="hidden" value="PUT" name="_method">
                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                            <button type="submit" class="btn btn-outline-danger waves-effect"> <i data-feather='x-square'></i></button>
                                        </form>
                                    </a>

                                </div>
                                </td>

                            </tr>
                            @include('pengajuan.pimpinan.modal')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
</div>

@endsection

