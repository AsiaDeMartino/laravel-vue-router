@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Add New Post</h1>
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
              <label for="category_id">Select a Category</label>
              <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                <option value="">-- no category --</option>
                @foreach ($categories as $category)
                  <option {{ old('category_id') && old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id  }}">{{ $category->name }}</option>
                @endforeach
              </select>
              @error('category_id')
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
              <input type="date" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at') }}" id="published_at" name="published_at" >
              @error('published_at')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Add</button>

    </form>
</div>

@endsection