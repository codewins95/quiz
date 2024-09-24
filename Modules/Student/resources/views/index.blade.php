@extends('layouts.master')
@section('meta_title', 'Student')
@section('contant')


    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Student</h1>

                <a href="{{route('admin.student.create')}}" class="btn btn-sm btn-primary mb-0" >+ Add a student</a>
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
                                <th scope="col" class="border-0">Photo</th>
                                <th scope="col" class="border-0">StudetnId</th>
                                <th scope="col" class="border-0">Name</th>
                                <th scope="col" class="border-0">Email</th>
                                <th scope="col" class="border-0">Number</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($students as $key => $student)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        <img src="{{ app('url')->asset($student->photo) }}" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px;">
                                    </td>
                                    <td>{{ $student->studentID }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>
                                        <a href="{{route('admin.student.edit',$student->id)}}"
                                            class="editLevel btn btn-success-soft btn-round me-1 mb-1 mb-md-0">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-id="{{ $student->id }}"
                                            class="deleteModal btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
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


    {{-- Delete Modal  --}}
    <div class="modal fade admin-query" id="deleteModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addTopicLabel">{{ __('Delete Student') }}</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>



                <div class="modal-body">
                    <form action="{{ route('admin.student.delete') }}" method="post">
                        @csrf
                        <div class="text-center">
                            <h4>{{ __('Are you sure to delete ?') }} </h4>
                        </div>
                        <input type="hidden" name="id" value="" id="deleteId">
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

                $(document).on('click', '.deleteModal', function() {
                    let id = $(this).data('id');
                    $('#deleteId').val(id);
                    $("#deleteModal").modal('show');
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
