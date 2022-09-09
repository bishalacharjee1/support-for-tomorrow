<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">



</head>

<body style="background-color: #070020;">

  <section class="vh-100" style="background-color: #070020;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class=" m-5" style="border-radius: 10px;  background-image:url(image/bg2.png);">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <!-- <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1"> -->
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-2 order-lg-1">

                  <img src="image/reg2.png" class="img-fluid" alt="Sample image">


                </div>

                
                <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-2">
                <!-- <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2"> -->
                  <form action="insert.php" method='post'>
                    <div class="mb-3">
                      <h2 style="font-weight:bolder; color: #aaff00;">Register Here</h2>
                    </div>
                    <div class="mb-3" style=" color: #e4ffae;">
                      Your Name:
                      <input type="text" class="form-control" name="r_username">

                    </div>
                    <div class="mb-3" style=" color: #e4ffae;">
                      Your Password:
                      <input type="password" class="form-control" name="r_pass">
                    </div>

                    <div class="mb-3" style=" color: #e4ffae;">
                      Confirm Password:
                      <input type="password" class="form-control" name="r_c_pass">
                    </div>

                    <div class="mb-3" style=" color: #e4ffae;">
                      Enter Your Email:
                      <input type="text" class="form-control" name="r_email">
                    </div>

                    <div class="mb-3" style=" color: #e4ffae;">
                      Enter Your Number:
                      <input type="text" class="form-control" name="r_phone">
                    </div>

                    <button type="submit" class="btn btn-success" name="register">Register</button> <br>


                    <span style=" color: #aaff00;">Already Registered!!!</span> <a href="login.php">Login Here</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>