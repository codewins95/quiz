@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Add Question')
@section('contant')
    <div class="page-content-wrapper border">
        <div class="row g-4">
            <!-- Left side START -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="row mb-3">
                            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Add Question </h5>
                                <a href="{{ route('admin.quiz.paper.fiilter') }}?categoryId={{ $papers->category_id }}"
                                    class="btn btn-sm btn-primary mb-0"><i class="bi bi-eye"></i> All Paper</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin.quiz.question.bank.store') }}" class="row g-4" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="category_id" value="{{ $papers->category_id }}">
                            <input type="hidden" name="papper_id" value="{{ $papers->id }}">

                            <div class="col-lg-3">
                                <label class="form-label">Difficulty Level <span class="text-danger">*</span></label>
                                <select name="level_id" id="level_id" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    @foreach ($levels as $row)
                                        <option value="{{ $row->id }}">{{ $row->title }}</option>
                                    @endforeach
                                </select>
                                @error('level_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">Question Type <span class="text-danger">*</span></label>
                                <select name="type" id="type" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="0">Please Select</option>
                                    <option value="1">Single Answer</option>
                                    <option value="2">Multi Answer</option>
                                    <option value="3">Fill In The Blanks</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label">Question type <span class="text-danger">*</span></label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="CheckboxText" checked>
                                    <label class="form-check-label" for="CheckboxText">Text</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="CheckboxImage">
                                    <label class="form-check-label" for="CheckboxImage">Image</label>
                                </div>

                            </div>
                            <div class="question-box">
                                <div class="col-lg-12" id="questionTextBox">
                                    <label class="form-label">Question</label>
                                    <textarea name="question" id="question" class="form-control">{{ old('question') }}</textarea>
                                    @error('question')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-4 mt-3" id="questionImageBox" style="display: none">
                                    <label class="form-label">Question Upload </label>
                                    <input type="file" name="photo" id="photo" class="form-control"
                                        accept="image/png, image/jpeg, image/gif">
                                    @error('photo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="is-explanation">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label class="form-label">Explanation </label>
                                        <div class="form-check form-switch form-check-md ms-5">
                                            <input class="form-check-input" type="checkbox"
                                                onclick="explanation_status(this)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12" id="questionExplanation" style="display: none">
                                    {{-- <label class="form-label">Explanation </label> --}}
                                    <textarea name="explanation" id="explanation" class="form-control" placeholder="Question Explanation...">{{ old('explanation') }}</textarea>
                                    @error('explanation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="is-hints">
                                <div class="col-lg-12 ">
                                    <div class="d-flex">
                                        <label class="form-label">Hints </label>
                                        <div class="form-check form-switch form-check-md ms-5">
                                            <input class="form-check-input" type="checkbox" onclick="hints_status(this)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4" id="questionHints" style="display: none">
                                    <input type="text" name="hints" id="hints" value="{{ old('hints') }}"
                                        class="form-control" placeholder="Hints..">
                                    @error('hints')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-lg-4" id='totalOptionDiv' style="display: none">
                                <label class="form-label">Total Option <span class="text-danger">*</span></label>
                                <select name="totalOption" id="totalOption"
                                    class="form-select z-index-9 border-0 bg-light" aria-label=".form-select-sm"
                                    required="">
                                    <option value="0">Please Select</option>
                                    @foreach (range(1, 5) as $i)
                                        <option value="{{ $i }}"> {{ $i }}</option>
                                    @endforeach
                                </select>
                                @error('totalOption')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div id="in"></div>

                            <!-- Save button -->
                            <div class="d-sm-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mb-0">Add Question bank</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('custom_css')
        <style>
            .ck-editor__editable[role="textbox"] {
                min-height: 100px;
            }
        </style>
    @endpush

    @push('custom_js')
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
        <script>
           // Toggle visibility of text box based on checkbox state
           $('#CheckboxText').change(function() {
                $('#questionTextBox').toggle(this.checked);
            });

            // Toggle visibility of image box based on checkbox state
            $('#CheckboxImage').change(function() {
                $('#questionImageBox').toggle(this.checked);
            });

            // Toggle explanation visibility
            function explanation_status(el) {
                $('#questionExplanation').toggle(el.checked);
            }

            // Toggle hints visibility
            function hints_status(el) {
                $('#questionHints').toggle(el.checked);
            }

            // Initialize CKEditor
            ClassicEditor.create(document.querySelector('#question')).catch(error => {
                console.error(error);
            });




            $('#type').change(function() {
                $('#in').children().remove();
                var type = $(this).val();
                if (type == 0) {
                    $('#totalOptionDiv').hide();
                } else {
                    $('#totalOption').val(0);
                    $('#totalOptionDiv').show();
                }

            });

            $('#totalOption').change(function() {
                var valTotalOption = $(this).val();
                var type = $('#type').val();

                if (parseInt(valTotalOption) != 0) {
                    var opt = [];
                    var ans = [];
                    var count = $('.coption').length;

                    for (j = 1; j <= count; j++) {
                        if (type == 3) {
                            opt[j] = $('#answer' + j).val();
                        } else {
                            opt[j] = $('#option' + j).val();
                            if ($('#ans' + j).prop('checked')) {
                                ans[j] = 'checked="checked"';
                            }
                        }
                    }

                    $('#in').children().remove();
                    for (i = 1; i <= valTotalOption; i++) {
                        if ($('#in').length)
                            $('#in').append(formHtmlData(i, type, opt[i], ans[i]));
                        else
                            $('#in').append(formHtmlData(i, type));
                    }
                } else {
                    $('#in').children().remove();
                }

            });

            function formHtmlData(id, type, value = '', checked = '') {
                var required = 'required';
                if (type == 1) {
                    type = 'radio';
                } else if (type == 2) {
                    type = 'checkbox';
                    required = '';
                } else if (type == 3) {
                    var html = '<div class="input-group  coption mt-2"><label for="answer' + id +
                        '" class="col-sm-2 control-label">Question bank answer ' + id +
                        '</label><div class="col-sm-4"><input type="text" class="form-control" id="answer' + id +
                        '" name="answer[]" value="' + value + '" placeholder="Question bank answer ' + id +
                        '" ></div><div class="col-sm-1"></div><span class="col-sm-4 control-label text-red" id="anserror' + id +
                        '">@error('answer1') {{ $message }} @endif</span></div>';
                    return html;
                }
                var html = '<div class="coption row mt-2"><div class="col-sm-2"><label class="control-label mt-2" for="option' +
                    id +
                    '" class="col-lg-2 col-sm-2 control-label">Question bank option ' + id +
                    '</label></div><div class="col-lg-4 col-sm-4 "><div class="input-group" ><input type="text" class="form-control" id="option' +
                    id + '" name="option[]" value="' + value + '" placeholder="Question bank option ' + id +
                    '" ><div class="input-group-text"><input class="form-check-input answer" id="ans' + id + '" ' + checked +
                    ' type="' + type +
                    '" name="answer[]" value="' + id + '" data-toggle="tooltip" data-placement="top" title="Correct Answer" ' +
                    required +
                    ' /></div></div></div><div class="col-lg-3 col-sm-3" ><input class="form-control" type="file" name="image' +
                    id + '" id="image' + id + '"></div><span class="col-lg-3 col-sm-3 control-label text-red" id="anserror' +
                    id +
                    '"> @error('answer1') {{ $message }} @endif</span></div>';
                return html;
            }
        </script>
    @endpush

@endsection
