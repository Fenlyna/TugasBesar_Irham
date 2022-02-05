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

<section class="section">
  <div class="row">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vouchers</h5>
        <a href="{{route('voucher.create')}}" class="btn btn-success">Tambah Data</a>

        <!-- Default Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($vouchers as $voucher)
                <tr>
                    <td>{{ 1 }}</td>
                    <td>{{ $voucher->username }}</td>
                    <td>{{ $voucher->password }}</td>
                    <td>
                      <form action="{{route('voucher.destroy', $voucher->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Default Table Example -->
      </div>
    </div>



  </div>
</section>
@endsection
