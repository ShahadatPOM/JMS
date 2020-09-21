@extends('layouts.back.back')
@section('back.content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Article Submision Form</h4>
                        <small><span style="color: red">*</span>Indicates Required Field</small>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="col-12">
                            <form action="{{ route('menuscript.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Title of Manuscript</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter title">
                                        @error('title')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Your/Author Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter name">
                                                @error('name')
                                                <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Author Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter name">
                                                @error('email')
                                                <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Summery</label>
                                        <textarea name="summery" id="summery" class="form-control"
                                            placeholder="Write your abstract here"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Menuscript Category</label>
                                        <select class="form-control" name="category_id">
                                            <option selected disabled>Select Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>                                                
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Country</label>
                                        <select class="form-control" name="country_id">
                                            <option selected disabled>Select Country</option>
                                            <option value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Manuscript</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="paper_file">
                                       
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        @error('paper_file')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                        <a href="#" class="btn btn-md btn-info">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
