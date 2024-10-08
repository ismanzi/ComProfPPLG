@extends('pages.admin.index')

@section('title', 'Dashboard')

@section('btn-title', 'Print Report')

@section('btn-icon')
    <i class="fa-solid fa-download"></i>
@endsection

@section('link-btn-title')
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        @yield('btn-icon') @yield('btn-title')
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Achievement</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalAchievement }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-trophy fa-2x text-300" style="color: #386cc7"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total News</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalNews }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-300" style="color: #386cc7"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Subject</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalSubject }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-300" style="color: #386cc7"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Alumni</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalAlumni }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-300" style="color: #386cc7"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Staff</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalStaff }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-card fa-2x text-300" style="color: #386cc7"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Project</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalProject }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-diagram-project fa-2x text-300" style="color: #386cc7"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Comment</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalComment }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comment fa-2x text-300" style="color: #386cc7"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
