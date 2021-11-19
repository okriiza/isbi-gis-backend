@extends('layouts.home')

@section('title')
    Edit Daerah - GIS ISBI
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
                        <li class="breadcrumb-item ">List Daerah</li>
                        <li class="breadcrumb-item active">Edit Daerah</li>
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
                            <h5 class="card-title">Form Edit Daerah</h5>
                            <a href="{{ route('detail.element.index') }}" class="btn btn-sm btn-warning float-right">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('detail.element.update', $getDetailElement->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label>Nama Daerah</label>
                                    <select name="area_id" id=""
                                        class="form-control @error('area_id') is-invalid @enderror">
                                        <option value="">Pilih Daerah</option>
                                        @foreach ($getAreas as $area)
                                            <option {{ $area->id == $getDetailElement->area_id ? 'selected' : '' }}
                                                value="{{ $area->id }}">
                                                {{ $area->name_area }}</option>
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
                                            <option {{ $element->id == $getDetailElement->element_id ? 'selected' : '' }}
                                                value="{{ $element->id }}">{{ $element->name_element }}</option>
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
                                            <option {{ $type->id == $getDetailElement->type_id ? 'selected' : '' }}
                                                value="{{ $type->id }}">{{ $type->name_type }}</option>
                                        @endforeach
                                    </select>
                                    @error('type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Photo</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ Storage::url($getDetailElement->image) }}" width="100"
                                                height="100" alt="image">
                                        </div>
                                        <div class="col-md-10">
                                            <input type="file" name="image"
                                                class="form-control-file @error('image') is-invalid @enderror">
                                        </div>
                                    </div>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Video</label>
                                    <input type="text" name="video"
                                        class="form-control @error('video') is-invalid @enderror"
                                        value="{{ $getDetailElement->video }}">
                                    @error('video')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description"
                                        class="form-control @error('description') is-invalid @enderror" id="summernote"
                                        cols="30" rows="10"
                                        style="width: 70%">{{ $getDetailElement->description }}</textarea>
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
                                        value="{{ $getDetailElement->source }}">
                                    @error('source')
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
    </script>
@endpush
