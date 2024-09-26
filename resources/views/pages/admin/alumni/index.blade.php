@extends('pages.admin.index')

@section('title', 'Alumni')

@section('btn-title', 'Create')

@section('btn-icon')
<i class="fa-solid fa-plus"></i>
@endsection

@section('link-btn-title')
<a href="{{ route('pages.admin.alumnicreate') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    @yield('btn-icon') @yield('btn-title')
</a>
@endsection

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-regular text-primary">Data Alumni</h6>
    </div>
    <div class="card-body">
        <h6 class="m-0 font-weight-regular">No data found.</h6>
    </div>
</div>
@endsection
