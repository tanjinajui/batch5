@extends('layouts.includes.master')

@section('title', 'All Departments View')


@section('content')


	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 create">
	<h2>All Department View</h2>
		<h3><a href="/departments/create">Add New Department</a></h3>

	<!-- include message page -->
		@include('messages.message')

	<br>
	<!-- database table data show starts -->
	<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SL.</th>
      <th scope="col">Department name</th>
      <th scope="col">Department code</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
   <?php $i= $departments->perPage().($departments->currentPage()-1); ?>
  <!-- foreach loops database er data show -->
  @foreach($departments as $key=>$data_show)
  <tbody>
    <tr>
      <td>{{++$i}}</td>
      <td>{{$data_show->department_name}}</td>
      <td>{{$data_show->department_code}}</td>
      <td><a href="/departments/{{$data_show->id}}/edit">Edit</a>|<a href="/departments/delete/{{$data_show->id}}" onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
	<!-- database table show ends -->
 <!-- page paginate	add -->
{{$departments->links()}}
</div>
</div>
</div>
@endsection('content')
