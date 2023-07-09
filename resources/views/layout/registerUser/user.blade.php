@extends('layout.master.master')
@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registered User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="profile">Home</a></li>
              <li class="breadcrumb-item active">Registered User</li>
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
          <h3 class="card-title">Registered User</h3>

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
              @foreach($userView as $m)
                <tr>
                    <td>{{$m->registerUser_id}}</td>
                    <td>{{$m->registerUser_firstname}}{{$m->registerUser_lastname}}</td>
                    <td>{{$m->email}}</td>
                    <td>{{$m->email_verified_at}}</td>
                    <td>{{$m->created_at}}</td>
                    <td>{{$m->updated_at}}</td>
                    <!-- <td>{{$m->store_img}}</td> -->
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('useredit.edit', ['registerUser_id' => $m->registerUser_id]) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('userdelete.delete', ['registerUser_id' => $m->registerUser_id]) }}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                    </td>
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
