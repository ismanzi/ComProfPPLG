@extends('pages.admin.index')

@section('title', 'Dashboard')

@section('btn-title', 'Generate Report')
@section('btn-icon')
<i class="fa-solid fa-download"></i>
@endsection

@section('link-btn-title')
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    @yield('btn-icon') @yield('btn-title')
</a>
@endsection
