<div class="form-group row">
    <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

    <div class="col-md-8">
        <input id="name" type="test" class="form-control" name="name" value="{{ old('name') ?? $course->name }}">
        <div>{{ $errors->first('name') }}</div>
    </div>
</div>

<div class="form-group row">
    <label for="major" class="col-md-2 col-form-label text-md-right">Major</label>

    <div class="col-md-8">
        <input id="major" type="text" class="form-control" name="major" value="{{ old('major') ?? $course->major }}">
        <div>{{ $errors->first('major') }}</div>
    </div>
</div>

<div class="form-group row">
    <label for="year" class="col-md-2 col-form-label text-md-right">Year</label>

    <div class="col-md-8">
        <input id="year" type="text" class="form-control" name="year" value="{{ old('year') ?? $course->year }}">
        <div>{{ $errors->first('year') }}</div>
    </div>
</div>


<div class="form-group row">
    <label for="semester" class="col-md-2 col-form-label text-md-right">Semester</label>

    <div class="col-md-8">
        <input id="semester" type="text" class="form-control" name="semester"
            value="{{ old('semester') ?? $course->semester }}">
        <div>{{ $errors->first('semester') }}</div>
    </div>
</div>


<div class="form-group row">
    <label for="section" class="col-md-2 col-form-label text-md-right">Section</label>

    <div class="col-md-8">
        <input id="section" type="text" class="form-control" name="section"
            value="{{ old('section') ?? $course->section }}">
        <div>{{ $errors->first('section') }}</div>
    </div>
</div>

@csrf
