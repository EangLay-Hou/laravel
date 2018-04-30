@extends('layout')

@section('content')
<form method="POST" action="/add_post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" name="body" class="form-control"></textarea>
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary">Post</button>
  </div>
</form>
@stop