@extends('layout.master.master')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!--  -->

    <!-- Main content -->
<form action="{{route('storeupdate.update', $storelist[0]->store_id)}}" method="POST" enctype="multipart/form-data">
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
                <label for="store_name">Store Name</label>
                <input type="text" id="store_name" value = "{{ $storelist[0]->store_name }}" name = "store_name" required class="form-control">
              </div>
              <div class="form-group">
                <label for="store_description">Store Description</label>
                <textarea id="store_description" name = "store_description" class="form-control" rows="4">"{{$storelist[0]->store_description}}"</textarea>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name = "status" value = "{{$storelist[0]->status}}" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value = "1">Physical</option>
                  <option value = "0">Online</option>
                </select>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name = "subject" value = "{{$storelist[0]->subject}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="teacher_name">Instructor Name</label>
                <input type="text" id="teacher_name" name = "teacher_name" value = "{{$storelist[0]->teacher_name}}" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Profile</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="teacher_name">Store Image</label>
                    <input type="file" id="store_img" name = "store_img" value = "{{$storelist[0]->store_img}}" class="form-control">
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="storeview" class="btn btn-secondary">Cancel</a>
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
