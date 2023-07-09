@extends('layout.master.master')
@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Store</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="profile">Home</a></li>
              <li class="breadcrumb-item active">Store</li>
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
          <h3 class="card-title">Store</h3>

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
                          Store Name
                      </th>
                      <th style="width: 20%">
                          Store Description
                      </th>
                      <th >
                          Subject
                      </th>
                      <th>
                          Instructor Name
                      </th>
                      <th>
                          Status
                      </th>
                      <th>
                          Store image
                      </th>
                  </tr>
              </thead>
              @foreach($storelist as $m)
                <tr>
                    <td>{{$m->store_id}}</td>
                    <td>{{$m->store_name}}</td>
                    <td>{{$m->store_description}}</td>
                    <td>{{$m->subject}}</td>
                    <td>{{$m->teacher_name}}</td>
                    <td>{{$m->status}}</td>
                    <td>{{$m->store_img}}</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('storeedit.edit', ['store_id' => $m->store_id]) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('storedelete.delete', ['store_id' => $m->store_id]) }}">
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

@include('layout.master.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
</body>
@stop
