<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="vendors/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  @include('partials.navbar')
  <div class="container mt-4">
    @yield('container')
  </div>

  <script src="vendors/jquery-3.6.4/jquery-3.6.4.min.js"></script>
  <script src="vendors/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>