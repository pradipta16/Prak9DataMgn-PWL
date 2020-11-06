@extends('layouts.master')

@section('content')
<div class="container">
    <table class="table table-bordered table-striped " style="margin-top:80px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Edit</th>
            </tr>
        </thead>
<tbody>
@foreach($article as $a)
<tr>
<td>{{$a->id}}</td>
<td>{{$a->title}}</td>
<td>{{$a->created_at}}</td>
<td><a href="manage/editArticle/{{ $a->id }}" class="badge badge-warning">Edit</a>
<a href="manage/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
</td>


</tr>
@endforeach
</tbody>
</table>
<a href="manage/addArticle" class="btn btn-primary">Tambah Data</a>
</div>

@endsection