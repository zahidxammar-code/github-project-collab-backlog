<div class="form-card card">
    <form action="{{ $task->exists ? route('tasks.update', $task) : route('tasks.store') }}"
          method="POST">
        @csrf

        @if ($task->exists)
            @method('PUT')
        @endif

        <label for="title">Nama tugas</label>
        <input
            id="title"
            name="title"
            type="text"
            value="{{ old('title', $task->title) }}"
            placeholder="Contoh: Menyiapkan materi Bahasa Inggris"
            required
        >
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="description">Deskripsi</label>
        <textarea
            id="description"
            name="description"
            placeholder="Tambahkan catatan tugas jika diperlukan"
        >{{ old('description', $task->description) }}</textarea>
        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="deadline">Deadline</label>
        <input
            id="deadline"
            name="deadline"
            type="date"
            value="{{ old('deadline', $task->deadline?->format('Y-m-d')) }}"
        >
        @error('deadline')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="priority">Prioritas</label>
        <select id="priority" name="priority" required>
            @foreach (['High', 'Medium', 'Low'] as $priority)
                <option
                    value="{{ $priority }}"
                    {{ old('priority', $task->priority ?? 'Medium') === $priority ? 'selected' : '' }}
                >
                    {{ $priority }}
                </option>
            @endforeach
        </select>
        @error('priority')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="status">Status</label>
        <select id="status" name="status" required>
            @foreach (['To Do', 'In Progress', 'Completed'] as $status)
                <option
                    value="{{ $status }}"
                    {{ old('status', $task->status ?? 'To Do') === $status ? 'selected' : '' }}
                >
                    {{ $status }}
                </option>
            @endforeach
        </select>
        @error('status')
            <div class="error">{{ $message }}</div>
        @enderror

        <div style="display:flex; gap:10px; margin-top:22px;">
            <button type="submit">Simpan Tugas</button>
            <a class="button button-secondary" href="{{ route('tasks.index') }}">Batal</a>
        </div>
    </form>
</div>
