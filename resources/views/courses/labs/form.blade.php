<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ old('title') ?? $lab->title }}" class="form-control">
    <div>{{ $errors->first('title') }}</div>
</div>

{{-- deadline has to be better formatted --}}
<div class="form-group">
    <label for="deadline">Deadline</label>
    <input type="text" name="deadline" value="{{ old('deadline') ?? $lab->deadline }}" class="form-control">
    <div>{{ $errors->first('deadline') }}</div>
</div>

<div class="form-group">
    <label for="max_members">Collaboration</label>
    <select name="max_members" id="max_members" class="form-control">
        <option value="" disabled>Max Members</option>
        <option value="1">Individual : 1</option>
        <option value="2">Pair : 2</option>
        <option value="3">Group : 3</option>
    </select>
    <div>{{ $errors->first('max_members') }}</div>
</div>

@csrf
