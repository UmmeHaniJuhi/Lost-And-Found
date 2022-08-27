<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

    <!-- Modal -->
    <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="submitModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you want save changes?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <main>

            <div class="row g-3 my-4">
                <div class="col-md-6 col-lg-6">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Lost Item:</span>
                    </h4>
                   
                  
                    

                </div>
                <div class="col-md-6 col-lg-6 order-md-last">
                    <h4 class="mb-3">Item Details:</h4>
                    <form action="{{ route('create_post') }}" class="needs-validation" method="POST" enctype="multipart/form-data" >
                   
                        @csrf
                        <input type="hidden" value="{{$type}}" name="type">
                        <div>
                            <label for="file">Choose file to upload(Max size 2MB)</label> <br>
                            <input type="file" id="file" name="img1" required>
                            <input type="file" id="file" name="img2" required>
                            <input type="file" id="file" name="img3" required>
                          </div>

                        <div class="row g-3">
                            <div class="col-12">
                                <label for="itemName" class="form-label">Item Name:</label>
                                <input type="text" name="name" class="form-control" id="ItemName" placeholder=""
                                    value="" required="">
                                <div class="invalid-feedback">
                                    Invalid-feedback
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="state" class="form-label">Catagory</label>
                                <select name="category" class="form-select" id="state" required="">
                                    <option value="">-Select-</option>
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
                                    <option value="">-Select-</option>
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
                                        placeholder="MM/DD/YYY" type="text" required />
                                </div>
                            </div>


                            {{-- <div class="col-12">
                                <label for="location" class="form-label">Location:</label>
                                <input type="text" class="form-control" id="location" placeholder=""
                                    value="" required="">
                                <div class="invalid-feedback">
                                    Invalid-feedback
                                </div>
                            </div> --}}
                            
                            <label for="floatingTextarea2" class="form-label">Discription:</label>
                            <div class="col-12 form-floating">
                                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>


                            </div>
                            <div class="col-12">
                                <label for="PhoneNumber" class="form-label">Phone Number:</label>
                                <input type="text" class="form-control" id="PhoneNumber" name="phone_number" required>
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
                                Create/Save Post
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
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

@extends('footer.footer')


</body>

</html>


