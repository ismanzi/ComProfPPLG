@extends('pages.admin.index')

@section('title', 'Achievement')

@section('btn-title', 'Create')

@section('btn-icon')
<i class="fa-solid fa-plus"></i>
@endsection
@section('link-btn-title')
<a href="{{ route('pages.admin.achievementcreate') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    @yield('btn-icon') @yield('btn-title')
</a>
@endsection

@section('content')
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-regular text-primary">Data Achievement</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="achievementTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Bidang</th>
                        <th>Penyelenggara</th>
                        <th>Tanggal</th>
                        <th>Peserta</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lomba Karawang</td>
                        <td>Juara 2</td>
                        <td>Pencak Silat</td>
                        <td>UBP</td>
                        <td>2024-09-01</td>
                        <td>Fulan</td>
                        <td>Lomba pencak silat tingkat daerah</td>
                        <td><img src="path_to_image" alt="Foto Pencapaian" width="50"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tambahkan Script DataTables -->
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
