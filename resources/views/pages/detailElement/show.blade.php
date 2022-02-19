@extends('layouts.home')

@section('title')
    Detail Daerah - GIS ISBI
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Daerah</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item ">List Daerah</li>
                        <li class="breadcrumb-item active">Detail Daerah</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header ">
                            <h5 class="card-title">Detail Daerah</h5>
                            <a href="{{ route('detail.element.index') }}" class="btn btn-sm btn-warning float-right">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        <span class="text-bold">Jenis : </span>
                                        <p for="">{{ $detailElement->type->name_type }}</p>
                                    </div>
                                    <div class="">
                                        <span class="text-bold">Lokasi : </span>
                                        <p for="">{{ $detailElement->area->name_area }}</p>
                                    </div>
                                    <div class="">
                                        <span class="text-bold">Unsur : </span>
                                        <p for="">{{ $detailElement->element->name_element }}</p>
                                    </div>
                                    <div class="">
                                        <span class="text-bold">Deskripsi</span>
                                        <p class="mt-2">{!! Str::limit(strip_tags($detailElement->description), 1000) !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Image</h3>
                            <a href="{{ route('detail.element.createImage', $detailElement->id) }}"
                                class="btn btn-sm btn-success float-right">
                                <i class="fas fa-plus"></i>
                                Tambah Image
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="row p-3 d-flex justify-content-center align-items-center">
                                @forelse ($detailElement->detailImages as $item)
                                    <div class="col-sm-6 col-xl-4 mb-3">
                                        <img src="{{ $item->path_image }}" width="150" height="150"
                                            class="rounded mb-2">
                                        <div class="">
                                            <form action="{{ route('detail.element.destroyImage', $item->id) }}"
                                                method="post" class="d-inline"
                                                onclick="return confirm('Yakin hapus data?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-sm-12 col-xl-12 mb-3">
                                        <div class="text-center mt-3">Data Tidak Ditemukan.</div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Video Link</h3>
                            <a href="{{ route('detail.element.createVideo', $detailElement->id) }}"
                                class="btn btn-sm btn-success float-right">
                                <i class="fas fa-plus"></i>
                                Tambah Link
                            </a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Link Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($detailElement->detailVideos as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->path_video }}</td>
                                            <td>
                                                <form action="{{ route('detail.element.destroyVideo', $item->id) }}"
                                                    method="post" class="d-inline"
                                                    onclick="return confirm('Yakin hapus data?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">Data Tidak Ditemukan</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Audio</h3>
                            <a href="{{ route('detail.element.createAudio', $detailElement->id) }}"
                                class="btn btn-sm btn-success float-right">
                                <i class="fas fa-plus"></i>
                                Tambah Audio
                            </a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <div class="row">
                                @forelse ($detailElement->detailAudios as $item)
                                    <div class="col-sm-12 col-xl-6 mb-3">
                                        <div class="mx-3">
                                            <span>{{ $item->name_audio }}</span>
                                            <audio controls>
                                                <source src="{{ $item->path_audio }}" type="audio/mpeg">
                                            </audio>
                                            <div class="mt-2">
                                                <form action="{{ route('detail.element.destroyAudio', $item->id) }}"
                                                    method="post" class="d-inline"
                                                    onclick="return confirm('Yakin hapus data?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-sm-12 col-xl-12 mb-3">
                                        <div class="text-center mt-3">Data Tidak Ditemukan.</div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('addon-script')
@endpush
