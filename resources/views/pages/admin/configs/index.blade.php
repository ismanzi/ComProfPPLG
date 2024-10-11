@extends('pages.admin.index')

@section('title', 'Configuration')

@section('btn-title', 'Create')

@section('btn-icon')
    <i class="fa-solid fa-plus"></i>
@endsection

@section('link-btn-title')
    @if($configs->isEmpty()) {{-- Jika tidak ada konfigurasi, tampilkan tombol Create --}}
        <a href="{{ route('configs.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            @yield('btn-icon') @yield('btn-title')
        </a>
    @else
    <button type="submit" class="btn btn-secondary" disabled>
        <i class="fa-solid fa-plus"></i> Create</button>
    @endif
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-regular text-primary">Data Configuration</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="konfigTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Total Murid Laki-Laki</th>
                            <th>Total Murid Perempuan</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($configs as $config)
                        <tr>
                            <td>{{ $config->theBoys }}</td>
                            <td>{{ $config->theGurls }}</td>
                            <td>{{ $config->vision }}</td>
                            <td>{{ $config->mission }}</td>
                            <td>
                                <a href="{{ route('configs.view', $config->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('configs.edit', $config->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('configs.destroy', $config->id) }}" method="POST" style="display:inline;">
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
            $('#konfigTable').DataTable({
                "pageLength": 10, // Menampilkan 10 entri per halaman
                "searching": true, // Fitur pencarian
            });
        });
    </script>
@endsection
@endsection
