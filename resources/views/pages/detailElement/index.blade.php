@extends('layouts.home')
@section('title')
    Detail Unsur - GIS ISBI
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Unsur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List Detail Unsur</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header ">
                            <h5 class="card-title">List Detail Unsur</h5>
                            <a href="{{ route('detail.element.create') }}" class="btn btn-sm btn-primary float-right">
                                <i class="fas fa-plus"></i>
                                Tambah Detail Unsur
                            </a>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Daerah</th>
                                        <th>Nama Unsur</th>
                                        <th>Nama Jenis</th>
                                        <th>Sumber</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($getDetailElements as $detailElement)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $detailElement->area->name_area }}</td>
                                            <td>{{ $detailElement->element->name_element }}</td>
                                            <td>{{ $detailElement->type->name_type }}</td>
                                            <td>{{ $detailElement->source }}</td>
                                            <td>
                                                <a href="{{ route('detail.element.edit', $detailElement->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('detail.element.show', $detailElement->id) }}"
                                                    class="btn btn-success btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <form action="{{ route('detail.element.destroy', $detailElement->id) }}"
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
                                    @endforeach
                                </tbody>
                            </table>
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
