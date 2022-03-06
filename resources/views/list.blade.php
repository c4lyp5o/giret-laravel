@extends('layout') @section('title', 'Listing patients') @section('content')
<body>
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
				<tbody> @foreach ($users as $user)
					<tr>
						<td>{{$user['id']}}</td>
						<td>{{$user['name']}}</td>
						<td>{{$user['email']}}</td>
						<td>
							<button type="button" class="btn btn-success" onclick="location.href='nuedit.php'">Edit</button>
						</td>
						<td>
							<button type="button" class="btn btn-danger" onclick="location.href='delete.php'">Delete</button>
						</td>
					</tr> @endforeach </tbody>
			</table>
		</div>
	</div>
</body>
<br>
<br>
<div class="wrapper">
	<button type="button" class="btn btn-info" onclick="location.href='export.php';">Export to Excel</button>
	<br> </div> @endsection
