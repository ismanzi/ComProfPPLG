@extends('pages.admin.index')

@section('title', 'Subject')

@section('btn-title', 'Create')

@section('btn-icon')
    <i class="fa-solid fa-plus"></i>
@endsection

@section('link-btn-title')
    <a href="{{ route('pages.admin.subject.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        @yield('btn-icon') @yield('btn-title')
    </a>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-regular text-primary">Data Subject</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="subjectTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Mata Pelajaran</th>
                            <th>Kelas</th>
                            <th>Total Jam per Minggu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->class }}</td>
                                <td>{{ $subject->hour }}</td>
                                <td>
                                    <a href="{{ route('pages.admin.subject.view', $subject->id) }}"
                                        class="btn btn-info">View</a>
                                    <a href="{{ route('pages.admin.subject.edit', $subject->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form action="{{ route('subject.destroy', $subject->id) }}" method="POST"
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
            $('#subjectTable').DataTable({
                "pageLength": 10, // Menampilkan 10 entri per halaman
                "searching": true, // Fitur pencarian
            });
        });
    </script>
@endsection
@endsection
