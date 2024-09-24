@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Previous Paper Add')
@section('contant')
    <div class="page-content-wrapper border">
        <div class="row d-flex justify-content-center g-4">
            <!-- Left side START -->
            <div class="col-xl-10">
                <div class="card shadow">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <div class="mb-3">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Previous Paper add</h5>
                                {{-- <a href="" class="btn btn-sm btn-primary mb-0">Back</a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Card body START -->
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.previouspaper.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="categoryId" value="{{$categoryId}}">
                            <div class="form-group row mt-3">
                                <label for="name_id" class="col-sm-2 control-label">
                                    Name <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name_id" name="name"
                                        value="{{ old('name') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                       

                            <div class="form-group row mt-3">
                                <label for="file" class="col-sm-2 control-label">
                                    File <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" id="file" name="file"
                                        value="{{ old('file') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 control-label">
                                    Description 
                                </label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" row="3" id="description" name="description">{{ old('description') }}</textarea>
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary mb-0">Add Paper</button>
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
            function updateSubCategory(el) {
                let url = $('meta[name="site-url"]').attr('content') + '/api/sub-category';
                let categoryId = $(el).val();

                $.post(url, {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: categoryId,
                    })
                    .done(function(res) {
                        if (res && res.success) {
                            console.log('Sub-categories:', res.data);
                            $('#subCategoryId').empty();
                            if (res.data.length === 0) {
                                $('#subCategoryId').append('<option value="">Data not found :) 🧐</option>');
                            } else {
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



            $('#costDiv').hide();

            $('#ispaid').change(function(event) {
                if ($(this).val() == 2) {
                    $('#costDiv').show();
                    $('#cost').prop('required', true);
                } else {
                    $('#costDiv').hide();
                }
            });
        </script>
    @endpush

@endsection
