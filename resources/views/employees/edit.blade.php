@extends('template')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Employee</h1>
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
                <h5 class="card-title">Edit Employee Page</h5>


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    
                      <form role="form" method="POST" action="{{url('employees',[$employee->id])}}">
                          @method('PUT')
                          @csrf()
                <div class="card-body">
                    @if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                 @endif
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$employee->name}}">
                  </div>
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="number" class="form-control" id="age" placeholder="Age"  name="age" value="{{$employee->age}}">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        
                        <option value="Male" @if($employee->gender == 'Male') selected="selected" @endif>Male</option>
                        <option value="Female" @if($employee->gender == 'Female') selected="selected" @endif value="{{$employee->name}}">Female</option>
                        
                    </select>
                  </div>
                  <label for="willing_to_work">Willing to work</label>
                  <div class="form-check">
                    
                      <input type="radio" class="form-check-input" id="willing_to_work" @if($employee->willing_to_work == 'Yes') checked="checked" @endif value="Yes"  name="willing_to_work"> <label for="willing_to_work">Yes</label><br>
                      <input type="radio" class="form-check-input" id="willing_to_no_work" @if($employee->willing_to_work == 'No') checked="checked" @endif value="No"  name="willing_to_work"> <label for="willing_to_no_work">No</label>
                  </div>
                    <label for="exampleInputPassword1">Languages</label><br>
                   <div class="form-check">
                       
                    <input type="checkbox" class="form-check-input" id="english"  @if(in_array('English',$employee->languages)) checked="checked" @endif value="English" name="languages[]">
                    <label class="form-check-label" for="english">English</label>
                    <br>
                    <input type="checkbox" class="form-check-input" id="hindi" @if(in_array('Hindi',$employee->languages)) checked="checked" @endif value="Hindi" name="languages[]">
                    <label class="form-check-label" for="hindi">Hindi</label>
                    <br>
                    <input type="checkbox" class="form-check-input" id="malayalam" @if(in_array('Malayalam',$employee->languages)) checked="checked" @endif value="Malayalam" name="languages[]">
                    <label class="form-check-label" for="malayalam">Malayalam</label>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                    
                  </div>
                  
                </div>
                <!-- /.row -->
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





