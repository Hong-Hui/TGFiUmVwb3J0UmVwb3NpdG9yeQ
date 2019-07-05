<div class="form-group row">
    <label for="source" class="col-md-2 col-form-label text-md-right">Source</label>

    <div class="col-md-8">
        <input id="source" type="file" class="form-control" name="source">
        <div>{{ $errors->first('source') }}</div>
    </div>
</div>

<div class="form-group row">
    <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>

    <div class="col-md-8">
        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') ?? $assignment->title }}">
        <div>{{ $errors->first('title') }}</div>
    </div>
</div>

<div class="form-group row">
    <label for="visibility" class="col-md-2 col-form-label text-md-right">Visibility</label>

    <div class="col-md-8">
        <select name="visibility" id="visibility" class="form-control">
            <option value="" disabled>Visibility</option>
            <option value="private">Private</option>
            <option value="public">Public</option>
        </select>
        <div>{{ $errors->first('visibility') }}</div>
    </div>
</div>

@csrf
