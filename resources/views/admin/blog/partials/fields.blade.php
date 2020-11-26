{!! csrf_field() !!}
                
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" value="{{$model->title}}" placeholder="Enter Title">
        <small id="titleHelp" class="form-text text-muted">Enter an interesting Title for your post.</small>

    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror

    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" aria-describedby="slugHelp" name="slug" value="{{$model->slug}}" placeholder="Enter Slug">
        <small id="slugHelp" class="form-text text-muted">Enter a Slug</small>

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror

    </div>

    <div class="form-group">
        <label for="published_at">Published Date/Time</label>
        <input type="text" class="form-control" id="published_at" aria-describedby="published_atHelp" name="published_at" value="{{$model->published_at}}" placeholder="Enter Date/Time">
        <small id="published_atHelp" class="form-text text-muted">Enter Date/Time</small>

    @error('published_at')
        <small class="text-danger">{{$message}}</small>
    @enderror

    </div>

    <div class="form-group">
        <label for="excerpt">Excerpt</label>
        <input type="text" class="form-control" id="excerpt" aria-describedby="excerptHelp" name="excerpt" value="{{$model->excerpt}}" placeholder="Enter Excerpt">
        <small id="excerptHelp" class="form-text text-muted">Enter Excerpt</small>

    @error('excerpt')
        <small class="text-danger">{{$message}}</small>
    @enderror

    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" class="form-control" id="body" aria-describedby="bodyHelp" name="body" value="{{$model->body}}" placeholder="Enter the body">
        <small id="bodyHelp" class="form-text text-muted">Enter body</small>

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror

    </div>

    <button type="submit" class="btn btn-primary">Save</button>
        
    </form>
