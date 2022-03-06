@extends('/sekolah/layout')
@section('title', 'Search patient')
@section('content')
<div class="container mt-5 px-2">
    <div class="table-responsive">
        <table class="table table-responsive table-borderless">
            <thead>
                <tr class="bg-light">
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="20%">IC</th>
                    <th scope="col" width="5%"></th>
                    <th scope="col" width="5%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pencarian as $ind)
			            <tr>
                        <td>{{$ind['id']}}</td>
                        <td>{{$ind['nama']}}</td>
                        <td>{{$ind['ic_num']}}</td>
                        <td><a href='' class='btn btn-primary'>Edit</a></td>
                        <td><a href='' class='btn btn-danger'>Delete</a></td>
                        </tr>
                        @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
