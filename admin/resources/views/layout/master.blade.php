<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title') - SI41 Laravel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link text-center">
      <span class="brand-text font-weight-light">SI41 Laravel</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item">
            <a href="{{ route('prodi.index') }}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>List Prodi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('prodi.create') }}" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>Create Prodi</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content -->
  <div class="content-wrapper p-3">
    <section class="content">
      <div class="container-fluid">
        <h4>@yield('title')</h4>
        <hr>
        @yield('content')
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2014-2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  </footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
