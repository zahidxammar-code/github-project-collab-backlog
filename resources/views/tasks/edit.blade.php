@extends('layouts.app')

@section('title', 'Edit Tugas')

@section('content')
    <div class="page-heading">
        <div>
            <h1>Edit Tugas</h1>
            <div class="muted">Perbarui informasi tugas di bawah ini.</div>
        </div>
    </div>

    @include('tasks.form')
@endsection
