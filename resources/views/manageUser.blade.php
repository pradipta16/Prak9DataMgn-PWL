@extends('layouts.master')

@section('content')

<div class="container">
    <table class="table table-bordered table-striped " style="margin-top:80px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Roles</th>
                <th></th>
            </tr>
        </thead>
<tbody>
@foreach($user as $a)
<tr>
<td>{{$a->id}}</td>
<td>{{$a->name}}</td>
<td>{{$a->email}}</td>
<td>{{$a->password}}</td>
<td>{{$a->roles}}</td>
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