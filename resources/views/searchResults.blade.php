<!DOCTYPE html>
<html>


<head>
    <!--Boostrap 5 CDN linl -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Custom file link -->
    <!--<link rel="stylesheet" href="styleee.css"> -->
    <link rel="stylesheet" href="{{ asset('css/userDashboard_SerchResult.css') }}">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<!--<style>
  .left-image {
      object-fit: cover;
      width: 230px;
      height: 230px !important;
  }


  .right-image {
      object-fit: cover;
      width: 350px;
      height: 350px !important;
      align-self: center;
      object-fit: scale-down;
  }
</style> -->
<body>


    @include('navBar.nav', ['data' => ''])


 

  




    <section class="section1">
        <div class="row">


            <div class="container col-lg-8   order-2 order-sm-1   order-md-1">




                <div class="navleft">
                   <p> <span class="text-danger"> {{count($leftResults)}}</span><span> Search Results</span></p>
                </div>






                <div class="left_section ">








                    <!--  left side-->




                    @foreach ($leftResults as $item)

                     <a href="/view_posts/{{ $item->id }}" >

                        <div class="card text-white bg-light mb-3 m-4 cardDiv  "
                            style="max-width: 100%; margin: 12px;  ">
                            <div class="row g-0">
                                <div class="col-md-4 p-3 ">
                                    <img src="./images/{{$item->id}}_1.jpg"
                                        class="img-fluid rounded-start left-image border" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7 col-sm-4">
                                                <h5 class="card-title lh-base">{{$item->title}}</h5>
                                                <h6 class="text-opacity-70">Location: {{$item->location}}</h6>
                                            </div>
                                            <div class="col-5  col-sm-8">
                                                <p class="card-text d-flex justify-content-end"><small
                                                        class="text-muted">{{$item->date}}</small></p>
                                            </div>
                                        </div>
                                        <p class="card-text   lh-sm  text-wrap"> {{$item->description}}</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                     </a>


                        @endforeach


                </div>




            </div>

            <!--  left_section end -->




            <!--  right_section   -->






            <div class="container col-lg-4   order-1 order-sm-2   order-md-2  ">




                <div class="navright">
                    <p>Urgent Post</p>
                </div>






                <div class="right_section ">




                    @foreach ($rightResults as $item)

                    <a href="/view_posts/{{ $item->id }}" >

                    <div class="card text-white bg-light m-3 cardDiv2  p-3 " style="width: 90%; margin: 15px; ">
                        <img src="./images/{{$item->id}}_1.jpg"
                            class="card-img-top right-image border " alt="...">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7 col-sm-4">
                                    <h5 class="card-title lh-base h5_2 ">{{$item->title}}</h5>
                                    <h6 class="text-opacity-70">Location: {{$item->location}}</h6>


                                </div>
                                <div class="col-5  col-sm-8">
                                    <p class="card-text d-flex justify-content-end"><small
                                            class="text-muted">{{$item->date}}</small></p>
                                </div>
                            </div>
                            <p class="card-text lh-sm">{{$item->description}}</p>


                        </div>
                    </div>


                    </a>

                    @endforeach






                </div>
            </div>


            <!--  right_section  end -->








        </div>


    </section>
    @extends('footer.footer')




</body>


</html>