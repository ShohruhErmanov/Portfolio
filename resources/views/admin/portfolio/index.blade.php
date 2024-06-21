@extends('layouts.admin')

@section('title')
    Portfolio Table
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
                        <h4>Portfolio Table</h4>
                        <div class="card-header-form">
                            <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Categories</th>
                                         <th>Time</th>
                                        <th>Buttons</th>
                                    </tr>
                                    @foreach ($portfolios as $portfolio)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $portfolio->title }}</td>
                                            <td>
                                                <img src="/images/portfolio/{{ $portfolio->image }}" alt="" width="100">
                                            </td>
                                            <td>{{ $portfolio->description }}</td>
                                            <td class="align-middle">
                                                {{ $portfolio->category->name }}
                                             </td>
                                            <td>{{ $portfolio->created_at }}</td>
                                            <td class="d-flex " style="column-gap: 10px;">
                                                <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-info">Update</a>
                                                 <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger " onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
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
                           {{ $portfolios->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
