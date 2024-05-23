


    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $student->name }}">
        </div>
        <div>
            <label>Last Name:</label>
            <input type="text" name="last_name" value="{{ $student->last_name }}">
        </div>
        <div>
            <label>Expedient:</label>
            <input type="text" name="expedient" value="{{ $student->expedient }}">
        </div>
        <div>
            <label>Module:</label>
            <select name="module_id">
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}" @if($module->id == $student->module_id) selected @endif>{{ $module->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update</button>
    </form>

