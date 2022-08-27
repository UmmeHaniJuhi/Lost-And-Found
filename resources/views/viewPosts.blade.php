<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewPosts</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


</head>

<body>
@include('navBar.nav', ['data' => ''])
    <section>
        <div class="col-sm-12 text-center mb-5">
            <h1>{{ $post->title }}</h1>
        </div>
    </section>

    <div class="container ">
        <div class="row mb-5 ">
            <div class="col-lg-6 mb-5 mb-lg-0 px-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/{{ $post->id }}_1.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/{{ $post->id }}_2.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/{{ $post->id }}_3.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0 px-4">
                <h4><b>Catagory : </b>{{ $post->category }}</h4>
                <br>
                <h4><b>Location : </b>{{ $post->location }}</h4>
                <br>
                <h4><b>Contact number : </b>{{ $post->phone }}</h4>
                <br>
                @if ($post->show_email)
                    <h4><b>E-mail : </b>{{ $post->email }}</h4>
                    <br>
                @endif
                <h4><b>Description : </b></h4>
                <p>{{ $post->description }}</p>

            </div>


        </div>
    </div>
    <div class="container">
        <div class="d-grid gap-2 col-4 mx-auto mb-5">
            <a class="btn btn-primary" href="/report_a_post/{{ $post->id }}">Report This Post</a>
        </div>
    </div>

    <!-- <footer class="bg-dark footer mt-lg-5">
          <hr>
          <div class="container-fluid text-center text-white">
               <p>Copyright&#9400;
                    <script>
                         document.write(new Date().getFullYear())
                    </script> | Lost & Found | All Rights Reserved
               </p>
               <div class="footer-links d-flex justify-content-around container mt-5">
                    <a href="">About Us</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Contact Us</a>
               </div>
          </div>
    </footer> -->
  @extends('footer.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>


</html>
