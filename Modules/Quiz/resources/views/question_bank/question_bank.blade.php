@extends('layouts.master')
@section('meta_title', 'Question Level')
@section('contant')


    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Question Bank ({{ $papers->name}})</h1>
                <a href="{{ route('admin.quiz.question.bank.create', $papers->id) }}" class="btn btn-sm btn-primary mb-0"> + Add
                    a Question</a>
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
                                <th scope="col" class="border-0">Difficulty Level</th>
                                <th scope="col" class="border-0">Question</th>
                                <th scope="col" class="border-0">Question Group</th>
                                {{-- <th scope="col" class="border-0">Question Paper</th> --}}
                                <th scope="col" class="border-0">Question Type</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($questions as $key => $row)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->questionType->title }}</td>
                                    <td>
                                        @if (empty($row->upload))
                                            {!! $row->question !!}
                                        @else
                                            <img src="{{ uploaded_asset($row->upload) }}" alt="img">
                                        @endif

                                    </td>
                                    <td>{{ $row->questionGroup->name }}</td>
                                    <td>
                                        @if ($row->type == 1)
                                            Single Answer
                                        @elseif ($row->type == 2)
                                            Multi Answer
                                        @elseif ($row->type == 3)
                                            Fill In The Blanks
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" title="VIew">
                                            <i class="bi bi-check-square"></i>
                                        </a>
                                        <a href="{{ route('admin.quiz.question.bank.edit', ['paper_id' => $papers->id, 'question_id' => $row->id]) }}" data-item-id ="{{ $row->id }}"
                                            class="editLevel btn btn-success-soft btn-round me-1 mb-1 mb-md-0" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-id="{{ $row->id }}"
                                            class="deleteLevel btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                            title="Delete" title="Delete">
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
    <div class="modal fade admin-query" id="deleteLevel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="addTopicLabel">{{ __('Delete Student') }}</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x-lg"></i></button>
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
