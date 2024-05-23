<h1>Student Details _ show</h1>
<div>
    <strong>ID:</strong> {{ $student->id }}
</div>

<div>
    <strong>Name:</strong> {{ $student->name }}
</div>

<div>
    <strong>Last Name:</strong> {{ $student->last_name }}
</div>

<div>
    <strong>Expedient:</strong> {{ $student->expedient }}
</div>

<div>
    <strong>Module o Asignature:</strong> {{ $student->module->name }}
</div>

<div>
    <strong>Created At:</strong> {{ $student->created_at->format('d-m-Y H:i') }}
</div>

<div>
    <strong>Updated At:</strong> {{ $student->updated_at->format('d-m-Y H:i') }}
</div>

<a href="{{ route('students.index') }}">Back to list</a>
