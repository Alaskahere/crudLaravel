<h1>Teacher Details</h1>
<p><strong>Name:</strong> {{ $teacher->name }}</p>
<p><strong>Document:</strong> {{ $teacher->document }}</p>
<p><strong>Address:</strong> {{ $teacher->address }}</p>
<p><strong>Phone:</strong> {{ $teacher->phone }}</p>

@if ($teacher->module)
    <h2>Module</h2>
    <p><strong>Module Name:</strong> {{ $teacher->module->name }}</p>

    <h3>Students</h3>
    @if ($teacher->module->students->isEmpty())
        <p>No students enrolled in this module.</p>
    @else
        <ul>
            @foreach ($teacher->module->students as $student)
                <li>{{ $student->name }} {{ $student->last_name }} (Expedient: {{ $student->expedient }})</li>
            @endforeach
        </ul>
    @endif
@else
    <p>No module assigned.</p>
@endif

<a href="{{ route('teachers.index') }}">Back to Teachers</a>










{{-- <!DOCTYPE html>
<html>
<head>
    <title>Teachers and Modules</title>
</head>
<body>
    <h1>Teachers and their Modules</h1>
    @if ($teachers->isEmpty())
        <p>No teachers found.</p>
    @else
        @foreach ($teachers as $teacher)
            <div>
                <h2>{{ $teacher->name }}</h2>
                @if ($teacher->module)
                    <p>Module: {{ $teacher->module->name }}</p>
                    @if ($teacher->module->students->isNotEmpty())
                        <p>Students:</p>
                        <ul>
                            @foreach ($teacher->module->students as $student)
                                <li>{{ $student->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No students found for this module.</p>
                    @endif
                @else
                    <p>No module assigned to this teacher.</p>
                @endif
            </div>
        @endforeach
    @endif
</body>
</html> --}}
