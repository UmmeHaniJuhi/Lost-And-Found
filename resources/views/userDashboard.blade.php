  <!--<h1>User Dashboard</h1> -->

  <!DOCTYPE html>
<html>
<head>
<!--Boostrap 5 CDN linl --> <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--Custom file link -->
<link rel="stylesheet" href="{{ asset('css/userDashboard_only.css') }}">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</head>




<body>
  
  @include('navBar.nav', ['data' => 'dashboard'])
 
    <section class="section1">

        <div  class="row ">

           <!--  left_section  navbar-light bg-light -->

       <div class="container col-lg-8   order-2 order-sm-1   order-md-1 ">

           <!--  <nav class="navbar navbar-dark  text-bg-primary navLeft">
                <div class="container-fluid justify-content-center">
                  <span class="navbar-brand mb-0 h1">Regular Post</span>
                </div>
              </nav>  -->
              <div class="navleft"> 
                <p>My Posts</p>
              </div>
              

              

            <div class="left_section">      
              
                


                      <!--  new -->


                      <!-- // -->  
                      @foreach ($leftResults as $item)

                      <a href="/view_posts/{{ $item->id }}" >
                      
                      <div class="card text-white bg-light mb-3 m-4  cardDiv " >
                       
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="./images/{{$item->id}}_1.jpg" class="img-fluid rounded-start limg"  alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              

                              <div class="row">
                                <div class="col-7 col-sm-4">
                                  <h5 class="card-title lh-base">{{$item->title}}</h5>
                                  <h6 class="text-opacity-70">Location:{{$item->location}}</h6>
                                  
                                </div>
                                <div class="col-5  col-sm-8">
                                  <p class="card-text d-flex justify-content-end"><small class="text-muted">{{$item->date}}</small></p>
                                </div>
                              </div>                            
                             
                              <p class="card-text   lh-sm  text-wrap">Description: {{$item->description}} </p>

                              


                                <!-- -->
                               <div class="container ">
                                <div class="btn-group d-flex justify-content-start" role="group" aria-label="Basic example">
                                  <a class="main-btn" href="/found/{{$item->id}}">Found</a>
                                  <a class="main-btn2" href="/delete/{{$item->id}}">delete</a>
                                  <a class=" main-btn2" href="/edit/{{$item->id}}">Edit</a>

                                  </div>
                                </div>
                              <!-- -->


                               
                            </div>
                          </div>
                        </div>                        
                      </div>
                      

                     
                      </a>



                      @endforeach




                    <!--//  -->  



                     


                        
                        <!-- -->
                        <!-- -->

                        <div class="right_section">

                          <!-- -->
                          <!-- -->
                          <div class="navleft_2"> 
                            <p>Found Posts</p>
                          </div>
  
                          @foreach ($foundResults as $item)
  
                          <a href="/view_posts/{{ $item->id }}" >
                          
                            
                            <div class="card  text-white bg-success mb-3 m-4  cardDivfound " >
                         
                              <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="./images/{{$item->id}}_1.jpg" class="img-fluid rounded-start limg"  alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body ">
                                    
      
                                    <div class="row ">
                                      <div class="col-7 col-sm-4">
                                        <h5 class="card-title lh-base">{{$item->title}}</h5>
                                        <h6 class="text-opacity-70">Location:{{$item->location}}</h6>
                                        
                                      </div>
                                      <div class="col-5  col-sm-8">
                                        <p class="card-text d-flex justify-content-end"><small class="text-muted">{{$item->date}}</small></p>
                                      </div>
                                    </div>                            
                                   
                                    <p class="card-text   lh-sm  text-wrap">Description: {{$item->description}} </p>
                                    
      
                                    
      
      
                                     
  
                                    
      
      
                                     
                                  </div>
                                </div>
                              </div>                        
                            </div>
    
                         
                          </a>
    
    
    
                          @endforeach
  
  
  
  
  
  
  
                        </div>


             








                

            </div>



            
        </div>

         <!--  left_section end -->




         











    </section>







    
   
  @extends('footer.footer')


<!--Boostrap 5 CDN linl --> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>