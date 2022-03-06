@extends('/sekolah/layout')
@section('title', 'Search patient')
@section('content')
<div class="container">
  <div class="row height d-flex justify-content-center align-items-center">
    <div class="col-md-8">
      <form action="result" method="post">
          @csrf
        <div class="search"> <i class="fa fa-search"></i> <input type="text" name="search" class="form-control" placeholder="Search patient by name.."> <button class="btn btn-primary">Search</button> </div>
      </form>
    </div>
  </div>
</div>
@endsection

{{-- <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form> --}}
