@extends('template')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Employee Listing Page</h5>


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Willing To Work</th>
                      <th>languages</th>
                      <th>&nbsp;</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($employees as $key => $employee)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->age}}</td>
                      <td>{{$employee->gender}}</td>
                      <td>{{$employee->willing_to_work}}</td>
                      <td>{{implode(',',$employee->languages)}}</td>
                      <td>
                          <a href="{{url('employees/'.$employee->id.'/edit')}}">Edit</a>
<!--                          <a href="{{url('employees/'.$employee->id.'/edit')}}">Delete</a>-->
                          
                          <form method="POST" action="{{ url('employees',[$employee->id])}}">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger btn-icon">
               Delete
              </button>
            </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection










