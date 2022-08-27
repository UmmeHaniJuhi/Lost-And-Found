<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    @include('navBar.nav', ['data' => 'create_post'])



    <div class="container">
        <main>

            <div class="row g-3 my-4">
                <div class="col-md-6 col-lg-6">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Lost Item:</span>
                    </h4>
                    <div id="carouselExampleControls" class="carousel slide w-75" data-bs-ride="carousel">
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
                            <span class="carousel-control-prev-icon bg-primary rounded-circle" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-primary rounded-circle" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6 order-md-last">
                    <h4 class="mb-3">Item Details:</h4>
                    <form action="{{ route('edit_post') }}" class="needs-validation" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <ul class="list-group mb-3">
                            <li class="list-group-item lh-sm">
                                <label>Choose file to upload(Max size 2MB)</label>
                                <br>
                                <br>
                                <div>
                                    <label for="file1">Front Image</label>
                                    <input type="file" id="file1" name="img1" placeholder="asd">
                                </div>
                                <div><label for="file2">Back Image</label>
                                    <input type="file" id="file2" name="img2">
                                </div>
                                <div><label for="file3">Extra Image</label>
                                    <input type="file" id="file3" name="img3">
                                </div>
                            </li>

                        </ul>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="itemName" class="form-label">Item Name:</label>
                                <input type="text" name="name" class="form-control" id="ItemName" placeholder=""
                                    value="{{ $post->title }}" required="">
                                <div class="invalid-feedback">
                                    Invalid-feedback
                                </div>
                            </div>

                            <input type="hidden" value="{{ $post->id }}" name="id">

                            <div class="col-12">
                                <label for="state" class="form-label">Catagory</label>
                                <select name="category" class="form-select" id="state" required="">
                                    <option selected value="{{ $post->category }}">{{ $post->category }}</option>
                                    <option>Electronics</option>
                                    <option>Documents</option>
                                    <option>Pet and Animals</option>


                                </select>
                                <div class="invalid-feedback">
                                    Invalid feedback
                                </div>
                            </div>

                            <div class="col-12">


                                <label for="state" class="form-label">Division</label>
                                <select name="division" class="form-select" id="state" required="">
                                    <option selected value="{{ $post->location }}">{{ $post->location }}</option>
                                    <option>Dhaka</option>
                                    <option>Chittagong</option>
                                    <option>Khulna</option>


                                </select>
                                <div class="invalid-feedback">
                                    Invalid feedback
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <!-- Date input -->
                                    <label class="control-label" for="date">Date Lost/Found</label>
                                    <input name="date" class="form-control" id="date" name="date"
                                        value="{{ $post->date }}" placeholder="MM/DD/YYY" type="text"
                                        required />
                                </div>
                            </div>

                            <label for="floatingTextarea2" class="form-label">Discription:</label>
                            <div class="col-12 form-floating">
                                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px" required> {{ $post->description }} </textarea>


                            </div>
                            <div class="col-12">
                                <label for="PhoneNumber" class="form-label">Phone Number:</label>
                                <input type="text" class="form-control" id="PhoneNumber" name="phone_number"
                                    value="{{ $post->phone }}" required>
                                <div class="invalid-feedback">
                                    Invalid-feedback
                                </div>
                            </div>





                            <hr class="my-4">

                            <div class="form-check">
                                <input name="show_email" type="checkbox" class="form-check-input" id="same-address">
                                <label class="form-check-label" for="same-address">Show your email</label>
                            </div>



                            {{-- <div class="form-check">
                                <input name="urgent" type="checkbox" class="form-check-input" id="urgent">
                                <label class="form-check-label" for="urgent">Urgent Post</label>
                            </div> --}}

                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary">
                                Edit Post
                            </button>
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#submitModal">
                                Create/Save Post
                            </button> --}}


                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.

                Azwad, [17.08.22 00:34]
                2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    {{-- !-- jQuery --> --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <script>
        $(document).ready(function() {
            var date_input = $('input[name="date"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            var options = {
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
        })
    </script>

</body>

</html>
