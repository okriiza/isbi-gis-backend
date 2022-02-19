@extends('layouts.home')
@section('title')
    Tambah Audio Detail Unsur - GIS ISBI
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daerah</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item ">List Detail Unsur</li>
                        <li class="breadcrumb-item ">Tambah Detail Unsur</li>
                        <li class="breadcrumb-item active">Tambah Audio Detail Unsur</li>
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
                            <h5 class="card-title">Form Tambah Audio Detail Unsur</h5>
                            <a href="{{ route('detail.element.index') }}" class="btn btn-sm btn-warning float-right">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('detail.element.storeAudio', $getDetailElement->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Audio</label>
                                    <input type="file" name="path_audio[]"
                                        class="form-control-file @error('path_audio') is-invalid @enderror" multiple>
                                    @error('path_audio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm "><i class="fa fa-save"></i>
                                    Simpan</button>
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
        //create dynamic input video with button add and remove
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append(
                '<div id="input' + i + '" class="row mb-3">' +
                '<div class="col-md-10">' +
                '<input type="text" name="path_video[]" class="form-control mb-2 @error('path_video') is-invalid @enderror" placeholder="Masukan Link Video...">' +
                '</div>' +
                '<div class="col-md-2">' +
                '<span class="btn btn-danger btn-sm remove" id="remove"><i class="fas fa-minus"></i></span>' +
                '</div>' +
                '</div>'
            );
        });
        // create button remove with dynamic input
        $(document).on('click', '.remove', function() {
            remove_id = $(this).closest('.row').attr('id');
            $('#' + remove_id).remove();
        });
    </script>
@endpush
