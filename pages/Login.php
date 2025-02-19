<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <title>Talent sync | login</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="../img/logo only.png" type="image/x-icon">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!--fontawesom-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--main css-->
  <link rel="stylesheet" href="../css/maincss.css" />



</head>

<body>
  <style>
    body {
      background-color: #F1F0F0;
      overflow-x: hidden;
    }

    .fs-0 {
      font-size: 4rem;
    }

    .fs-7 {
      font-size: 0.8rem;
    }

    .active-quicklink:hover {
      color: blue !important;
    }
  </style>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-white fixed-top d-flex justify-content-cente">
    <div class="container ">
      <!--logo-->
      <a href="../index.php">
     
    <img src="../img/logo.png" width="60px" height="50px" alt="Talentsync" />
    <span style="font-weight: bold; color: black; font-size: 36px;">Talent</span>
    <span style="font-weight: bold;color: red; font-size: 36px;">Sync</span>
    <a class="navbar-brand" href="#">Job seeker </a>
</a>

    </div>
    </div>
    </div>
  </nav> <!--main content-->
  <!-- login  -->
  <div class="container d-flex flex-column flex-lg-row justify-content-evenly mt-5 pt-5" style="padding-top: 10rem;">
    <!-- heading -->
    <div class="text-center text-lg-center mt-lg-5 pt-lg-5">
      <img src="../img/logo.png" width="700px" height="300px" alt="talent sync" />
      <p class="w-75 mx-auto ma-lg-0 fs-4">
        Unleash your potential, embrace the extraordinary! test
      </p>
    </div>
    <!-- form  -->
    <div style="max-width: 28rem; width: 100%">
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == 1) {
          echo "
            <div class='alert alert-danger py-2' role='alert'>
            Please Fill All Fields to Register!
            </div> ";
        }
        if ($_GET['error'] == 2) {
          echo "
          <div class='alert alert-danger py-2' role='alert'>
          Your Email or Password Incorrect!
          </div> ";
        }
        if ($_GET['error'] == 3) {
          echo "
          <div class='alert alert-danger py-2' role='alert'>
          First You Need to Login Your Account to Preview your Profile.
          </div> ";
        }
        if ($_GET['error'] == 4) {
          echo "
          <div class='alert alert-danger py-2' role='alert'>
          user not found create an account.
          </div> ";
        }
        if ($_GET['error'] == 5) {
          echo "
          <div class='alert alert-danger py-2' role='alert'>
          Please Fill All Fields to login!
          </div> ";
        }
      }

      if (isset($_GET['success'])) {
        if ($_GET['success'] == 1) {
          echo "
          <div class='alert alert-success py-2' role='alert'>
          You have successfully registered! Please Log In
          </div> ";
        }
      }
      if (isset($_GET['message'])) {
        echo "
          <div class='alert alert-danger py-2' role='alert'>
          " . $_GET['message'] . "
          </div> ";
      }
      ?>
      <div class="bg-white shadow rounded p-3 input-group-lg">
        <form action="./server/userLoginProcess.php" method="post">
          <h1 class="text-center">Log in</h1>
          <div class="form-floating my-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"
              style="background-color: #F4F4F4">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating my-3">
            <input type="password" name="Password" class="form-control" id="floatingPassword" placeholder="Password"
              style="background-color: #F4F4F4">
            <label for="floatingPassword">Password</label>
          </div>
          <button type="submit" class="btn btn-primary my-3 w-100">
            login
          </button>

        </form>
        <a href="#" class="text-decoration-none text-center">
          <p>Forgotten password?</p>
        </a>
        <!-- create from modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <div class="">
                  <h1 class="modal-title fs-2" id="exampleModalLabel">
                    sign up
                  </h1>
                  <span class="text-muted fs-7">Join with us to discover somehting</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="./server/userRegistrationProcess.php" method="POST">
                  <div class="row">
                    <div class="col">
                      <input type="text" name="FirstName" id="" class="form-control" placeholder="first name" />
                    </div>
                    <div class="col">
                      <input type="text" name="LastName" id="" class="form-control" placeholder="last name" />
                    </div>
                  </div>

                  <input type="text" name="UserName" class="form-control my-3" placeholder="Username" id="" />
                  <input type="email" name="Email" class="form-control my-3" placeholder="Email" id="" />

                  <div class="row">
                    <div class="col">

                      <div class="">
                        <span class="text-muted fs-7">
                          Gender
                        </span>
                        <div class="d-flex justify-content-evenly mt-2">
                          <div class="">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Male
                            </label>
                            <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault1"
                              value="Male" checked />
                          </div>
                          <div class="">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Female
                            </label>
                            <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault2"
                              value="Female" />
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col">
                      <span class="text-muted fs-7">
                        Date Of Birth
                      </span>
                      <input type="date" name="dateofbirth" class="form-control" id="" />
                    </div>
                  </div>

                  <input type="tel" name="Phone" class="form-control my-3" placeholder="Phone No" id="" />

                  <input type="password" name="Password" class="form-control my-3" placeholder="password" id="" />

                  <input type="text" name="Address" class="form-control my-3" placeholder="Address" id="" />
                  <input type="text" name="Education" class="form-control my-3" placeholder="Education" id="" />


                  <textarea class="form-control my-3" id="description" name="Description"
                    placeholder="Bio eg:-tech enthusiast" oninput="countWords()" maxlength="200"></textarea>

                  <textarea class="form-control my-3" id="description" name="about" placeholder="About me"
                    oninput="countWords()" maxlength="200"></textarea>



                  <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary my-3" data-bs-dismiss="modal">
                      Sing up
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <hr />
        <div class="text-center my-4">
          <button class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create new Account
          </button>
        </div>
      </div>
      <div class="text-center my-5 pb-5">
        <p>
          Stay focused, stay motivated, and conquer your dream job.
        </p>
      </div>
    </div>
  </div>

  <!-- footer  -->
  <footer class="bg-white p-4 text-muted fixed-bottom">
    <div class="container">

      <!-- action -->
      <hr />
      <div class="d-flex flex-column align-items-center justify-content-cente mt-3">
        <!--quick link-->
        <p class="mb-0 fs-7 ">
          <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Privacy </a> |
          <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a> |
          <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Advertising </a> |
          <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses </a> |
          <a href="" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
        </p>
        <!--copyrights-->
        <div class="d-flex">
          <a class=" " href="../index.php"><img src="../img/logo.png" width="58px" height="16px" alt="Talent sync"
              class="mb-2" /></a>
          <p class="fs-7">&copy; 2023</p>
        </div>
      </div>
    </div>
  </footer>
  <!--bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <!--main js-->
  <script src="mainjs.js"></script>
  <script>
    const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
    const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
  </script>
</body>

</html>