<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.css" />
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.js"></script>
    <link rel="stylesheet" href="css">
    <title>Hello, world!</title>
  </head>
  <body class="box container-fluid col-sm-12">
    <script src="node_modules/bootstrap/dist/js/booststrap.js"></script>
    <div class="row">
        {{-- Nav bar --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Tomato Timer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logModal" data-bs-whatever="@fat"><i class="bi bi-book"></i> Log</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-heptagon"></i> Settings</a>
                        </li>
                    </ul>
                </form>
            </div>
            </div>
        </nav>
        {{-- End of NavBar --}}

<<<<<<< HEAD
        <div style="margin-top:20%" class="position-absolute start-50 translate-middle">
            <p style="font-size:200px; color:white">00:00</p>
=======
        <div class="container-fluid" style="padding-top: 10%">
          <div class="row"style="">
          
            <div>
              <nav>
                <ul>
                  <li><a href="#" onclick="Pomodoro()">Pomodoro</a></li>
                  <li><a href="#" onclick="Shortbreak()">Shortbreak</a></li>
                  <li><a href="#" onclick="Longbreak()">Longbreak</a></li>
                </ul>
              </nav>
            </div>
 
            <div class="col-sm-12 responsive-txt">
              <p class="text-center" style="font-size:100px; color:white"">00:00</p>
  
            </div>


          </div>
>>>>>>> 321ff44157a4ee8fdb9b31c30b47dc3f7ffa1747
        </div>




    </div>

  <div class="container-fluid bg-white">
    <div class="row">
      {{-- Carousel --}}
      <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="info-section row" >
              <div class="image1 col-sm-10 col-md-8">
                  <img class="img-responsive" src="image/notification.png" alt="">
              </div>
              <div class="notification col-sm-10 col-md-4">
                  <h3>Notification</h3>
                  <p>You can change the audio tone and volume via Settings
                      Desktop Notifications are currently supported in Chrome, Firefox and Safari</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="info-section row" >
              <div class="image1 col-sm-10 col-md-8">
                  <img class="img-responsive"src="image/notification.png" alt="">
              </div>
              <div class="notification col-sm-10 col-md-4">
                  <h3>Notification</h3>
                  <p>You can change the audio tone and volume via Settings
                      Desktop Notifications are currently supported in Chrome, Firefox and Safari</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="info-section row" >
              <div class="image1 col-sm-10 col-md-8">
                  <img class="img-responsive"src="image/notification.png" alt="">
              </div>
              <div class="notification col-sm-10 col-md-4">
                  <h3>Notification</h3>
                  <p>You can change the audio tone and volume via Settings
                      Desktop Notifications are currently supported in Chrome, Firefox and Safari</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        {{-- end of Carousel --}}
    </div>



        <div class="info-section row" >
          <div class="image1 col-sm-10 col-md-7 col-lg-6">
              <img class="img-responsive"src="image/notification.png" alt="">
          </div>
          <div class="notification col-sm-10 col-md-5 col-lg-6">
              <h3>Notification</h3>
              <p>You can change the audio tone and volume via Settings
                  Desktop Notifications are currently supported in Chrome, Firefox and Safari</p>
          </div>
        </div>


      <div class="info-section1 row">
          <div class="settings col-sm-10 col-md-5 col-lg-6">
              <h3>Settings</h3>
              <p>You can set custom times, audio tone and volume via Settings.</p>
          </div>
          <div class="image2 col-sm-10 col-md-7 col-lg-6">
              <img class="img-responsive"src="image/settings.png" alt="">
          </div>
      </div>

    
    <div class="px-5 py-5" >
        <h3>FAQs</h3>
        <p>Frequenly ask Questions</p>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Q. What is Pomodoro Technique?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> A. The time management technique created by Francesco Cirillo for a more productive way to work and study. For more information, click here.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>

{{-- Log modal --}}
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
  {{-- End log modal --}}



    <script>
      AOS.init({
  duration: 1200,
  })
    </script>
      <script>
        function Pomodoro() {
          document.body.style.backgroundColor = "#70A1BD"; /* change background color */
        }
        function Shortbreak() {
          document.body.style.backgroundColor = "#EA5C5C"; /* change background color */
        }
        function Longbreak() {
          document.body.style.backgroundColor = "#81A5FD"; /* change background color */
        }
      </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>