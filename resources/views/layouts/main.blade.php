<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="vendors/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  @include('partials.navbar')
  <div class="container mt-4">
    @yield('container')
  </div>

  <script src="vendors/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>