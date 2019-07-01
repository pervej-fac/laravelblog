@extends('layouts.theme1.master')
@section('content')
    <div class="row">
            <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $title }}</h4>
                            <a href="{{ route('post.create') }}" class="btn btn-primary">Add New</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $serial++ }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->category->name }}</td>
                                                <td>{{ $post->author->name }}</td>
                                                <td>{{ $post->status }}</td>
                                                <td>
                                                    <a href="{{ route('post.edit',$post->id) }}">Edit</a>
                                                    <form method="post" action="{{ route('post.destroy',$post->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="return confirm('Are you confirm to delete')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection
