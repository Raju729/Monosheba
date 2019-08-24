<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-2 control-label">{{ 'Title' }}</label>
    <div class="col-md-8">
        <input class="form-control" name="title" type="text" id="title" value="{{ $post->title or ''}}" >
        <span style="color: red" id="title_error"></span>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    <label for="body" class="col-md-2 control-label">{{ 'Body' }}</label>
    <div class="col-md-8">
        <textarea class="form-control" rows="5" name="body" type="textarea" id="body"  >{{ $post->body or ''}}</textarea>
        {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
        <span style="color: red" id="body_error"></span>
    </div>
</div>
<div class="form-group">
    <input class="form-control" name="writer" type="hidden" id="writer" value="{{ $post->writer or  "Admin" }}" >
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-4">
        <input class="btn btn-primary" id="create_post" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

