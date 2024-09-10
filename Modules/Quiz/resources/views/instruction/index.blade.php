@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Instruction')
@section('contant')


    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Instruction</h1>

                <a href="{{ route('admin.quiz.instruction.create') }}" class="btn btn-sm btn-primary mb-0">Add a
                    Instruction</a>
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
                                <th scope="col" class="border-0">Title</th>
                                <th scope="col" class="border-0 w-50">Content</th>
                                <th scope="col" class="border-0">Status</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instructions as $key => $row)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>{!! Str::limit(strip_tags($row->content), 150, '...') !!}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-md">
                                            <input class="form-check-input" type="checkbox" onchange="update_status(this)"
                                                 value="{{ $row->id }}" id="status_enable_disable"
                                                {{ $row->status == 1 ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.quiz.instruction.edit',$row->id) }}" 
                                            class="editStudent btn btn-success-soft btn-round me-1 mb-1 mb-md-0">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-id="{{ $row->id }}"
                                            class="deleteCategory btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                            title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </a>
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
    <div class="modal fade admin-query" id="deleteCategory">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addTopicLabel">{{ __('Delete Student') }}</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x-lg"></i></button>
                </div>



                <div class="modal-body">
                    <form action="{{ route('admin.quiz.instruction.delete') }}" method="post">
                        @csrf
                        <div class="text-center">
                            <h4>{{ __('Are you sure to delete ?') }} </h4>
                        </div>
                        <input type="hidden" name="id" value="" id="categirytDeleteId">
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


                $(document).on('click', '.deleteCategory', function() {
                    let id = $(this).data('id');
                    $('#categirytDeleteId').val(id);
                    $("#deleteCategory").modal('show');
                });


            });





            function update_status(el) {
                let url = $('meta[name="site-url"]').attr('content');
                url = url + '/admin/instruction/status_enable_disable';
                var status = el.checked ? 1 : 0;
               

                $.post(url, {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: el.value,
                        status: status,
                    })
                    .done(function(data) {
                        if (data.message === 'success') {
                            toastr.success('Status updated successfully');
                        } else {
                            toastr.error(data.error);
                        }
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        toastr.error('An error occurred while updating the status');
                        console.error('Error:', errorThrown);
                    });
            }
        </script>
    @endpush

@endsection
