@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Question Pappers' . (isset($papers) ? 'Update' : 'Add'))
@section('contant')
    <div class="page-content-wrapper border">
        <div class="row g-4">
            <!-- Left side START -->
            <div class="col-xl-12">

                <div class="card shadow">

                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <div class="row mb-3">
                            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Question Papper {{ isset($papers) ? 'Update' : 'Add' }} 👉
                                    {{ $categories->name }} </h5>

                                <a href="{{route('admin.quiz.paper.fiilter')}}?categoryId={{$categories->id}}"
                                    class="btn btn-sm btn-primary mb-0">All Paper</a>
                            </div>

                        </div>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">

                        <form
                            action="{{ isset($papers) ? route('admin.quiz.paper.update', $papers->id) : route('admin.quiz.paper.store') }}"
                            class="was-validated row g-4" method="POST">
                            @csrf
                            @isset($papers)
                                @method('PUT')
                            @endisset

                            <input type="hidden" name="cat_id" value="{{ $categories->id }}">
                            <div class="col-lg-12">
                                <label class="form-label">Peper Title <span class="text-danger">*</span> </label>
                                <input type="text" name="name" class="form-control" placeholder="Peper Name"
                                    required="" value="{{ old('name', @$papers->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">

                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="For write brief description of your question paper.">{{ old('description', @$papers->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Instruction</label>
                                <select name="instruction" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm">
                                    <option value="">Please Select </option>
                                    @foreach ($instructions as $row)
                                        <option value="{{ $row->id }}"
                                            {{ old('instruction', @$papers->instruction) == $row->id ? 'selected' : '' }}>
                                            {{ $row->title }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('instruction')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="col-lg-4">
                                <label class="form-label">Exam Status <span class="text-danger">*</span></label>
                                <select name="examStatus" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    <option value="1"
                                        {{ old('examStatus', @$papers->examStatus) == 1 ? 'selected' : '' }}>One Time
                                    </option>
                                    <option value="2"
                                        {{ old('examStatus', @$papers->examStatus) == 2 ? 'selected' : '' }}>Multiple Time
                                    </option>
                                </select>
                                @error('examStatus')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Random Question <span class="text-danger">*</span></label>
                                <select name="randomQuestion" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    <option value="1"
                                        {{ old('randomQuestion', @$papers->randomQuestion) == 1 ? 'selected' : '' }}>Yes
                                    </option>
                                    <option value="2"
                                        {{ old('randomQuestion', @$papers->randomQuestion) == 2 ? 'selected' : '' }}>No
                                    </option>
                                </select>
                                @error('randomQuestion')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Exam Type <span class="text-danger">*</span></label>
                                <select name="examType" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    <option value="1"
                                        {{ old('examType', @$papers->examType) == 1 ? 'selected' : '' }}>
                                        Only Duration
                                    </option>
                                    <option value="2"
                                        {{ old('examType', @$papers->examType) == 2 ? 'selected' : '' }}>
                                        Date and Duration
                                    </option>
                                    <option value="3"
                                        {{ old('examType', @$papers->examType) == 3 ? 'selected' : '' }}>
                                        Date , Time and
                                        Duration
                                    </option>
                                </select>
                                @error('examType')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Duration <span class="text-danger">*</span></label>
                                <input type="text" name="duration" value="{{ old('duration', @$papers->duration) }}"
                                    class="form-control" placeholder="Minute" required="">
                                @error('duration')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Mark Type <span class="text-danger">*</span></label>
                                <select name="markType" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    <option value="1"
                                        {{ old('markType', @$papers->markType) == 1 ? 'selected' : '' }}>
                                        Percentage</option>
                                    <option value="2"
                                        {{ old('markType', @$papers->markType) == 2 ? 'selected' : '' }}>
                                        Fixed</option>
                                </select>
                                @error('markType')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Pass Value <span class="text-danger">*</span></label>
                                <input type="text" name="percentage"
                                    value="{{ old('percentage', @$papers->percentage) }}" class="form-control"
                                    placeholder="Percentage" required="">
                                @error('percentage')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Show Result After Exam <span
                                        class="text-danger">*</span></label>
                                <select name="showResultAfterExam" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    <option value="1"
                                        {{ old('showResultAfterExam', @$papers->showResultAfterExam) == 1 ? 'selected' : '' }}>
                                        Yes
                                    </option>
                                    <option value="2"
                                        {{ old('showResultAfterExam', @$papers->showResultAfterExam) == 2 ? 'selected' : '' }}>
                                        No
                                    </option>
                                </select>
                                @error('showResultAfterExam')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Show Answer After Exam <span
                                        class="text-danger">*</span></label>
                                <select name="showMarkAfterExam" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    <option value="1"
                                        {{ old('showMarkAfterExam', @$papers->showMarkAfterExam) == 1 ? 'selected' : '' }}>
                                        Yes
                                    </option>
                                    <option value="2"
                                        {{ old('showMarkAfterExam', @$papers->showMarkAfterExam) == 2 ? 'selected' : '' }}>
                                        No
                                    </option>
                                </select>
                                @error('showMarkAfterExam')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-4">
                                <label class="form-label">Payment Status <span class="text-danger">*</span></label>
                                <select name="ispaid" id="ispaid" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required>
                                    <option value="">Please Select</option>
                                    <option value="1" {{ old('ispaid', @$papers->ispaid) == 1 ? 'selected' : '' }}>
                                        Free</option>
                                    <option value="2" {{ old('ispaid', @$papers->ispaid) == 2 ? 'selected' : '' }}>
                                        Paid</option>
                                </select>
                                @error('ispaid')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4" id='costDiv'>
                                <label class="form-label">Cost <span class="text-danger">*</span></label>
                                <input type="number" id="cost" name="cost" class="form-control"
                                    value="{{ old('cost', @$papers->cost) }}">
                                @error('cost')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-4">
                                <label class="form-label">Published <span class="text-danger">*</span></label>
                                <select name="published" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    <option value="1"
                                        {{ old('published', @$papers->published) == 1 ? 'selected' : '' }}>Yes</option>
                                    <option value="2"
                                        {{ old('published', @$papers->published) == 2 ? 'selected' : '' }}>No</option>
                                </select>
                                @error('published')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Total number of questions par section <span
                                        class="text-danger">*</span></label>
                                <input type="number" name="totalNoQuestion" class="form-control" placeholder="number"
                                    required="" value="{{ old('totalNoQuestion', @$papers->totalNoQuestion) }}">
                                @error('totalNoQuestion')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Question Marks</h5>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Total no of set <span class="text-danger">*</span></label>
                                <input type="number" name="totalNoSet" class="form-control" placeholder="number"
                                    required="" value="{{ old('totalNoSet', @$papers->totalNoSet) }}">
                                @error('totalNoSet')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Correct marks on par question <span
                                        class="text-danger">*</span></label>
                                <input type="number" name="questionCurrectMark" class="form-control"
                                    placeholder="number" required=""
                                    value="{{ old('questionCurrectMark', @$papers->questionCurrectMark) }}">
                                @error('questionCurrectMark')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Wrong marks on par question <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="questionWrongMark" class="form-control" placeholder="number"
                                    required="" value="{{ old('questionWrongMark', @$papers->questionWrongMark) }}">
                                @error('questionWrongMark')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Save button -->
                            <div class="d-sm-flex justify-content-end">
                                <button type="submit"
                                    class="btn btn-primary mb-0">{{ isset($papers) ? 'Update' : 'Create' }}
                                    Papper</button>
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
