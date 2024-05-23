<h1>Teachers</h1>
<a href="{{ route('teachers.create') }}">Create New Teacher</a>
@if (session('success'))
    <div>{{ session('success') }}</div>
@endif
<ul>
    @foreach ($teachers as $teacher)
        <li>
            {{ $teacher->name }} - Module: {{ $teacher->module ? $teacher->module->name : 'None' }}
            <a href="{{ route('teachers.show', $teacher) }}">View</a>
            <a href="{{ route('teachers.edit', $teacher) }}">Edit</a>
            <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
