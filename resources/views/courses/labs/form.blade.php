{{-- deadline has to be better formatted --}}

<div class="form-group row">
    <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>

    <div class="col-md-8">
        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') ?? $lab->title }}">
        <div>{{ $errors->first('title') }}</div>
    </div>
</div>

<div class="form-group row">
    <label for="deadline" class="col-md-2 col-form-label text-md-right">Deadline</label>

    <div class="col-md-8">
        <input type="date" name="deadline" value="{{ old('deadline') ?? $lab->deadline }}" class="form-control">
        <div>{{ $errors->first('deadline') }}</div>
    </div>
</div>

<div class="form-group row">
    <label for="max_members" class="col-md-2 col-form-label text-md-right">Work Type</label>

    <div class="col-md-8">
        <select name="max_members" id="max_members" class="form-control">
            <option value="" disabled>Max Members</option>
            <option value="1">Individual : 1</option>
            <option value="2">Pair : 2</option>
            <option value="3">Group : 3</option>
        </select>
        <div>{{ $errors->first('max_members') }}</div>
    </div>
</div>

@csrf
