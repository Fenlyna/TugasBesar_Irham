@extends('admin.adminsidebar')
<?php 
$userlength = 16;
$passlength = 3;
$UserrandomString = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($userlength/strlen($x)) )),1,$userlength);
$PassrandomString = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($passlength/strlen($x)) )),1,$passlength);
?>
@section('content')
<div class="pagetitle">
    <h1>Vouchers</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin</a></li>
        <li class="breadcrumb-item">Voucher</li>
    </ol>
    </nav>
  </div><!-- End Page Title -->

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif


    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vouchers</h5>
                        <form method="POST" action="{{ route('voucher.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" max="16" value="{{$UserrandomString;}}"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" max="3" value="{{$PassrandomString;}}"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </section>
@endsection