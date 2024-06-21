@extends('layouts.admin')
@section('title')
   Edit
@endsection
@section('content')
    <div class="main-content">
        <div class="section">

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.skill.update', $skill->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      <div class="card-header">
                        <h4> Edit update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label> Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $skill->title }}">
                        </div>

                        <div class="form-group">
                          <label>Icon</label>
                          <input type="text" class="form-control"  name="icons" value="{{ $skill->icons }}">
                        </div>

                        <div class="form-group">
                            <label>Degree</label>
                            <input type="number" class="form-control"  name="degree" value="{{ $skill->degree }}">
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
