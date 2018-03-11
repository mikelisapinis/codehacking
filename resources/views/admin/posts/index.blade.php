@extends('layouts.admin')

@section('content')

     <h1>Posts</h1>
     <table class="table">
          <thead>
               <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th>Updated at</th>
               </tr>
          </thead>
          <tbody>

               @if( $posts )

                    @foreach( $posts as $post)

                         <tr>
                              <td>{{ $post->id }}</td>
                              <td><img height="50" src="{{ $post->photo_id ? $post->photo->path : 'http://placehold.it/50' }}"></td>
                              <td>{{ $post->user->name }}</td>
                              <td>{{ $post->category ? $post->category->name : 'Uncatagorized' }}</td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->body }}</td>
                              <td>{{ $post->created_at->diffForhumans() }}</td>
                              <td>{{ $post->updated_at->diffForhumans() }}</td>
                         </tr>

                    @endforeach

               @endif

          </tbody>
     </table>

@stop