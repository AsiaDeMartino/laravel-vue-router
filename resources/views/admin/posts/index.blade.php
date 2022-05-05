@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-primary mb-3" href="{{ route('admin.posts.create') }}">Add New Post</a>
</div>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Publish Date</th>
            <th scope="col">Creation Date</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post) 
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->category ? $post->category->name : '-' }}</td>
                    <td>
                        @foreach ($post->tags as $tag)
                            <span class="badge badge-pill badge-info">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>{{ $post->published_at }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a class="btn mb-3 btn-small btn-info" href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-small btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach       
        </tbody>
      </table>
</div>

@endsection