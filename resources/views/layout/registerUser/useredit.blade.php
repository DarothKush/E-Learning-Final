@extends('layout.master.master')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!--  -->

    <!-- Main content -->
<form action="{{route('userupdate.update', $useredit[0]->registerUser_id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="registerUser_firstname">Firstname</label>
                <input type="text" id="registerUser_firstname" value = "{{ $useredit[0]->registerUser_firstname }}" name = "registerUser_firstname" required class="form-control">
              </div>
              <div class="form-group">
                <label for="registerUser_lastname">Lastname</label>
                <input type="text" id="registerUser_lastname" value = "{{ $useredit[0]->registerUser_lastname }}" name = "registerUser_lastname" required class="form-control">
              </div>

              <div class="form-group">
                <label for="registerUser_email">Email</label>
                <input type="text" id="email" name = "email" value = "{{$useredit[0]->email}}" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Price</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="user" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Submit" class="btn btn-success float-right">
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</form>
</div>
</body>
@stop
