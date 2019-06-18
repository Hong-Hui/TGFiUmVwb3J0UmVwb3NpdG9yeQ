<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') ?? $course->name }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label for="major">Major</label>
    <input type="text" name="major" value="{{ old('major') ?? $course->major }}" class="form-control">
    <div>{{ $errors->first('major') }}</div>
</div>

<div class="form-group">
    <label for="year">Year</label>
    <input type="text" name="year" value="{{ old('year') ?? $course->year }}" class="form-control">
    <div>{{ $errors->first('year') }}</div>
</div>

<div class="form-group">
    <label for="semester">Semester</label>
    <input type="text" name="semester" value="{{ old('semester') ?? $course->semester }}" class="form-control">
    <div>{{ $errors->first('semester') }}</div>
</div>

<div class="form-group">
    <label for="section">Section</label>
    <input type="text" name="section" value="{{ old('section') ?? $course->section }}" class="form-control">
    <div>{{ $errors->first('section') }}</div>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="" disabled>Class Status</option>
        <option value="ongoing">Ongoing</option>
        <option value="completed">Completed</option>
        <option value="archived">Archived</option>
    </select>
    <div>{{ $errors->first('status') }}</div>
</div>

@csrf
