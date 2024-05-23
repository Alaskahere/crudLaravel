<h1>Create Teacher</h1>
<form action="{{ route('teachers.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name">
    <label>Document:</label>
    <input type="text" name="document">
    <label>Address:</label>
    <input type="text" name="address">
    <label>Phone:</label>
    <input type="text" name="phone">
    <label>Module:</label>
    <select name="module_id">
        @foreach ($modules as $module)
            <option value="{{ $module->id }}">{{ $module->name }}</option>
        @endforeach
    </select>
    <button type="submit">Save</button>
</form>
