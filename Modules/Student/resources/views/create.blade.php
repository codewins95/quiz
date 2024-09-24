@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Student Add')
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
                                <h5 class="card-header-title">Student add</h5>
                                <a href="{{ route('admin.student.index') }}" class="btn btn-sm btn-primary mb-0">Back</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card body START -->
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.student.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
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
                                <label for="email" class="col-sm-2 control-label">
                                    Email </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="phone" class="col-sm-2 control-label">
                                    Phone </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="dob" class="col-sm-2 control-label">
                                    Date of Birth </label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="dob" name="dob"
                                        value="{{ old('dob') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="gender" class="col-sm-2 control-label">
                                    Gender </label>
                                <div class="col-sm-6">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="religion" class="col-sm-2 control-label">
                                    Religion </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="religion" name="religion"
                                        value="{{ old('religion') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('religion')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="country" class="col-sm-2 control-label">
                                    Country </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="country" name="country"
                                        value="{{ old('country') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="state" class="col-sm-2 control-label">
                                    State </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="state" name="state"
                                        value="{{ old('state') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="address" class="col-sm-2 control-label">
                                    Address </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ old('address') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="photo" class="col-sm-2 control-label">
                                    Profile Picture
                                </label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" id="photo" name="photo"
                                        value="{{ old('photo') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mt-3">
                                <label for="username" class="col-sm-2 control-label">
                                    Username <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ old('username') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="password" class="col-sm-2 control-label">
                                    Password <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ old('password') }}">
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="active" class="col-sm-2 control-label">
                                    Account Status </label>
                                <div class="col-sm-6">
                                    <select name="active" id="active" class="form-control">
                                        <option value="1" {{ old('active') == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('active') == 0 ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-4 control-label">
                                    @error('active')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary mb-0">Add Student</button>
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
