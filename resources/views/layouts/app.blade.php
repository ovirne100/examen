<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modelo sena</title>

    <!-- Enlaces a los archivos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<head>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tu estilo personalizado -->
  <style>

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
      background-color: black;
      border-radius: 50%;
    }

    .carousel-control-next,
    .carousel-control-prev {
      background-color: rgba(0, 128, 0, 0.3);
      border-radius: 10px;
    }
  .carousel-indicators [data-bs-target] {
      background-color: red !important;
      object-fit:cover;
      margin:80px 0 0 0;
    }
  </style>


</head>

</head>
<body>

     <!-- Navbar -->
     @include('includes.navbar')
    <div class="container mt-4">
     @yield('content')
    </div>
    <!-- Carrusel -->
    @include('includes.carrusel')
    <!-- Footer -->
     @include('includes.footer')


    <!-- Enlaces a los archivos JavaScript de Bootstrap (opcional, para funcionalidades adicionales) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>
