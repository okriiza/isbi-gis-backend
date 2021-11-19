@extends('layouts.home')

@section('title')
    Edit Jenis - GIS ISBI
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Jenis</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item ">List Jenis</li>
                        <li class="breadcrumb-item active">Edit Jenis</li>
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
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header ">
                            <h5 class="card-title">Form Edit Jenis</h5>
                            <a href="{{ route('type.index') }}" class="btn btn-sm btn-warning float-right">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('type.update', $type->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label>Nama Jenis</label>
                                    <input type="text" name="name_type"
                                        class="form-control @error('name_type') is-invalid @enderror"
                                        value="{{ $type->name_type }}">
                                    @error('name_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Unsur</label>
                                    <select name="element_id" id=""
                                        class="form-control @error('element_id') is-invalid @enderror">
                                        @foreach ($getElement as $item)
                                            <option {{ $item->id == $type->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->name_element }}</option>
                                        @endforeach
                                    </select>
                                    @error('element_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm "><i class="fa fa-save"></i>
                                    Update</button>
                            </form>
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
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
