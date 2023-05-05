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
    <title>Pomodoro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;900&family=Montserrat:wght@100;400;900&family=Nunito:wght@200;500;900&display=swap" rel="stylesheet">
  </head>
  
  
  <body class="box container-fluid col-sm-12">
        <script src="node_modules/bootstrap/dist/js/booststrap.js"></script>
        <div class="row">
          {{-- Nav bar --}}
          <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
              <h4 class="text-white">Tomato Timer</h4>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  </ul>
                    <form class="d-flex">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a href="modal" type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="bi bi-book"></i> Log</a>
                            </li>
                            <li class="nav-item">
                              <a href="modal" type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"><i class="bi bi-heptagon"></i> Settings</a>
                            </li>
                      </ul>
                    </form>
                </div>
            </div>
          </nav>
          {{-- End of NavBar --}}

          {{-- Container of Pomodoro --}}
                        <div class="container-fluid" style="height: 100vh">
                          <div class="row" style="">
                            <div class="">
                              <nav>
                                <ul>
                                  <li><a href="#" class="text-light" onclick="Pomodoro()">Pomodoro</a></li>
                                  <li><a href="#" class="text-light" onclick="Shortbreak()">Shortbreak</a></li>
                                  <li><a href="#" class="text-light" onclick="Longbreak()">Longbreak</a></li>
                                </ul>
                              </nav>
                            </div>
  
                            <div class="col-sm-12 responsive-txt py-5 text-lg">
                              <p class="text-center" style="">00:00</p>
                              <img src="image/play.svg" class="card-img-top" style="width: 7rem;" alt="...">
                            </div>
                          </div>
                        </div>

            {{-- Container of Instruction --}}
          <div class="container-fluid bg-white py-5">
            <div class="row">
              <h2>KEY BOARD SHORTCUTS</h2>

              {{-- Carousel --}}
                  <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4" class="active" aria-current="true"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5" class="active" aria-current="true"></button>
                    </div>

                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="info-section row">
                                  <div class="card" id="card" style="width: 20rem;">
                                      <h5>SPACE BAR</h5>
                                      <img src="image/space.svg" class="card-img-top" style="width: 16.6rem;" alt="...">
                                        <div class="card-body">
                                          <p class="card-text text-center">SPACE Start or Stop the timer.</p>
                                        </div>
                                  </div>
                                </div>
                              </div>

                              <div class="carousel-item">
                                  <div class="info-section row" >
                                    <div class="card" id="card1" style="width: 20rem;">
                                        <h5>ALT + P</h5>
                                      <img src="image/alt.svg" class="card-img-top" style="width: 9rem;" alt="...">
                                      <img src="image/p.svg" class="card-img-top" style="width: 9rem;" alt="...">
                                        <div class="card-body">
                                          <p class="card-text text-center">Pomodoro</p>
                                        </div>
                                    </div>
                                  </div>
                              </div>

                              <div class="carousel-item">
                                  <div class="info-section row" >
                                    <div class="card" id="card2" style="width: 20rem;">
                                      <h5>ALT + S</h5>
                                      <img src="image/alt.svg" class="card-img-top" style="width: 9rem;" alt="...">
                                      <img src="image/s.svg" class="card-img-top" style="width: 9rem;" alt="...">
                                        <div class="card-body">
                                          <p class="card-text text-center">Short Break</p>
                                        </div>
                                    </div>
                                  </div>
                              </div>

                              <div class="carousel-item">
                                  <div class="info-section row" >
                                    <div class="card" id="card3" style="width: 20rem;">
                                      <h5>ALT + L</h5>
                                      <img src="image/alt.svg" class="card-img-top" style="width: 9rem;" alt="...">
                                      <img src="image/l.svg" class="card-img-top" style="width: 9rem;" alt="...">
                                        <div class="card-body">
                                          <p class="card-text text-center">Long Break</p>
                                        </div>
                                    </div>
                                  </div>
                              </div>

                              <div class="carousel-item">
                                  <div class="info-section row" >
                                    <div class="card" id="card4" style="width: 20rem;">
                                      <h5>ALT + R</h5>
                                      <img src="image/alt.svg" class="card-img-top" style="width: 9rem;" alt="...">
                                      <img src="image/r.svg" class="card-img-top" style="width: 9rem;" alt="...">
                                        <div class="card-body">
                                          <p class="card-text text-center">Reset</p>
                                        </div>
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
            {{-- End of Row --}}

              <div class="info-section row" >
                <div class="image1 col-sm-8 col-md-6 col-lg-5">
                    <img class="img-responsive"src="image/notification.png" alt="">
                </div>
                <div class="notification col-sm-8 col-md-5 col-lg-5">
                    <h3>Notification</h3>
                    <p>You can change the audio tone and volume via Settings Desktop Notifications are currently supported in Chrome, Firefox and Safari.</p>
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

            {{-- FAQs --}} 
          
                      <div class="px-5 py-5">
                        <h3>FAQs</h3>
                        <h5>Frequently Asked Questions</h5>
                        <div class="row">
                          <div class="accordion col-sm-12 col-md-12">
                            <li>
                              <input type="radio" name="accordion" id="first">
                              <label for="first">Q. What is Pomodoro Technique?</label>
                              <div class="content">
                                <p>A. The time management technique created by Francesco Cirillo
                                for a more productive way to work and study. For more information, click here.</p>
                              </div>
                            </li>

                            <li>
                              <input type="radio" name="accordion" id="second">
                              <label for="second">Q. Can you tell me the story without having to visit the website?</label>
                              <div class="content">
                                  <p>A. Well, it comprises of the following basic steps;<br>
                                - Decide on the task at hand<br>
                                - Set the Pomodoro (timer) to 25 minutes<br>
                                - Work on the task until the timer expires; Record with an X<br>
                                - Take a Short Break (5 minutes)<br>
                                - Every four "pomodoros", take a Long Break (10 minutes).</p>
                              </div>
                            </li>

                            <li>
                              <input type="radio" name="accordion" id="third">
                              <label for="third">Q. What is TomatoTimer?</label>
                              <div class="content">
                                <p>It's an easy to use, flexible Pomodoro Technique timer.
                                  It was inspired by Tomatoi.st and it uses jQuery and HTML5
                                  features like Desktop Notifications, Audio API and Local
                                  Storage instead of relying on Adobe Flash and other such technologies.</p>
                              </div>
                            </li>
{{-- changes --}}
                            <li>
                              <input type="radio" name="accordion" id="fourth">
                              <label for="fourth">Q. Why use TomatoTimer?</label>
                              <div class="content">
                                <p>A. Here's why:<br>
                                    - Clean and Crisp interface with a Mobile friendly layout.<br>
                                    - Ability to Pause or Reset the timer intervals.<br>
                                    - Audio notifications at the end of a timer period.<br>
                                    - Desktop notifications. (Only supported in Google Chrome).<br>
                                    - Keyboard shortcuts.<br>
                                    - Ability to change the alert sound + volume via Settings.<br>
                                    - Custom Timer Intervals.<br>
                                    - A history of your activity. (Coming soon.)</p>
                              </div>
                            </li>
                          </div>
                        </div>
                      </div>


        {{-- Log modal --}}
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Time Log</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="activity">
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Pomodoro Goal Tracker:</label>
                      <br>
                      <input class="btn" type="reset" value="Clear Pomodoro's Done Today">
                    </div>
                    <div class="mb-3">
                      <label for="message-text" class="col-form-label">Message:</label>
                      <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    <input class="btn" type="reset" value="Clear Timer Log">
                  </form>
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
          document.getElementById("card").style.backgroundColor = "#EA5C5C"; /* change background color */
          document.getElementById("card").style.color = "#ffffff";
          document.getElementById("card1").style.backgroundColor = "#EA5C5C"; /* change background color */
          document.getElementById("card1").style.color = "#ffffff";
          document.getElementById("card2").style.backgroundColor = "#EA5C5C"; /* change background color */
          document.getElementById("card2").style.color = "#ffffff";
          document.getElementById("card3").style.backgroundColor = "#EA5C5C"; /* change background color */
          document.getElementById("card3").style.color = "#ffffff";
          document.getElementById("card4").style.backgroundColor = "#EA5C5C"; /* change background color */
          document.getElementById("card4").style.color = "#ffffff";
        }
        function Longbreak() {
          document.body.style.backgroundColor = "#244659"; /* change background color */
          document.getElementById("card").style.backgroundColor = "#244659"; /* change background color */
          document.getElementById("card").style.color = "#ffffff";
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