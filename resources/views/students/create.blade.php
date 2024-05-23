<h1>Create Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div>
        <label>Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Last Name:</label>
        <input type="text" name="last_name">
    </div>
    <div>
        <label>Expedient:</label>
        <input type="text" name="expedient">
    </div>
    <div>
        <label>Module:</label>
        <select name="module_id">
            @foreach ($modules as $module)
                <option value="{{ $module->id }}">{{ $module->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Save</button>
</form>
