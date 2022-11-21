
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mini-CRM | Employees</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  



  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="m-3">
      <h4 class="text-light"><i class="bi bi-amd"></i> 
        <span class="mx-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23 " fill="currentColor" class="bi bi-amd" viewBox="0 0 16 16">
            <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0H.334ZM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2V9.72Z"/>
          </svg>
        </span>
        Mini-CRM
      </h4>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="imag<!-- /.sidebar -->e">
          <img src="img/download.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <div class="container">
            <button class="btn btn-danger" style="float: left;
            position:fixed;
            bottom:20px;
            left:20px;
            width: 100px;
            font-size: 15px;"><a href="{{ route('actionlogout') }}" class="text-light">Logout</a> </button>
          </div>
      </nav>
    </div>
  </aside>
  <!--Sidebar Menu-->
   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper p-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employees Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li><a class="btn btn-outline-primary m-1" href="{{ route('pegawai.index') }}">Employees Table</a></li>
              <li><a class="btn btn-outline-secondary m-1" href="{{ route('company.index') }}">Companies Table</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

        @if (session('status'))
            <div class="result">
                <div class="alert alert-primary">{{ session('status') }}</div>
            </div>

        @endif
        <button type="button" class="btn btn-primary btn-tambah" data-toggle="modal" data-target="#modalTambah">
            Tambah Data
        </button>
        <table class="table table-light" id="empTable">
            <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Company Name</th>
                  <th>Email</th>            
                  <th>Phone</th>  
                  <th></th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $item)
                    <tr>
                      <td>{{ $item->fname }}</td>
                      <td>{{ $item->lname }}</td>
                      <td>{{ $item->company->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->no_hp }}</td>
                      <td><button type="button" class="btn btn-warning btn-edit"
                                data-url={{ route('pegawai.getPegawai', ['id' => $item->id]) }} data-toggle="modal"
                                  data-target="#modalEdit">
                                Edit
                            </button>
                            <a class="btn btn-danger btn-delete"
                                href="{{ route('pegawai.delete', ['id' => $item->id]) }}"
                                onclick="return confirm('Apa kamu yakin?')">Hapus</a>
                      </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="{{ route('pegawai.create') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="lname" class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="lname" id="lname" placeholder="" value="">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" id="email" placeholder="" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                          <label for="no_hp" class="col-sm-3 col-form-label">No Hp</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="" value="">
                          </div>
                      </div>
                        <div class="form-group row">
                          <label>Company</label>
                            <select class="form-control" name="user_id">
                              @foreach ($company as $item)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                      </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="{{ route('pegawai.update') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="id" id="id" value="">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="lname" class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="lname" id="lname" placeholder="" value="">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" id="email" placeholder="" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                          <label for="no_hp" class="col-sm-3 col-form-label">No Hp</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="" value="">
                          </div>
                      </div>
                        <div class="form-group row">
                          <label>Company</label>
                            <select class="form-control" name="user_id">
                              @foreach ($company as $item)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                      </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    
                </form>
            </div>
        </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

          
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<!-- page script -->
<script>
  $(document).ready( function () {
        $('#empTable').DataTable();
      } );
  $('.btn-edit').click(function() {
      var url = $(this).data('url');
      $('#modalEdit #id').val('')
      $('#modalEdit #fname').val('')
      $('#modalEdit #lname').val('')
      $('#modalEdit #email').val('')
      $('#modalEdit #no_hp').val('')
      $('#modalEdit #user_id').val('')
      $.ajax({
          type: "get",
          url: url,
          dataType: "json",
          success: function(res) {
              $('#modalEdit #id').val(res['id'])
              $('#modalEdit #fname').val(res['fname'])
              $('#modalEdit #lname').val(res['lname'])
              $('#modalEdit #email').val(res['email'])
              $('#modalEdit #no_hp').val(res['no_hp'])
              $('#modalEdit #user_id').val(res['user_id'])
          }
      });
  });
</script>
</body>
</html>
