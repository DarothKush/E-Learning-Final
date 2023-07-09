@extends('layout.master.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
<form action="/courseinsert" method="POST" enctype="multipart/form-data">
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
                <label for="course_name">Course Name</label>
                <input type="text" id="course_name" name = "course_name" required class="form-control">
              </div>
              <div class="form-group">
                <label for="course_description">Product Description</label>
                <textarea id="course_description" name = "course_description" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name = "status" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Physical</option>
                  <option>Online</option>
                </select>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name = "subject"class="form-control">
              </div>
              <div class="form-group">
                <label for="teacher_name">Teacher</label>
                <input type="text" id="teacher_name" name = "teacher_name"class="form-control">
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
            <div class="card-body">
              <div class="form-group">
                <label for="price">Course Image</label>
                <input type="file" id="course_img" name = "course_img"class="form-control">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name = "price"class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="courseview" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Project" class="btn btn-success float-right">
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
  <!-- /.control-sidebar -->
</form>
</div>

</body>
@stop
