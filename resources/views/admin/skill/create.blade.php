@extends('layouts.admin')
@section('title')
   Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.skill.store') }}" method="POST">
                        @csrf
                      <div class="card-header">
                        <h4> Category create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                          <label>Icon</label>
                          <input type="text" class="form-control"  name="icons">
                        </div>

                        <div class="form-group">
                            <label>Degree</label>
                            <input type="number" class="form-control"  name="degree">
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
