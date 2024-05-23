<h1> Estudiantes Registrados </h1>
<h3> index.listar </h3>
<a href="{{ route('students.create') }}">Create Student</a><br>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif <br>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Expedient</th>
            <th>Module</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->expedient }}</td>
                <td>{{ $student->module->name }}</td>
                <td>
                    <a href="{{ route('students.show', $student) }}">Details</a>
                    <a href="{{ route('students.edit', $student) }}">Edit</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
