@extends('Layouts.app');

@section("title") New Post @endsection

@section("content")
    <div class="container">
        <form action="{{ route("posts.store") }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" placeholder="Post Title" aria-describedby="emailHelpId">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="textarea" class="form-control" placeholder="Post Description" aria-describedby="emailHelpId">
            </div>
            <div class="mb-3">
                <label class="form-label">Post Creator</label>
                <input type="text" class="form-control" placeholder="Post Owner"  aria-describedby="emailHelpId">
            </div>
            <button type="submit" class="btn btn-primary" style="width: 150px"><i class="bi bi-plus-circle"></i> Post</button>
        </form>
     </div>

@endsection
