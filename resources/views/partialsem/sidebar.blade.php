<!-- Main Sidebar Container -->
<div class="wrapper">
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
           <h5 class="text-light">Admin</h5>
         </div>
       </div>
   
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="bi bi-card-text"></i>
             <span class="mx-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                 <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                 <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
               </svg>
             </span>
             <p>
               Tables
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('company.index') }}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <span>Companies</span>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('pegawai.index') }}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <span>Employees</span>
               </a>
             </li>
           </ul>
         </li>
       </ul>
   
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
   
   
   <!-- Content Header (Page header) -->
   <div class="content-wrapper p-5">
   
     @if (session('status'))
         <div class="result">
             <div class="alert alert-primary">{{ session('status') }}</div>
         </div>
   
     @endif

@include('partialsem.content')
@include('partialsem.modal')


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