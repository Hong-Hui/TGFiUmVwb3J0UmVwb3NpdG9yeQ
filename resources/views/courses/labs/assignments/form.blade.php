<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ old('title') ?? $assignment->title }}" class="form-control">
    <div>{{ $errors->first('title') }}</div>
</div>

<div class="form-group">
    <label for="visibility">Visibility</label>
    <select name="visibility" id="visibility" class="form-control">
        <option value="" disabled>Visibility</option>
        <option value="private">Private</option>
        <option value="public">Public</option>
    </select>
    <div>{{ $errors->first('visibility') }}</div>
</div>

@csrf
