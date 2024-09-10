@extends('layouts.master')
@section('meta_title', 'Question Level')
@section('contant')


    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Level</h1>

                <a href="javascript:void(0);" class="btn btn-sm btn-primary mb-0" data-bs-toggle="modal"
                    data-bs-target="#levelModal">Create a Level</a>
            </div>
            
        </div>

        <!-- Card START -->
        <div class="card bg-transparent border">
            <div class="card-body">
                <div class="table-responsive border-0 rounded-3">
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">#</th>
                                <th scope="col" class="border-0 w-75">Tttle</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($levels as $key => $row)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>
                                        <a href="javascript:void(0);" data-item-id ="{{ $row->id }}"
                                            class="editLevel btn btn-success-soft btn-round me-1 mb-1 mb-md-0">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-id="{{ $row->id }}"
                                            class="deleteLevel btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                            title="Delete">
                                            <i class="bi bi-trash"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- Add Modal --}}
    <div class="modal fade" id="levelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addTopicLabel">Add Lebal</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x-lg"></i></button>
                </div>
                <form action="{{ route('admin.quiz.level.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body row">
                        <div class="col-md-6">
                            <label class="form-label">Ttile</label>
                            <input class="form-control" type="text" name="title" value="{{ old('title') }}"
                                placeholder="Enter title">

                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success my-0">Save Level</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- Edit Modal --}}
    <div class="modal fade" id="editLevel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addTopicLabel">Edit Level</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <form action="{{ route('admin.quiz.level.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="levelId" id="levelId">
                    <div class="modal-body row">
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input class="form-control" type="text" id="titleName" name="title"
                                value="{{ old('title') }}" placeholder="Enter title name">

                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success my-0">Update Level</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- Delete Modal  --}}
    <div class="modal fade admin-query" id="deleteLevel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addTopicLabel">{{ __('Delete Student') }}</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>



                <div class="modal-body">
                    <form action="{{ route('admin.quiz.level.destroy') }}" method="post">
                        @csrf
                        <div class="text-center">
                            <h4>{{ __('Are you sure to delete ?') }} </h4>
                        </div>
                        <input type="hidden" name="id" value="" id="levelDeleteId">
                        <div class="mt-40 d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary my-0"
                                data-bs-dismiss="modal">{{ __('Cancel') }}</button>

                            <button class="btn btn-danger-soft my-0" type="submit">{{ __('Delete') }}</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




    @push('custom_css')
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" />
    @endpush
    @push('custom_js')
        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();


                $(document).on('click', '.editLevel', function() {
                    let id = $(this).data('item-id');
                    let url = $('meta[name="site-url"]').attr('content');
                    url = url + '/admin/level/edit/' + id
                    let token = $('meta[name="csrf-token"]').attr('content');



                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            '_token': token,
                        },
                        success: function(level) {
                            $('#levelId').val(level.id);
                            $('#titleName').val(level.title);
                            $("#editLevel").modal('show');
                        },
                        error: function(data) {
                            toastr.error('Something Went Wrong', 'Error');
                        }
                    });


                });


                $(document).on('click', '.deleteLevel', function() {
                    let id = $(this).data('id');
                    $('#levelDeleteId').val(id);
                    $("#deleteLevel").modal('show');
                });


            });




        </script>
        @if ($errors->any())
            <script>
                $(document).ready(function() {
                    $('#levelModal').modal('show');
                });
            </script>
        @endif


    @endpush
@endsection
