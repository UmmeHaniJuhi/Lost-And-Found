<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <a class="navbar-brand ml-5" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>

            <div class="d-flex navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Urgent</a>
                </li>
                &nbsp;
                &nbsp;&nbsp;
                &nbsp;
                <button class="btn btn-primary">Log In</button>
                &nbsp;
                &nbsp;
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center my-5 display-5">Find Your Lost Item</h1>
        <form action="{{ route('search') }}" class="" method="POST">
            @csrf
            <div class="d-flex justify-content-around row-1">
                <div class="w-50 d-flex justify-content-center">
                    <select name="catagory" class="form-select mt-5" aria-label="Default select example" required>
                        <option value="">Catagory</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Pets">Pets & Animals</option>
                        <option value="Documents">Documents</option>
                    </select>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <select name="location" class="form-select mt-5" aria-label="Default select example" required>
                        <option value="">Location</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                    </select>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="d-flex mt-5 w-50">
                    <input name="search_text" type="search" class="form-control" placeholder="Enter text to seach"
                        required>
                    <button type="submit" class="ml-4 btn btn-primary">Search</button>
                </div>

            </div>
            <br>

        </form>
        <h3 class="text-center my-5">Create a Post</h3>

        <div class="d-flex justify-content-center w-100">
            <div class="d-flex justify-content-around w-50 row-2">
                {{-- <button class="btn btn-success px-5 py-3">I've Lost Something </button> --}}
                {{-- <button class="btn btn-success px-5 py-3">I've Found Something</button> --}}
                <a class="btn btn-success px-5 py-3" href="/create_post" role="button">I've Lost Something</a>
                
                <a class="btn btn-success px-5 py-3" href="/create_post" role="button">I've Found Something</a>

            </div>
        </div>

        <div class="home-page-counter mb-5">
            <h2><strong id="count"></strong></h2>
          <h4>People found their lost items</h4>
        </div>
    </div>
    <br>
    <footer class="bg-dark footer mt-lg-5">
        <hr>
        <div class="container-fluid text-center text-white">
            <p>Copyright&#9400;
                <script>
                    document.write(new Date().getFullYear())
                </script> | Lost & Found | All Rights Reserved
            </p>
            <div class="footer-links d-flex justify-content-around container mt-5">
                <a href="/about">About Us</a>
                <a href="/toc">Terms & Conditions</a>
                <a href="/privacy-policy">Privacy Policy</a>
                <a href="/contact">Contact Us</a>
            </div>
        </div>
    </footer>



    <script>
        function animatePostsCounter(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        animatePostsCounter(document.getElementById("count"), 0, {{json_encode(50)}}, 1200);
    </script>


</body>

</html>
