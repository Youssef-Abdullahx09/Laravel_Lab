@extends('Layouts.app');

@section("title") New Post @endsection

@section("content")
    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <h2 class="text-primary">Edit Post</h2>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route("posts") }}" class="btn btn-primary" style="width: 200px">
                    <i class="bi bi-arrow-return-left"></i> Back To Post List</a
                >
              </div>
        </div>
        <form action="{{ route("posts.store") }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" value="{{ $post["title"] }}" aria-describedby="emailHelpId">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="textarea" class="form-control" pvalue="{{ $post["description"] }}" aria-describedby="emailHelpId">
            </div>
            <div class="mb-3">
                <label class="form-label">Post Creator</label>
                <input type="text" class="form-control" value="{{ $post["posted_by"] }}"  aria-describedby="emailHelpId">
            </div>
            <button type="submit" class="btn btn-primary" style="width: 150px"><i class="bi bi-plus-circle"></i> Post</button>
        </form>
     </div>

@endsection
