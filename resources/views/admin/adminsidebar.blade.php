@extends('layouts.app')

@section('admincontent')
  
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url("/admin/home")}}">
        <i class="bi bi-people"></i>
        <span>User</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url("/admin/voucher")}}">
        <i class="bi bi-ticket-detailed"></i>
        <span>Voucher</span>
        </a>
    </li><!-- End Dashboard Nav -->
  </aside><!-- End Sidebar-->  
@endsection
