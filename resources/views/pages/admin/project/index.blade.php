@extends('pages.admin.index')

@section('title', 'Project')

@section('btn-title', 'Create')

@section('btn-icon')
    <i class="fa-solid fa-plus"></i>
@endsection

@section('link-btn-title')
    <a href="{{ route('project.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        @yield('btn-icon') @yield('btn-title')
    </a>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-regular text-primary">Data Project</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="projectTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Project</th>
                            <th>Tim</th>
                            <th>Subjek</th>
                            <th>Foto</th>
                            <th>Link</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project as $projects)
                            <tr>
                                <td>{{ $projects->name }}</td>
                                <td>{{ $projects->team }}</td>
                                <td>{{ $projects->subject_id }}</td>
                                <td>{{ $projects->image }}</td>
                                <td>{{ $projects->link }}</td>
                                <td>{{ \Carbon\Carbon::parse($projects->date)->format('d-m-Y') }}</td>
                                <td>{{ $projects->desc }}</td>
                                <td>
                                    <a href="{{ route('project.view', $projects->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('project.edit', $projects->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('project.destroy', $projects->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#achievementTable').DataTable({
                "pageLength": 10, // Menampilkan 10 entri per halaman
                "searching": true, // Fitur pencarian
            });
        });
    </script>
@endsection
@endsection
