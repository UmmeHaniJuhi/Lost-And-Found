<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    @include('navBar.nav', ['data' => ''])
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <form action="{{ route('register') }}" class="card-body p-5 text-center" method="POST">
                            @csrf
                            <h3 class="mb-5">Register</h3>

                            <div class="form-outline mb-4">
                                <input type="text" id="name-1" placeholder="Enter you name" name="name"
                                    class="form-control form-control-lg" required/>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="email" id="typeEmailX-2" placeholder="Email" name="email"
                                    class="form-control form-control-lg" required/>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="typePasswordX-2" placeholder="Password" name="password"
                                    class="form-control form-control-lg" required/>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="typePasswordX-3" placeholder="Re-enter password" name="password_confirmation"
                                    class="form-control form-control-lg" required/>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="contact-number-1" placeholder="Contact Number" name="phone"
                                    class="form-control form-control-lg" required/>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                            <a class="btn btn-danger btn-lg btn-block" href="{{route('loadLogin')}}">Cancel</a>

                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
