@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('admin.posts.store') }}" method="POST">
      @csrf
        
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" >
              @error('title')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="content">Insert article's content</label>
              <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="10">{{ old('content') }}</textarea>
              @error('content')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="published_at">Insert article's publish date</label>
              <input type="date" class="form-control @error('published_at') is-invalid @enderror" value="'{{ old('published_at') }}" id="published_at" >
              @error('published_at')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Add</button>

    </form>
</div>

@endsection