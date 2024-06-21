@extends('layouts.admin')
@section('title')
   Create
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.experience.store') }}" method="POST">
                        @csrf
                      <div class="card-header">
                        <h4> Experience create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                          <label>Text</label>
                          <input type="text" class="form-control"  name="text">
                        </div>

                        <div class="form-group">
                            <label>Time</label>
                            <input type="text" class="form-control"  name="time">
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
