<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <!-- Dans le head -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/css/bootstrap-iconpicker.min.css">

  <title>Admin | @yield('title')</title>

  <!-- include CSS Style -->
  @include('admin.layouts.inc.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <!-- include sidebar -->
      @include('admin.layouts.inc.sidebar')


      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>

      <!-- include footer -->
      @include('admin.layouts.inc.footer')
    </div>
  </div>

  <!-- include JS Scripts -->
  @include('admin.layouts.inc.script')
<!-- À la fin du body, avant la fermeture -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.bundle.min.js"></script>
  @stack('scripts')
</body>

</html>
