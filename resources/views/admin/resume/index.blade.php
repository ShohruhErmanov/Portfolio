@extends('layouts.admin')

@section('title')
    Resume Table
@endsection
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">

                    @if (session('seccess'))
                        <div class="alert alert-primary alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('seccess') }}
                            </div>
                        </div>
                    @endif

                    <div class="card-header">
                        <h4>Resume Table</h4>
                        <div class="card-header-form">
                            <a href="{{ route('admin.resume.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Resume</th>
                                        <th>Time</th>
                                        <th>Button</th>
                                    </tr>
                                    @foreach ($resumes as $resume)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $resume->resume }}</td>
                                            <td>{{ $resume->created_at }}</td>
                                            <td class="d-flex " style="column-gap: 10px;">
                                                <a href="{{ route('admin.resume.edit', $resume->id) }}"
                                                    class="btn btn-info">Update</a>
                                                <form action="{{ route('admin.resume.destroy', $resume->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger "
                                                        onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
