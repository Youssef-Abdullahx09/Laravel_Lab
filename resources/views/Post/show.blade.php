@extends('Layouts.app');

@section('title') Details @endsection

@section('content')
<div class="container text-primary my-5 px-5">
    <div class="row">
        <div class="col-6">
            <h2 class="text-primary">Post Details</h2>
        </div>
        <div class="col-6 text-end">
            <a href="{{ route("posts") }}" class="btn btn-primary" style="width: 200px">
                <i class="bi bi-arrow-return-left"></i> Back To Post List</a
            >
          </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" disabled class="form-control" value="{{ $post["title"] }}"  aria-describedby="emailHelpId">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="textarea" class="form-control" value="{{ $post["description"] }}"  aria-describedby="emailHelpId">
    </div>
    <div class="mb-3">
        <label class="form-label">Post Creator</label>
        <input type="text" class="form-control" value="{{ $post["posted_by"] }}"  aria-describedby="emailHelpId">
    </div>
</div>
@endsection
