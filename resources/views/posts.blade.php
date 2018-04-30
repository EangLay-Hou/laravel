@extends('layout')

@section('content')

@foreach($posts as $post)
<div class="row">
  <div class="col-md-8">
    <div class="card mb-8 box-shadow">
      <div class="card-body">
        <h4>{{ $post->title }}</h4>
        <p class="card-text">{{ $post->body }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
            <a class="btn btn-sm btn-outline-secondary" href="/edit_post">Edit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@stop