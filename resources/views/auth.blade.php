<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In | Sign Up</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body class="bg-white">

    <section class="container my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-smooth p-4">
                    <h3 class="mb-3 text-center text-primary">SanCamp</h3>
                    <div class="row g-0 align-items-center justify-content-between">
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('assets/images/ill_login_new.png') }}" alt="" class="card-img-left img-fluid" width="400">
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card-body pb-0">
                                <a href="" class="btn btn-primary px-4 btn-rounded shadow-smooth"><i class="fa-brands fa-google me-2 text-white"></i> Login or Sign Up with Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- MDB -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>