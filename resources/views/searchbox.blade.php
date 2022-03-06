@extends('layout')
@section('title', 'Search patient')
@section('content')
<div class="container">
  <div class="row height d-flex justify-content-center align-items-center">
    <div class="col-md-8">
      <form action="" method="post">
        <div class="search"> <i class="fa fa-search"></i> <input type="text" name=search class="form-control" placeholder="Search patient by name.."> <button class="btn btn-primary">Search</button> </div>
      </form>
    </div>
  </div>
</div>
@endsection
