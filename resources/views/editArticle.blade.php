@extends('layouts.master')

@section('content')
<div class="container" style="margin-top:80px">
    <form action="/editArticle/update/{{$article->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$article->id}}"></br>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
            </div>
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <input type="text" class="form-control" required="required" name="excerpt" value="{{$article->excerpt}}"></br>
        </div>
        <div class="form-group">
            <label for="body">Content</label>
            <input type="text" class="form-control" required="required" name="body" value="{{$article->body}}"></br>
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
    </form>
</div>
@endsection