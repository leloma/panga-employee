<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>

</head>
<body>
    <!-- <h1>Register</h1>
    <form action="/register/save" method="POST">
        <label for="name" >Name</label>
        <input type="text" name="name" value="">

        <label for="email" >Email</label>
        <input type="email" name="email" value="">

        <label for="password" >Password</label>
        <input type="password" name="password">

        <label for="confpassword" >Confirm Password</label>
        <input type="password" name="confpassword">

        
        <button type="submit">Register</button>

    </form> -->

    <section class="min-vh-100" style="background-color: #326872;">

      <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white " style="margin:0 !important; ">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse p-0 m-0" id="navbarExample01" style="background-color: white; margin:0 !important; " >
        
        <!-- Dropdown -->
        <div class="dropdown" class="justify-content-end m-3">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/employee_schedule">View Schedule</a></li>
                <li><a class="dropdown-item" href="/availability")>Fill Availability Form</a></li>
                <li><a class="dropdown-item" href="/task_change">Task Change Application</a></li>
                <li><a class="dropdown-item" href="/shift_change">Task Change Application</a></li>


            </ul>
        </div>
        <!-- Dropdown -->

      
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"  style=" font-size:large;">
          <li class="nav-item justify-content-center: Active">
            <a class="nav-link" href="#" class="text-center" style="color: black; font-size:xx-large; padding-left: 15px"><img src="<?=base_url()?>public/assets/images/logo.png" alt="">PangaEmployee</a>
          </li>
        </ul>


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0"  >
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: black; font-size:x-large; padding-right: 10px"><?php echo session()->get('emp_name') ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login/logout" style="color: red; font-size:x-large; padding-right: 10px">Log out</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li> -->
        </ul>

      </div>
    </div>
  </nav>

  <!-- Navbar -->



  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-3 text-center">

          
            <h3 class="mb-3">Shift Change Application</h3>
            <form action="/shiftchange/save" method="POST">

            <?php
                    if (isset($msg)):
                ?>
                <div style="color: green;"><?= esc($msg) ?></div>
                <?php else:?>
                <?php endif?>

            <div class="form-outline mb-1">
              <label class="form-label" for="startdate">Start Date</label>
              <input type="text" name="startdate" id="startdate" class="form-control form-control-lg" />

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="enddate">End Date</label>
              <input type="text" name="enddate" id="enddate" class="form-control form-control-lg" />

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="day">Day</label>
              <input type="day" name="day" id="day" class="form-control form-control-lg" />

            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="typePasswordX-2">Preffered Shift</label>
              <select class="form-select" aria-label="Default select example" for="preferred_shift" id="preferred_shift" name="preferred_shift" required>
              <option selected></option>
                        <option value="0500-1000">0500-1000</option>
                        <option value="0500-1100">0500-1100</option>
                        <option value="0600-1200">0600-1200</option>
                        <option value="1100-1700">1100-1700</option>
                        <option value="1200-1800">1200-1800</option>
                        <option value="1700-2200">1700-2200</option>
                        <option value="1700-2000">1700-2000</option>
                        <option value="1800-2200">1800-2200</option>
                        </select>

            </div>
            <div class="form-outline mb-1">
              <label class="form-label" for="reason">Reason</label>
              <input type="text" name="reason" id="reason" class="form-control form-control-lg" />

            </div>






            <br/>
            <a href="/shiftchange/save"><button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button></a>

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