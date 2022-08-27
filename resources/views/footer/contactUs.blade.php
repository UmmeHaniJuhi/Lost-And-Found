<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>    

        
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
            <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            
        
    </head>


    <body>
    @include('navBar.nav', ['data' => ''])
          <div class="container1">
            <form action="{{ route('createContactUs') }}" id="form" method="POST">              
              @csrf
              <h3>Contact Us</h3>
              <input type="text" name="email" id="email"  placeholder="Your Email" required>
              <textarea input type="text" name="message" id="message" rows="4" placeholder="Your Name" required></textarea>
              <input type="submit" id="button" value="Send Email" >
            </form>
            
            
          </div>

          <!--Webside email: lostandfound984@gmail.com   password:lost1and2found3 -->

        

          {{-- <script>const btn = document.getElementById('button');

            document.getElementById('form')
            .addEventListener('submit', function(event) {
              event.preventDefault();

              btn.value = 'Sending...';

              const serviceID = 'default_service';
              const templateID = 'template_er4jx2h';

              emailjs.sendForm(serviceID, templateID, this)
                .then(() => {
                  btn.value = 'Send Email';
                  alert('Sent!');
                }, (err) => {
                  btn.value = 'Send Email';
                  alert(JSON.stringify(err));
                });
            });
            </script>  --}}

  <!--  <footer class="bg-dark footer mt-lg-5">
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

            

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>      


</body>


</html>