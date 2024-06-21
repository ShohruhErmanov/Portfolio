@extends('layouts.admin')
@section('title')
   Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf
                      <div class="card-header">
                        <h4> Category create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label> Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                          <label>Slug</label>
                          <input type="text" class="form-control"  name="slug">
                        </div>
                       
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>

        </div>
    </div>
@endsection
