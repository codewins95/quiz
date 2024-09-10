@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Question Bank Filter')
@section('contant')
    <div class="page-content-wrapper border">
        <div class="row g-4 d-flex justify-content-center">
            <!-- Left side START -->
            <div class="col-xl-8">

                <div class="card shadow">

                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h5 class="card-header-title">Question Bank</h5>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <form action="{{ route('admin.quiz.bank.filter') }}" class="row g-4" method="GET">
                            <input type="hidden" name="{{ csrf_token() }}">
                            <div class="col-lg-12">
                                <label class="form-label">Select Category</label>
                                <select name="categoryId" class="form-select js-choice z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" id="categoryId" onchange="updateSubCategory(this)">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $key => $row)
                                        <option value="{{ $row->id }}">{{ ++$key . '. ' . $row->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <!-- Choice item -->
                            <div class="col-lg-12" id="catDiv" style="display: none">
                                <label class="form-label">Select Sub Category</label>
                                <select name="subCategoryId" class="form-select  z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" id="subCategoryId">
                                    <option value="">Select Sub Category</option>

                                </select>

                            </div>


                            <!-- Save button -->
                            <div class="d-sm-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mb-0">Create Bank</button>
                            </div>
                        </form>
                    </div>
                    <!-- Card body END -->

                </div>
            </div>
        </div>
    </div>


    @push('custom_css')
        <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/vendor/choices/css/choices.min.css') }}">
    @endpush

    @push('custom_js')
        <script src="{{ static_asset('assets/vendor/choices/js/choices.min.js') }}"></script>

        <script>
            //$('#catDiv').css('display', 'none');

            function updateSubCategory(el) {
                let url = $('meta[name="site-url"]').attr('content') + '/api/sub-category';
                let categoryId = $(el).val();

                $.post(url, {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: categoryId,
                    })
                    .done(function(res) {
                        if (res && res.success) {
                            //console.log('Sub-categories:', res.data);
                            $('#subCategoryId').empty();
                            if (res.data.length === 0) {
                                $('#catDiv').css('display', 'none');
                                $('#subCategoryId').append('<option value="">Data not found :) 🧐</option>');
                            } else {
                                $('#catDiv').css('display', 'block');
                                $('#subCategoryId').append('<option value="">Select Sub Category</option>');
                                $.each(res.data, function(key, value) {
                                    $('#subCategoryId').append('<option value="' + value.id + '">' + value.name +
                                        '</option>');
                                });

                            }
                        } else {
                            toastr.error(res && res.message ? res.message :
                                'An error occurred while updating the status');
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
