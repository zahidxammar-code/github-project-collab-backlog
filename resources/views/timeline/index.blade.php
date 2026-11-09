@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Timeline & Filter Tugas</h1>

    <!-- Form Filter & Pencarian -->
    <div class="card mb-4 p-3">
        <form action="#" method="GET" class="row g-3">
            <div class="col-md-3">
                <input type="text" name="search" class="form-control" placeholder="Cari judul tugas...">
            </div>
            <div class="col-md-2">
                <select name="status" class="form-select">
                    <option value="">Semua Status</option>
                    <option value="todo">To Do</option>
                    <option value="in_progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="col-md-2">
                <select name="priority" class="form-select">
                    <option value="">Semua Prioritas</option>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="date" name="deadline" class="form-control">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-secondary w-100">Filter & Cari</button>
            </div>
        </form>
    </div>

    <!-- Tampilan Timeline Sederhana -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-calendar-alt me-1"></i> Urutan Tugas Berdasarkan Tanggal
        </div>
        <div class="card-body">
            <ul class="timeline-list list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>10 November 2026</strong> - Menyelesaikan Migration Database
                        <span class="badge bg-danger ms-2">High</span>
                        <span class="badge bg-warning text-dark">In Progress</span>
                    </div>
                    <span class="text-muted">Kategori: Kerja</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>12 November 2026</strong> - Desain UI Halaman Utama
                        <span class="badge bg-secondary ms-2">Medium</span>
                        <span class="badge bg-primary">To Do</span>
                    </div>
                    <span class="text-muted">Kategori: Pribadi</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection