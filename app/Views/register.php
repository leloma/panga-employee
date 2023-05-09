<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>

</head>
<body>
    <!-- <h1>Register</h1>
    <form action="/register/save" method="POST">
        <label for="name" >Name</label>
        <input type="text" name="name" value="<?= set_value('name')?>">

        <label for="email" >Email</label>
        <input type="email" name="email" value="<?= set_value('email')?>">

        <label for="password" >Password</label>
        <input type="password" name="password">

        <label for="confpassword" >Confirm Password</label>
        <input type="password" name="confpassword">

        
        <button type="submit">Register</button>

    </form> -->

    <section class="min-vh-100" style="background-color: #326872;">


  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-3 text-center">

          
            <h3 class="mb-3">Registration</h3>
            <form action="/register/save" method="POST">

            <div class="form-outline mb-1">
              <label class="form-label" for="typeEmailX-2">Name</label>
              <input type="text" name="name" id="typeEmailX-2" class="form-control form-control-lg" />

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="typeEmailX-2">Email</label>
              <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" />

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="typePasswordX-2">Password</label>
              <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="typePasswordX-2">Confirm Password</label>
              <input type="password" name="confirm-password" id="typePasswordX-2" class="form-control form-control-lg" />

            </div>

            <!-- List of Errors -->

            <div style="color: red;"><?= service('validation')->listErrors() ?></div>


            <br/>
            <a href="/login"><button class="btn btn-primary btn-lg btn-block" type="submit">Register</button></a>
            <p>Already have an account? <a href="/login">Login</a></p>

            <hr class="my-4">
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!--    Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>