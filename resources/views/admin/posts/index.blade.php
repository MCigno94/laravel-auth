@extends('layouts.admin')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>CoverImage</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>
                    <img width="120" src="{{$post->cover_image}}" alt="">
                </td>
                <td>{{$post->slug}}</td>
                <td>View - Edit - Delete</td>
            </tr>
            @empty
            <tr>
                <td scope="row">No Posts <a href="#">Create post</a></td>
            </tr>
            @endforelse
        </tbody>
    </table>
    

@endsection