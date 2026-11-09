@extends('layouts.app')

@section('title', 'Detail Tugas')

@section('content')
    <div class="page-heading">
        <div>
            <h1>Detail Tugas</h1>
            <div class="muted">Informasi lengkap tugas.</div>
        </div>

        <a class="button button-secondary" href="{{ route('tasks.index') }}">Kembali</a>
    </div>

    <section class="card">
        <h2>{{ $task->title }}</h2>

        <p>
            {{ $task->description ?: 'Tidak ada deskripsi.' }}
        </p>

        <p>
            <strong>Deadline:</strong>
            {{ $task->deadline ? $task->deadline->format('d M Y') : 'Belum ditentukan' }}
        </p>

        <div class="badges">
            <span class="badge priority-{{ strtolower($task->priority) }}">
                Prioritas: {{ $task->priority }}
            </span>

            <span class="badge status-{{ strtolower(str_replace(' ', '-', $task->status)) }}">
                {{ $task->status }}
            </span>
        </div>

        <div style="margin-top:22px;">
            <a class="button" href="{{ route('tasks.edit', $task) }}">Edit Tugas</a>
        </div>
    </section>
@endsection
