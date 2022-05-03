@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Edit Post: {{ $post->title }}</h1>
        </div>
        <div class="col-2">
            <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-small btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <form action="{{ route('admin.posts.update', $post ) }}" method="post">
      @csrf
      @method('put')
        
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?: $post->title }}" id="title" >
              @error('title')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="content">Insert article's content</label>
              <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="10">{{ old('content') ?: $post->content }}</textarea>
              @error('content')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="published_at">Insert article's publish date</label>
              <input type="date" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at') ?: Str::substr($post->published_at,0,10) }}" id="published_at" name="published_at">
              @error('published_at')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>

@endsection