@extends('layouts.master')

    
@section('content')
<div class="container" style="padding-top: 90px" >
    <div class="textCake" style="padding-top: 10px">
        <p>MASUKKAN DATA</p>
      </div>
    <form action="/manageUser/create" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"
            required="required" name="name"></br>
        </div>
    <hr style="background-color: orangered">   
        <h6>E-mail</h6>
        <textarea name="email" id="" cols="80" rows="9" style="margin-bottom: 30px"></textarea>
    <hr style="background-color: orangered">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control"
            required="required" name="password"></br>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <input type="text" class="form-control"
            required="required" name="roles"></br>
        </div>
        
        <button type="submit" name="add" class="btn btn-dark float-right" style="margin-bottom: 90px">Tambah Data</button>
    </form>
</div>
