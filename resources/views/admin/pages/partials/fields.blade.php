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
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" aria-describedby="urlHelp" name="url" value="{{$model->url}}" placeholder="Enter URL">
        <small id="urlHelp" class="form-text text-muted">Enter an URL</small>

    @error('url')
        <small class="text-danger">{{$message}}</small>
    @enderror

    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" id="content" aria-describedby="contentHelp" name="content" value="{{$model->content}}" placeholder="Enter Content">
        <small id="urlcontent" class="form-text text-muted">Enter a interesting content</small>

    @error('content')
        <small class="text-danger">{{$message}}</small>
    @enderror

    </div>

    <button type="submit" class="btn btn-primary">Save</button>
        
    </form>
