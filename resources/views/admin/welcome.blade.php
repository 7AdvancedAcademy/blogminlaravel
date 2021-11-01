@extends('layouts.admin')


@section('main-section')

    <main class="container">
        <h1>Posts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Excerpt</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->img }}</td>
                    @if(strlen($post->content > 100))
                    <td>{{ substr(strip_tags($post->content), 100) }}</td>
                    @else 
                    <td>{{ strip_tags($post->content) }}</td>
                    @endif
                    <td>
                        <button>edit</button>
                        <form action="{{url('admin')}}/{{$post->id}}" method="POST" class="delete-form">
                            
        {{ method_field('DELETE') }}
        @csrf
                           
                            <button>delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </main>
@endsection
