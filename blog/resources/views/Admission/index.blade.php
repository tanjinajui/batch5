@extends('layouts.includes.master')

@section('title', 'Admission_create')


@section('content')

<!-- container-fluid -->
<div class="container-fluid">
    <!-- Basic Card Example -->
         <div class="card shadow mb-4">
             <div class="row">
                <div class="col-12 text-center">
                    <div class="p-5 m-auto" style="max-width:600px">
                      <div class="heading text-center">
                        <h1 class="h4 text-gray-900 mb-4">All Admission Students View!</h1>
                      </div>
                        <div class="col-12">
                            <div class="allstudentviewtable">
                                @include('messages.message')
                            <!-- database table data show starts -->
                            <table class="table allstudentviewtable table-striped">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">SL.</th>
                                  <th scope="col">Student Id</th>
                                  <th scope="col">Student Name</th>
                                  <th scope="col">Student Department</th>
                                  <th scope="col">Student Section Name</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>

                              <!-- paginate add query -->
                              <?php $i= $admissions->perPage().($admissions->currentPage()-1); ?>
                              <!-- foreach loops database er data show -->
                              @foreach($admissions as $key=>$data_show)
                              <tbody>
                                <tr>
                                  <td>{{++$i}}</td>
                                  <td>{{$data_show->student_id}}</td>
                                  <td>{{$data_show->student_name}}</td>
                                  <td>{{$data_show->departments->department_name}}</td>
                                  <td>{{$data_show->student_section_name}}</td>
                                  <td><a href="/admissions/{{$data_show->id}}/edit">Edit</a>|<a href="/admissions/delete/{{$data_show->id}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                                </tr>
                              </tbody>
                              @endforeach
                            </table>
                             <!-- page paginate add -->
                             {{$admissions->links()}}
        
    <!-- database table show ends -->
     <a href="/admissions/create" class="btn btn-primary">Add New Admission Students</a>

    </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </div>
 </div>

@endsection('content')