<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LearnLabs | {{ $title }}</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="bg-white">
      {{-- Navbar --}}
      @include('partials.navbar')

      @yield('content')

      {{-- <section class="container my-2">
        <p class="text-green fw-medium text-center">OUR SUPER BENEFIT</p>
        <h2 class="pb-2 text-center">Learn Faster & Better</h2>
        <div class="row g- py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
              <img src="ic_globe.png" alt="" class="img-fluid" width="60">
            </div>
            <h3 class="fs-5 mt-3">Diversity</h3>
            <p>Learn from anyone around the world and get a new skills</p>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
            </div>
            <h3 class="fs-2">Featured title</h3>
            <p>Learn from anyone around the world and get a new skills</p>
            <a href="#" class="icon-link">
              Call to action
              <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
            </div>
            <h3 class="fs-2">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
              Call to action
              <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
              <img src="ic_globe.png" alt="" class="img-fluid" width="60">
            </div>
            <h3 class="fs-5 mt-3">Diversity</h3>
            <p>Learn from anyone around the world and get a new skills</p>
          </div>
        </div>
      </section> --}}

      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 LearnLabs, Inc</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link px-2 text-body-secondary">About</a></li>
            <li class="nav-item"><a href="events.html" class="nav-link px-2 text-body-secondary">Events</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
          </ul>
        </footer>
      </div>

    <!-- MDB -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>