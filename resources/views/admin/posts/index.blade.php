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
                    <td>{{ $post->published_at }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-small btn-danger" href="{{ route('admin.posts.destroy', $post) }}">Delete</a>
                    </td>
                </tr>
            @endforeach       
        </tbody>
      </table>
</div>

<ul>
    @foreach ($posts as $post)
        <li>
            {{ $post->title }}
        </li>
    @endforeach
</ul>

@endsection