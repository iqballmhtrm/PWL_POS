@extends('layout.app')

{{-- Customize layout sections --}}
@section('subtitle', 'M_User')
@section('content_header_title', 'M_User')
@section('content_header_subtitle', 'Create')
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create User</h2>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops</strong> Input gagal<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> @endforeach
        </ul>
    </div> 
@endif
<form action="{{ route('m_user.store') }}" method="POST"> 
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Username:</strong>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username"></input>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>nama:</strong>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama"></input>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password"></input>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
        <a class="btn btn-secondary" href="{{ route('m_user.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form> 

@endsection
    