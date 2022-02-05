@extends('admin.adminsidebar')

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
                                <input type="text" id="username" class="form-control" name="username" max="16" value=""/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" id="password" class="form-control" name="password" max="3" value=""/>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        
        var autouser = makeid(16);
        var autopass = makeud(3);
        $(document).ready(function() {
            $('#username').val(autouser)
            $('#password').val(autopass)
        }
        function makeid(length) {
        var result           = '';
        var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * 
        charactersLength));
        }
        return result;
        }
    </script>
@endsection