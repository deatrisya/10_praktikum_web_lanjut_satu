@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/articles/{{$article->id}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Title : </label>
                <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}">
            </div>
            <div class="form-group">
                <label for="content">Content : </label>
                <textarea type="text" name="content" class="form-control" cols="30" rows="10">{{$article->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image : </label>
                <input type="file" class="form-control" required="required" name="image" value="{{$article->featured_image}}">
                <img src="{{asset('storage/'.$article->featured_image)}}" alt="gambar" width="150px">
            </div>
            <button type="submit" name="submit" class="btn btn-primary float-right">Ubah Data</button>
        </form>
    </div>
@endsection
