@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Question Pappers')
@section('contant')
    <div class="page-content-wrapper border">
        <div class="row g-4">
            <!-- Left side START -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="row mb-3">
                            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Edit Question Papper </h5>
                                <a href="{{ route('admin.quiz.paper.fiilter') }}?categoryId={{ $paper->category_id }}"
                                    class="btn btn-sm btn-primary mb-0"><i class="bi bi-eye"></i> All Paper</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin.quiz.question.bank.store') }}" class="row g-4" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="category_id" value="{{ $paper->category_id }}">
                            <input type="hidden" name="papper_id" value="{{ $paper->id }}">
                            <input type="hidden" name="question_id" value="{{ $question->id }}">

                            <div class="col-lg-3">
                                <label class="form-label">Difficulty Level <span class="text-danger">*</span></label>
                                <select name="level_id" id="level_id" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="">Please Select</option>
                                    @foreach ($levels as $row)
                                        <option value="{{ $row->id }}"
                                            {{ old('level_id', $question->level_id) == $row->id ? 'selected' : '' }}>
                                            {{ $row->title }}</option>
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
                                    <option value="0" {{ old('type', $question->type) == '0' ? 'selected' : '' }}>Please
                                        Select</option>
                                    <option value="1" {{ old('type', $question->type) == '1' ? 'selected' : '' }}>Single
                                        Answer</option>
                                    <option value="2" {{ old('type', $question->type) == '2' ? 'selected' : '' }}>Multi
                                        Answer</option>
                                    <option value="3" {{ old('type', $question->type) == '3' ? 'selected' : '' }}>Fill In
                                        The Blanks</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label">Question <span class="text-danger">*</span></label>
                                <textarea name="question" id="question" class="form-control">{{ old('question',$question->question) }}</textarea>
                                @error('question')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label">Explanation </label>
                                <textarea name="explanation" id="explanation" class="form-control">{{ old('explanation',$question->explanation) }}</textarea>
                                @error('explanation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <div class="col-lg-4">
                                <label class="form-label">Upload </label>
                                <input type="file" name="photo" id="photo" class="form-control" accept="image/png, image/jpeg, image/gif">
                                @error('photo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Hints</label>
                                <input type="text" name="hints" id="hints" value="{{ old('hints',$question->hints) }}"
                                    class="form-control">
                                @error('hints')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="col-lg-4">
                                <label class="form-label">Mark <span class="text-danger">*</span></label>
                                <input type="text" name="mark" id="mark" class="form-control" required="">
                                @error('mark')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}


                            <div class="col-lg-4" id='totalOptionDiv'>
                                <label class="form-label">Total Option <span class="text-danger">*</span></label>
                                <select name="totalOption" id="totalOption" class="form-select z-index-9 border-0 bg-light"
                                    aria-label=".form-select-sm" required="">
                                    <option value="0" {{ old('totalOption', $question->totalOption) == '0' ? 'selected' : '' }}>Please Select</option>
                                    <option value="1" {{ old('totalOption', $question->totalOption) == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ old('totalOption', $question->totalOption) == '2' ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ old('totalOption', $question->totalOption) == '3' ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ old('totalOption', $question->totalOption) == '4' ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ old('totalOption', $question->totalOption) == '5' ? 'selected' : '' }}>5</option>
                                    <option value="6" {{ old('totalOption', $question->totalOption) == '6' ? 'selected' : '' }}>6</option>
                                    <option value="7" {{ old('totalOption', $question->totalOption) == '7' ? 'selected' : '' }}>7</option>
                                    <option value="8" {{ old('totalOption', $question->totalOption) == '8' ? 'selected' : '' }}>8</option>
                                    <option value="9" {{ old('totalOption', $question->totalOption) == '9' ? 'selected' : '' }}>9</option>
                                    <option value="10" {{ old('totalOption', $question->totalOption) == '10' ? 'selected' : '' }}>10</option>
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

            /* .form-check-input {
                        background-color: white !important;
                    } */
        </style>
    @endpush

    @push('custom_js')
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#question'))
                .catch(error => {
                    console.error(error);
                });

            // $(function() {
            //     $('#totalOptionDiv').hide();
            // });



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



    @push('custom_js')
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
        <script>
            $('#CheckboxText').change(function() {
                if ($(this).is(':checked')) {
                    $('#questionTextBox').show();
                } else {
                    $('#questionTextBox').hide();
                }
            });

            $('#CheckboxImage').change(function() {
                if ($(this).is(':checked')) {
                    $('#questionImageBox').show();
                } else {
                    $('#questionImageBox').hide();
                }
            });


            function explanation_status(el) {
                var status = el.checked ? true : false;
                if (status) {
                    $('#questionExplanation').show();
                } else {
                    $('#questionExplanation').hide();
                }
            }

            function hints_status(el) {
                var status = el.checked ? true : false;
                if (status) {
                    $('#questionHints').show();
                } else {
                    $('#questionHints').hide();
                }
            }




            ClassicEditor
                .create(document.querySelector('#question'))
                .catch(error => {
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
                    var count = $('.coption').size();
                    alert(count);
                    
                    var dbOption = "{{ inicompute($dbTotalOptionID) }}";
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
                        if ($('#in').size())
                            $('#in').append(formHtmlData(i, type, opt[i], ans[i]));
                        else
                            $('#in').append(formHtmlData(i, type));
                    }
                } else {
                    $('#in').children().remove();
                }

                <?php
                $dbcount = inicompute($dbTotalOptionID);
                
                echo 'if(parseInt(valTotalOption) >= ' . $dbcount . ' && count <' . $dbcount . ') {';
                for ($k = 1; $k <= $dbcount; $k++) {
                    echo '$("#option' . $k . '").val("' . (isset($dbTotalOptionID[$k]) ? $dbTotalOptionID[$k] : '') . '");';
                    if (inicompute($answers) && in_array($k, $answers)) {
                        echo '$("#ans' . $k . '").attr("checked", "checked");';
                    }
                }
                echo '}';
                
                ?>
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

        <?php
        // Check if $options or $answers is a collection, and convert it to an array if necessary
        $options = ($options instanceof Illuminate\Support\Collection) ? $options->toArray() : $options;
        $answers = ($answers instanceof Illuminate\Support\Collection) ? $answers->toArray() : $answers;

        if (inicompute($options) || inicompute($answers)) {
            if ($question_bank->type == 3) {
                $options = $answers;
            } else {
                $options = $options;
            }

            $i = 0;
            foreach ($options as $optionKey => $optionValue) {
                // Ensure we only show the correct number of options
                if (!isset($postData) && ($i + 1 > $question_bank->totalOption)) {
                    break;
                }
                
                if (@$f == 1) {
                    $optionKey++;
                }
                ?>
        <script type="text/javascript">
            var optID = '<?= $i + 1 ?>';
            var optTypeID = '<?= $question_bank->type ?>';
            var optVal = '<?= htmlspecialchars($optionValue) ?>';
            var optAns = '<?= inicompute($answers) && in_array($optionKey, $answers) ? 'checked="checked"' : '' ?>';

            $('#in').append(formHtmlData(optID, optTypeID, optVal, optAns));
        </script>
        <?php 
                $i++;
            }
        }
        ?>


    @endpush
    
@endsection
