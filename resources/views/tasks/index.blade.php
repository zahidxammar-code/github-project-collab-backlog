@extends('layouts.app')

@section('title', 'Daftar Tugas')

@section('content')
    <div class="page-heading">
        <div>
            <h1>Daftar Tugas</h1>
            <div class="muted">Catat dan pantau pekerjaan yang perlu diselesaikan.</div>
        </div>

        <a class="button" href="{{ route('tasks.create') }}">+ Tambah Tugas</a>
    </div>

    @forelse ($tasks as $task)
        <article class="card">
            <div class="task-top">
                <div>
                    <a class="task-title" href="{{ route('tasks.show', $task) }}">
                        {{ $task->title }}
                    </a>

                    <div class="muted" style="margin-top:8px;">
                        Deadline:
                        {{ $task->deadline ? $task->deadline->format('d M Y') : 'Belum ditentukan' }}
                    </div>
                </div>

                <div class="task-actions">
                    <a class="button button-secondary" href="{{ route('tasks.edit', $task) }}">Edit</a>

                    <form
                        action="{{ route('tasks.destroy', $task) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus tugas ini?')"
                    >
                        @csrf
                        @method('DELETE')
                        <button class="button-danger" type="submit">Hapus</button>
                    </form>
                </div>
            </div>

            <div class="badges">
                <span class="badge priority-{{ strtolower($task->priority) }}">
                    Prioritas: {{ $task->priority }}
                </span>

                <span class="badge status-{{ strtolower(str_replace(' ', '-', $task->status)) }}">
                    {{ $task->status }}
                </span>
            </div>
        </article>
    @empty
        <div class="card empty">
            <h2>Belum ada tugas</h2>
            <p class="muted">Tambahkan tugas pertama agar pekerjaanmu mulai tercatat.</p>
            <a class="button" href="{{ route('tasks.create') }}">Tambah Tugas</a>
        </div>
    @endforelse
@endsection
