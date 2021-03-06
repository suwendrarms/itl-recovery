<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  @include('includes.css')
</head>

<body>
  <!-- Sidenav -->
  @include('includes.slider')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('includes.header')
    <!-- Header -->
    <!-- Header -->

    <!-- Page content -->
    @yield('content')
      <!-- Footer -->
      @include('includes.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  @include('includes.js')
</body>

</html>
