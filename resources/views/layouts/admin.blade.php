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
  <title>Sistem Managemen Surat</title>
  
  @include('includes.style')

</head>

<body>
  @include('includes.sidebar')
     
  <!-- Main content -->
<div class="main-content" id="panel">

  @include('includes.navbar')



  @yield('content')
</div>
  
 
      @include('includes.footer')
   
  @include('includes.script')

</body>

</html>
