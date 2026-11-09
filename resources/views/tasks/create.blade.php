@extends('layouts.app')

@section('title', 'Tambah Tugas')

@section('content')
    <style>
        .create-task-page {
            max-width: 760px;
            margin: 0 auto;
            padding: 12px 0 40px;
            color: #26352d;
        }

        .create-task-breadcrumb {
            margin-bottom: 22px;
            color: #78847c;
            font-size: 14px;
        }

        .create-task-breadcrumb a {
            color: #347354;
            text-decoration: none;
        }

        .create-task-breadcrumb a:hover {
            text-decoration: underline;
        }

        .create-task-heading {
            margin-bottom: 24px;
        }

        .create-task-heading h1 {
            margin: 0 0 8px;
            color: #23372c;
            font-size: clamp(25px, 4vw, 32px);
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .create-task-heading p {
            margin: 0;
            color: #718078;
            font-size: 15px;
            line-height: 1.6;
        }

        .create-task-card {
            padding: 26px;
            border: 1px solid #e4eae5;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 5px 18px rgba(34, 58, 43, 0.04);
        }

        .create-task-note {
            margin-top: 18px;
            padding: 12px 14px;
            border-radius: 9px;
            background: #f2f7f3;
            color: #597061;
            font-size: 13px;
            line-height: 1.5;
        }

        @media (max-width: 600px) {
            .create-task-page {
                padding-top: 4px;
            }

            .create-task-card {
                padding: 18px;
            }
        }
    </style>

    <div class="create-task-page">
        <nav class="create-task-breadcrumb" aria-label="Navigasi">
            <a href="{{ route('tasks.index') }}">Daftar Tugas</a>
            <span aria-hidden="true"> / </span>
            <span>Tambah Tugas</span>
        </nav>

        <header class="create-task-heading">
            <h1>Buat Tugas Baru</h1>
            <p>
                Catat pekerjaan yang perlu diselesaikan. Kamu bisa menambahkan tenggat,
                prioritas, dan status tugas.
            </p>
        </header>

        <section class="create-task-card" aria-label="Form tambah tugas">
            @include('tasks.form')
        </section>

        <p class="create-task-note">
            Tips: tulis nama tugas dengan jelas supaya mudah ditemukan lagi di daftar tugas.
        </p>
    </div>
@endsection
