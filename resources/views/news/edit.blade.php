@extends('layouts.app')
  
@section('title', 'Edit News')
  
@section('contents')
    <h1 class="mb-0">Edit News</h1>
    <hr />
    <form action="{{ route('news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $news->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Categories</label>
                <input type="text" name="categories" class="form-control" placeholder="categories" value="{{ $news->categories }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $news->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection