<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>support for tomorrow</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/016c779cdd.js" crossorigin="anonymous"></script>

  <style>
    .companyLogo{

      display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 1rem;
    }

    
@media screen and (min-width: 320px) and (max-width: 480px){
  .companyLogo{

display: grid;
grid-template-columns: 1fr;
column-gap: 1rem;
}
}
  
  </style>
</head>

<body style="background-color:#070020;">

  <main>
    <!-- navbar start -->

    <nav style="background-color:#2E2E2E;" class="navbar navbar-expand-lg ">
      <div class="container-fluid ">
        <a class="navbar-brand" style="font-weight:bolder; color: white;" href="#">
          <h2>Supp<span style="color: red;">o</span>rt F<span style="color:#03C03C;">o</span>r T<span style="color:yellow;">o</span>m<span style="color:rgb(226, 43, 119);">o</span>rr<span style="color:rgb(125, 125, 255);">o</span>w</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" style="font-weight:bold; color: #D0F0C0;" href="#home">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="font-weight:bold; color: #D0F0C0;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#about">About Us</a></li>
                <li><a class="dropdown-item" href="#blogs">Our Blogs</a></li>
                <li><a class="dropdown-item" href="#companyLogo">Our Campaigns</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#logo">NGO & Sponsors</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" style="font-weight:bold; color: #D0F0C0;" href="#contact">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" style="font-weight:bold; color: #D0F0C0;" href="#contact2">Our Booth</a>
            </li>

            <?php
            if (isset($_SESSION['user'])) {
              echo '<li class="nav-item">
                      <a class="nav-link ms-0 ms-lg-5 d-flex align-item-center" style="font-weight:bolder; color: #aaff00;" href="index.php">
                      '
                . $_SESSION['user']['username'] . '
                      <i class="fa-solid fa-circle-user ms-2" style="font-size: 30px;"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="font-weight:bolder; color: #aaff00;" href="logout.php">Logout</a>
                    </li>';
            } else {
              echo '<li class="nav-item">
                      <a class="nav-link" style="font-weight:bolder; color: #aaff00;" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="font-weight:bolder; color: #aaff00;" href="register.php">Register</a>
                    </li>';
            }
            ?>


          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button style="color:#ffffff;" class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbar end -->


    <!-- slide start -->

    <section id="home">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/S111.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-weight: bold;color: #aaff00;">WELCOME</h5>
              <p>Support for tomorrow</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/S222.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-weight: bold;color: #aaff00;">WELCOME</h5>
              <p>Support for tomorrow</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/S333.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-weight: bold;color: #aaff00;">WELCOME</h5>
              <p>Support for tomorrow</p>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </section>
    <!-- slide end -->


    <!-- About us start -->

    <section id="about" class="text-center m-3 rounded-3 p-5" style=" background-image: url(image/bg2.png) ">

      <h1 style="font-weight: bold;color: #aaff00;">About Us</h1>
      <div class="half-width">
        <div>
          <img src="image/reg.png" alt="">
        </div>

        <div>
          <p class="text-justify" style="color: white;">In this system proposed here aims at providing an online platform for donating medicines or unused medicines to needy people. Users can register themselves on this system by submitting their necessary details. Once registered the users can donate the medicines by providing accurate medicine details to NGOs. The system has the authority to block the users if they raise a request to donate improper or expired medicines. The system will maintain a record of donated & available medicines. The users can raise a request to donate or avail the medicines.</p> <br>
          <p class="text-justify" style="color: white;">To meet the increasing demand for improvements in the health care facilities & services we can utilize the power of internet technology & its wide network, by which people can help each other with just one click from their phone. The Medicine Donation system proposed here aims at providing an online platform for donating medicines or unused medicines to needy people. By this project the medicine wastage will be become less and more needy people will get those medicine for free.</p> <br>

          <p style="color: white;">To meet the increasing demand for improvements in the health care facilities & services we can utilize the power of internet technology & its wide network, by which people can help each other with just one click from their phone. The Medicine Donation system proposed here aims at providing an online platform for donating medicines or unused medicines to needy people. By this project the medicine wastage will be become less and more needy people will get those medicine for free.</p> <br> <br>


          <h3 style="color: #9dff00;">Thank You For Visiting Us</h3>
        </div>
      </div>

    </section>
    <!-- About us end-->



    <!---Blogs--->

    <section id="blogs" class=" m-3  rounded-3 p-3" style="background-color: ; background-image: url(image/); ">
      <div class="justify-content-center">

        <h1 class="text-center p-5 " style="color: #aaff00; font-weight: bold;">Our Blogs....</h1>
        <p class="text-center pb-5 " style="color:white;">Stay in our touch to know and explore more about our works.
          <br> We rely on your generosity to continue our important Work. <br> <span style="color: #aaff00; font-weight: bold;">| Donate Now & Show Your Support |</span>
        </p>

        <div>
          <!-- blogs video -->

          <div class="container-fluid  my-2">
            <div class="row ">

              <div class="d-lg-flex justify-content-between align-items-center">

                <!-- left section -->
                <div class="col-12 col-lg-6 col-sm-12">

                  <div class="bg-secondary d-sm-flex justify-content-center align-items-center rounded-3 shadow-lg m-3">

                    <img class="p-2 d-block d-md-none w-100" src="image/blogs.png" alt="">

                    <img class="p-2 img-fluid d-none d-md-block" src="image/blogs.png" alt="">

                    <div class="p-2">
                      <h3 style="color: #aaff00;" class=" fw-semibold">Comming soon...</h3>
                      <p style="color: white;">Some quick example text to build on the card title and make up the
                        bulk of the card.</p>
                      <a style="background-color: #aaff00; font-weight: bold;" class="btn" href="#">Watch Blog</a>
                    </div>
                  </div>



                  <div class="bg-secondary d-sm-flex justify-content-center align-items-center rounded-3 shadow-lg m-3">

                    <img class="p-2 img-fluid d-block d-md-none w-100" src="image/blogs.png" alt="">

                    <img class="p-2 img-fluid d-none d-md-block" src="image/blogs.png" alt="">


                    <div class="p-2">
                      <h3 style="color: #aaff00;" class=" fw-semibold">Comming soon...</h3>
                      <p style="color: white;">Some quick example text to build on the card title and make up the
                        bulk of the card.</p>
                      <a style="background-color: #aaff00; font-weight: bold;" class="btn" href="#">Watch Blog</a>
                    </div>
                  </div>

                  <div class="bg-secondary d-sm-flex justify-content-center align-items-center rounded-3 shadow-lg m-3">

                    <img class="p-2 img-fluid d-block d-md-none w-100" src="image/blogs.png" alt="">

                    <img class="p-2 img-fluid d-none d-md-block" src="image/blogs.png" alt="">

                    <div class="p-2">
                      <h3 style="color: #aaff00;" class=" fw-semibold">Comming soon...</h3>
                      <p style="color: white;">Some quick example text to build on the card title and make up the
                        bulk of the card.</p>
                      <a style="background-color: #aaff00; font-weight: bold;" class="btn" href="#">Watch Blog</a>
                    </div>
                  </div>

                </div>

                <!-- right section -->
                <div class="col-12 col-lg-6 col-sm-32">

                  <div class="bg-secondary d-sm-flex justify-content-center align-items-center rounded-3 shadow-lg m-3">

                    <img class="p-2 img-fluid d-block d-md-none w-100" src="image/blogs.png" alt="">

                    <img class="p-2 img-fluid d-none d-md-block" src="image/blogs.png" alt="">

                    <div class="p-2">
                      <h3 style="color: #aaff00;" class=" fw-semibold">Comming soon...</h3>
                      <p style="color: white;">Some quick example text to build on the card title and make up the
                        bulk of the card.</p>
                      <a style="background-color: #aaff00; font-weight: bold;" class="btn" href="#">Watch Blog</a>
                    </div>
                  </div>

                  <div class="bg-secondary d-sm-flex justify-content-center align-items-center rounded-3 shadow-lg m-3">

                    <img class="p-2 img-fluid d-block d-md-none w-100" src="image/blogs.png" alt="">

                    <img class="p-2 img-fluid d-none d-md-block" src="image/blogs.png" alt="">

                    <div class="p-3">
                      <h3 style="color: #aaff00;" class=" fw-semibold">Comming soon...</h3>
                      <p style="color: white;">Some quick example text to build on the card title and make up the
                        bulk of the card.</p>
                      <a style="background-color:  #aaff00; font-weight: bold;" class="btn" href="#">Watch Blog</a>
                    </div>
                  </div>

                  <div class="bg-secondary d-sm-flex justify-content-center align-items-center rounded-3 shadow-lg m-3">

                    <img class="p-2 img-fluid d-block d-md-none w-100" src="image/blogs.png" alt="">

                    <img class="p-2 img-fluid d-none d-md-block" src="image/blogs.png" alt="">

                    <div class="p-2">
                      <h3 style="color: #aaff00;" class=" fw-semibold">Comming soon...</h3>
                      <p style="color: white;">Some quick example text to build on the card title and make up the
                        bulk of the card.</p>
                      <a style="background-color: #aaff00; font-weight: bold;" class="btn" href="#">Watch Blog</a>
                    </div>
                  </div>

                </div>

              </div>

            </div>
            <div class="text-center">
              <a class="btn btn-success m-3" href="#">See More Blogs.....</a>
            </div>
          </div>
          <!-- list end -->
    </section>
    <!-- Blogs end -->



    <!-- company logo portion start -->
    <section id="logo" class="container-fluid   d-lg-block rounded-3  " style="background-color: rgb(26, 20, 32); background-image: url(image/bg3.png);">



      <h1 class="text-center  fw-bold mt-5 mb-4 p-3" style="color: #aaff00; font-weight: bold;">Trusted Companies & NGOs </h1>
      <p style="color: white;" class="text-center text-justify p-3 "> We appreciate your help, your love, your care, <br> and your concern for me during the time. It has been harder than we can <br> say with experiencing the ups and down together, but you being here <br> has been a tremendous encouragement. Thank you for supporting us.” </p>

      <h6 class="text-center p-3 " style="color: white;">| From<span style="color: #aaff00; font-weight: bold;"> Support For Tomorrow</span> Team |</h6>




      <div id="companyLogo" class="companyLogo m-5 p-3">
        <img class="m-3 px-2" src="image/com/C-5.png" alt="">
        <img class="m-3 px-2" src="image/com/c-2.png" alt="">
        <img class="m-3 px-2" src="image/com/C-6.png" alt="">
        <img class="m-3 px-2" src="image/com/C-4.png" alt="">
        <img class="m-3 px-2" src="image/com/c-1.png" alt="">
        <img class="m-3 px-2" src="image/com/c-3.png" alt="">
        <img class="m-3 px-2" src="image/com/C-5.png" alt="">
        <img class="m-3 px-2" src="image/com/c-2.png" alt="">
        <img class="m-3 px-2" src="image/com/C-6.png" alt="">
        <img class="m-3 px-2" src="image/com/C-4.png" alt="">
        <img class="m-3 px-2" src="image/com/c-1.png" alt="">
        <img class="m-3 px-2" src="image/com/c-3.png" alt="">

      </div>

    </section>

    <!-- company logo portion end -->



    <!--Section: Contact -->
    <section id="contact" class="m-3 p-5 rounded-3" style=" background-image: url(image/bg2.png);">

      <!--Section heading-->
      <h1 class="h1-responsive font-weight-bold text-center my-4 pb-3" style="font-weight: bold;color: #aaff00;">Let's Talk</h1>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5" style="color: white; ">Do you have any questions? Please do not hesitate to contact us directly. <br> Our team will come back to you within
        a matter of hours to help you.</p>

      <div class="row">

        <!--Grid column-->
        <div class="col-md-12 mb-4">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-6 mb-4">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="" style="color: #aaff00;">Your name</label>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6 mb-4">
                <div class="md-form mb-0">
                  <input type="text" id="email" name="email" class="form-control">
                  <label for="email" class="" style="color: #aaff00;">Your email</label>
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <div class="col-md-12 mb-4">
                <div class="md-form mb-0">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="" style="color: #aaff00;">Subject</label>
                </div>
              </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-12 mb-4 ">

                <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea"></textarea>
                  <label for="message" style="color: #aaff00;">Your message</label>
                </div>

              </div>
            </div>
            <!--Grid row-->

          </form>

          <div class="text-center text-md-left">
            <a class="btn btn-success pt-2 pb-2 ps-5 pe-5" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
        </div>
        <!--Grid column-->
      </div>

    </section>
    <!--Section: Contact-->



  </main>


  <!-- footer start -->

  <footer id="contact2">
    <div class="w-100 h-100 text-center bg-dark d-flex justify-content-center">
      <div class="">
        <h2 class="mt-5 card-title text-light fs-1">Supp<span style="color: red;">o</span>rt F<span style="color:#03C03C;">o</span>r T<span style="color:yellow;">o</span>m<span style="color:rgb(226, 43, 119);">o</span>rr<span style="color:rgb(125, 125, 255);">o</span>w</h2>
        <p class="text-center  p-5 mt-2 card-text text-light text-justify">Booth-1: Name Pharma, Area name, Sylhet. <br>Booth-2: Name Pharma, Area name, Sylhet. <br>Booth-3: Name Pharma,Area name, Sylhet. <br>Booth-4: Name Pharma, Area name, Sylhet. <br>Booth-5: Name Pharma,Area name, Sylhet. <br>Booth-6: Name Pharma, Area name, Sylhet. <br> <br> Republic of Bangladesh


          <!-- social site icon -->

        <div class="fa-icons m-3">
          <a class="m-2 text-white-50 bg-dark w-100 h-100" target="_blank" href="">
            <i id="logo" class="fa-brands fa-facebook fa-2x"></i></a>
          <a class="m-2 text-white-50 bg-dark" target="_blank" href="">
            <i id="logo" class="fa-brands fa-instagram fa-2x"></i></a>
          <a class="m-2 text-white-50 bg-dark" target="_blank" href="">
            <i id="logo" class="fa-brands fa-linkedin fa-2x"></i></a>
          <a class="m-2 text-white-50 bg-dark" target="_blank" href="">
            <i id="logo" class="fa-brands fa-twitter fa-2x"></i></a>
        </div>

        <div style="color: #aaff00;" class="mb-5">
          Privacy Policy | Terms of use <br>
          ©support for tomorrow team
        </div>

        </p>

      </div>

    </div>
  </footer>
  <!-- footer  end -->




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>