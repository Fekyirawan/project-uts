<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('public')}}/src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/src/css/blog-post.css" rel="stylesheet">

</head>

<body>

    @include('client.section.header')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Post Title</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 1, 2019 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
         @yield('content')
       
        <hr>

        <!-- Comments Form -->
         @include('client.section.komentar') 

      </div>

      @include('client.section.sidebar')

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

   @include('client.section.footer')   

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('public')}}/src/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('public')}}/src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

