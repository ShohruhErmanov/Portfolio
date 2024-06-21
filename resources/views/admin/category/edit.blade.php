@extends('layouts.admin')
@section('title')
   Edit
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      <div class="card-header">
                        <h4> Category update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label> Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                        </div>

                        <div class="form-group">
                          <label>Slug</label>
                          <input type="text" class="form-control"  name="slug" value="{{ $category->slug }}">
                        </div>

                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>

        </div>
    </div>
@endsection
