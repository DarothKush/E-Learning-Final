@extends('layout.master.master')
@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="profile">Home</a></li>
              <li class="breadcrumb-item active">Admin User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Fullname
                      </th>
                      <th style="width: 20%">
                          Email
                      </th>
                      <th >
                          Verify At
                      </th>
                      <th>
                          Join Date
                      </th>
                      <th>
                          Last Update
                      </th>
                  </tr>
              </thead>
              @foreach($profileView as $m)
                <tr>
                    <td>{{$m->user_id}}</td>
                    <td>{{$m->name}}</td>
                    <td>{{$m->email}}</td>
                    <td>{{$m->email_verified_at}}</td>
                    <td>{{$m->created_at}}</td>
                    <td>{{$m->updated_at}}</td>
                    <!-- <td>{{$m->store_img}}</td> -->
                </tr>
                @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
</body>
@stop
