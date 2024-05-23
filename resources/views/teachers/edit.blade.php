


    <h1>Edit Teacher</h1>
    <form action="{{ route('teachers.update', $teacher) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $teacher->name }}">
        <label>Document:</label>
        <input type="text" name="document" value="{{ $teacher->document }}">
        <label>Address:</label>
        <input type="text" name="address" value="{{ $teacher->address }}">
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $teacher->phone }}">
        <label>Module:</label>
        <select name="module_id">
            @foreach ($modules as $module)
                <option value="{{ $module->id }}" {{ $teacher->module_id == $module->id ? 'selected' : '' }}>
                    {{ $module->name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
