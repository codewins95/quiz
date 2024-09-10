@extends('layouts.master')
@section('meta_title', isset($title) ? $title : 'Instruction ' . (isset($instructions) ? 'Update' : 'Create'))
@section('contant')
    <div class="page-content-wrapper border">
        <div class="row g-4">
            <!-- Left side START -->
            <div class="col-xl-12">

                <div class="card shadow">

                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h5 class="card-header-title">Instruction {{ isset($instructions) ? 'Update' : 'Create' }}</h5>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <form
                            action="{{ isset($instructions) ? route('admin.quiz.instruction.update', $instructions->id) : route('admin.quiz.instruction.store') }}"
                            class="was-validated row g-4" method="post">
                            @csrf
                            @isset($instructions)
                                @method('PUT')
                            @endisset
                            <div class="col-lg-12">
                                <label class="form-label">Title <span class="text-danger">*</span> </label>
                                <input type="text" name="title" class="form-control" placeholder="title" required=""
                                    value="{{ old('title', @$instructions->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">

                                <label class="form-label">Content</label>
                                <textarea name="content" id="editor" class="form-control" placeholder="For write brief content of your Instruction.">{{ old('content', @$instructions->content) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Save button -->
                            <div class="d-sm-flex justify-content-end">
                                <button type="submit"
                                    class="btn btn-primary mb-0">{{ isset($instructions) ? 'Update' : 'Create' }}
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
        <style>
            .ck-editor__editable[role="textbox"] {
                min-height: 200px;
            }
        </style>
    @endpush
    @push('custom_js')
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush

@endsection
