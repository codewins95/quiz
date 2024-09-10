@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Question Pappers')
@section('contant')


    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0"><span class="h4">Question Paper of {{ $categories->name }}</span></h1>

                <a href="{{ route('admin.quiz.paper.create.papper', $categories->id) }}"
                    class="btn btn-sm btn-primary mb-0">Create a Paper</a>
            </div>
        </div>




        <!-- Card START -->

        <div class="card-body">
            <div class="tab-pane fade active show" id="nav-preview-tab-1" role="tabpanel">
                <div class="row g-4">
                    @foreach ($papers as $key => $row)
                        <div class="col-md-6 col-xxl-4">
                            <div class="card bg-transparent border h-100">
                                <!-- Card header -->
                                <div
                                    class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
                                    <div class="d-sm-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-md flex-shrink-0">
                                            <img class="avatar-img rounded-circle"
                                                src="{{ uploaded_asset($categories->icon) }}" alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                            <h5 class="mb-0"><a href="{{ route('admin.quiz.question.bank', $row->id) }}">{{ $row->name }}</a></h5>
                                            <p class="mb-0 small">{{ $categories->name }}</p>
                                        </div>
                                    </div>

                                    <!-- Edit dropdown -->
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                                            id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots fa-fw"></i>
                                        </a>
                                        <!-- dropdown button -->
                                        <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                            aria-labelledby="dropdownShare1" style="">
                                            <li><a class="dropdown-item" href="{{ route('admin.quiz.question.bank', $row->id) }}">
                                                <i class="bi bi-check2-circle fa-fw me-2"></i>Add Question</a></li>
                                            <li><a class="dropdown-item" href="{{ route('admin.quiz.paper.edit',$row->id) }}">
                                                    <i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="">
                                                        <i class="bi bi-download fa-fw me-2"></i>Export</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-globe fa-fw me-2"></i>{{ Carbon\Carbon::parse($row->created_at)->format('d M Y') }}</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <!-- Total students -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0">
                                                <i class="fas fa-book fa-fw"></i>
                                            </div>
                                            <h6 class="mb-0 ms-2 fw-light">Total Question</h6>
                                        </div>
                                        <span class="mb-0 fw-bold">{{questionCount($row->id)}}</span>
                                    </div>

                                    <!-- Total courses -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0">
                                                <i class="fas fa-book fa-fw"></i>
                                            </div>
                                            <h6 class="mb-0 ms-2 fw-light">Test Fee</h6>
                                        </div>
                                        <span class="mb-0 fw-bold">
                                            @if ($categories->ispaid == 1)
                                                ₹ {{ $categories->cost }}
                                            @else
                                                Free
                                            @endif
                                        </span>
                                    </div>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer bg-transparent border-top">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                        <!-- Message button -->
                                        <a href="javascript:void(0);"
                                            class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="" data-bs-original-title="Message"
                                            aria-label="Message">
                                            <i class="bi bi-envelope-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @endforeach
                </div>
            </div>

            <div class="card-footer bg-transparent pt-0 px-0">
                {!! $papers->links() !!}
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
                url = url + '/admin/quiz/papper/status_enable_disable';
                var status = el.checked ? 1 : 0;
                var target = $(el).data('target');

                $.post(url, {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: el.value,
                        status: status,
                        target: target
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
