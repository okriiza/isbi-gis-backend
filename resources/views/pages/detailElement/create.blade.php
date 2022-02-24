@extends('layouts.home')
@section('title')
    Tambah Detail Unsur - GIS ISBI
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
                        <li class="breadcrumb-item active">Tambah Detail Unsur</li>
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
                            <h5 class="card-title">Form Tambah Detail Unsur</h5>
                            <a href="{{ route('detail.element.index') }}" class="btn btn-sm btn-warning float-right">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                        <div class="card-body ">
                            <form action="{{ route('detail.element.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Sorry !</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Daerah</label>
                                            <select name="area_id" id=""
                                                class="form-control @error('area_id') is-invalid @enderror">
                                                <option value="">Pilih Daerah</option>
                                                @foreach ($getAreas as $area)
                                                    <option value="{{ $area->id }}">{{ $area->name_area }}</option>
                                                @endforeach
                                            </select>
                                            @error('area_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Unsur</label>
                                            <select name="element_id" id=""
                                                class="form-control @error('element_id') is-invalid @enderror">
                                                <option value="">Pilih Unsur</option>
                                                @foreach ($getElemets as $element)
                                                    <option value="{{ $element->id }}">{{ $element->name_element }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('element_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Jenis</label>
                                            <select name="type_id" id=""
                                                class="form-control @error('type_id') is-invalid @enderror">
                                                <option value="">Pilih Jenis</option>
                                                @foreach ($getTypes as $type)
                                                    <option value="{{ $type->id }}">{{ $type->name_type }}</option>
                                                @endforeach
                                            </select>
                                            @error('type_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description"
                                                class="form-control @error('description') is-invalid @enderror"
                                                id="summernote" cols="30" rows="10" style="width: 100%"></textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Sumber</label>
                                            <input type="text" name="source"
                                                class="form-control @error('source') is-invalid @enderror"
                                                placeholder="Masukan Sumber...">
                                            @error('source')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" id="field_image">
                                            <label>Photo</label>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="text" name="name_image[]"
                                                        class="form-control mb-2 @error('name_image') is-invalid @enderror"
                                                        placeholder="Masukkan Nama Image...">
                                                    @error('name_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <input type="file" name="path_image[]"
                                                        class="form-control @error('path_image') is-invalid @enderror">
                                                    @error('path_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-2">
                                                    <span class="btn btn-success btn-sm" id="add_image"><i
                                                            class="fas fa-plus"></i></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group" id="field_audio">
                                            <label>Audio</label>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="text" name="name_audio[]"
                                                        class="form-control mb-2 @error('name_audio') is-invalid @enderror"
                                                        placeholder="Masukkan Nama Audio...">
                                                    @error('name_audio')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <input type="file" name="path_audio[]"
                                                        class="form-control @error('path_audio') is-invalid @enderror">
                                                    @error('path_audio')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-2">
                                                    <span class="btn btn-success btn-sm" id="add_audio"><i
                                                            class="fas fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="field_video">
                                            <label>Video</label>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="text" name="path_video[]"
                                                        class="form-control mb-2 @error('path_video') is-invalid @enderror"
                                                        placeholder="Masukan Link Video...">
                                                    @error('path_video')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-2">
                                                    <span class="btn btn-success btn-sm" id="add_video"><i
                                                            class="fas fa-plus"></i></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
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
        $(function() {
            // Summernote
            $('#summernote').summernote({
                placeholder: 'Masukan Deskripsi...',
                tabsize: 2,
                height: 300
            })

            // // CodeMirror
            // CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            //     mode: "htmlmixed",
            //     theme: "monokai"
            // });
        })

        //create dynamic input video with button add and remove
        var i = 1;
        $('#add_video').click(function() {
            i++;
            $('#field_video').append(
                '<div id="input' + i + '" class="row mb-3">' +
                '<div class="col-md-10">' +
                '<input type="text" name="path_video[]" class="form-control mb-2 @error('path_video') is-invalid @enderror" placeholder="Masukan Link Video...">' +
                '</div>' +
                '<div class="col-md-2">' +
                '<span class="btn btn-danger btn-sm remove_video" id="remove_video"><i class="fas fa-minus"></i></span>' +
                '</div>' +
                '</div>'
            );
        });
        // create button remove with dynamic input
        $(document).on('click', '.remove_video', function() {
            remove_id = $(this).closest('.row').attr('id');
            $('#' + remove_id).remove();
        });

        //create dynamic input image with button add and remove
        var j = 1;
        $('#add_image').click(function() {
            j++;
            $('#field_image').append(
                '<div id="input' + j + '" class="row mb-3">' +
                '<div class="col-md-10">' +
                '<input type="text" name="name_image[]" class="form-control mb-2 @error('path_image') is-invalid @enderror" placeholder="Masukkan Nama Image...">' +
                '<input type="file" name="path_image[]" class="form-control @error('path_image') is-invalid @enderror">' +
                '</div>' +
                '<div class="col-md-2">' +
                '<span class="btn btn-danger btn-sm remove_image" id="remove_image"><i class="fas fa-minus"></i></span>' +
                '</div>' +
                '</div>'
            );
        });
        // create button remove with dynamic input
        $(document).on('click', '.remove_image', function() {
            remove_id = $(this).closest('.row').attr('id');
            $('#' + remove_id).remove();
        });

        //create dynamic input audio with button add and remove
        var k = 1;
        $('#add_audio').click(function() {
            k++;
            $('#field_audio').append(
                '<div id="input' + k + '" class="row mb-3">' +
                '<div class="col-md-10">' +
                '<input type="text" name="name_audio[]" class="form-control mb-2 @error('path_audio') is-invalid @enderror" placeholder="Masukkan Nama Audio...">' +
                '<input type="file" name="path_audio[]" class="form-control @error('path_audio') is-invalid @enderror">' +
                '</div>' +
                '<div class="col-md-2">' +
                '<span class="btn btn-danger btn-sm remove_audio" id="remove_audio"><i class="fas fa-minus"></i></span>' +
                '</div>' +
                '</div>'
            );
        });
        // create button remove with dynamic input
        $(document).on('click', '.remove_audio', function() {
            remove_id = $(this).closest('.row').attr('id');
            $('#' + remove_id).remove();
        });
    </script>
@endpush
