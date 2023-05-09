<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!--    Bootstrap JS and Jquery -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--  -->

    <title>Dashboard</title>

</head>
<body >
    <!-- Error message CSS -->
        <style>
            .err { background: #ffe6ee; border: 1px solid #b1395f; }
            .emsg { color: #c12020; font-weight: bold; }
        </style>
    <!-- Error message CSS -->


<section class="min-vh-100" style="background-color: #326872; ">
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
                <li><a class="dropdown-item" href="/dashboard")>Health/Safety Form</a></li>
                <li><a class="dropdown-item" href="/task_change">Task Change Application</a></li>
                <li><a class="dropdown-item" href="/shift_change">Shift Change Application</a></li>

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
            <a class="nav-link" href="/availability" style="color: black; font-size:x-large; padding-right: 10px"><?php echo session()->get('emp_name') ?></a>
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

  <!-- Main Section -->

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col-12 col-md-8 col-lg-6 col-xl-5" >
        <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: white;" >
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Employee Availability Form</h3>
            <hr class="my-4">

            <!-- My Error Messages -->
            <?php
                    if (isset($error1)):
            ?>
                        <div style="color: red;"><?= esc($error1) ?></div>

            <?php else:?> 
            <?php endif?>

            <?php
                    if (isset($error2)):
            ?>
                        <div style="color: red;"><?= esc($error2) ?></div>

            <?php else:?> 
            <?php endif?>

            <?php
                    if (isset($success)):
            ?>
                        <div style="color: green;"><?= esc($success) ?></div>

            <?php else:?> 
            <?php endif?>


            <!--    End of Error Messages          -->

            <form action="/availability/save" method="POST"> <!--onsubmit="return check()" > -->

            <!--  Date Picker             -->

            <!-- <div class="row align-items-center form-outline mb-1" style="font-weight: bold;">
            <label for="from-date">From</label>
              <div class="input-group data" id="datepicker">
                <input type="text" class="form-control">
                <span class="input-group-append">
                  <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                  </span>
                </span>

              </div>
            </div> -->

            <!--  Date Picker             -->

            <div>
            <div class="row align-items-center form-outline mb-1" style="font-weight: bold;">
                    <div class="col " >
                    <label for="start-date">From</label>
                    <input type="text" name="start-date" value="" required>
                    </div>
            </div>

            </br>

            <div class="row align-items-center form-outline mb-1" style="font-weight: bold;">
                    <div class="col" >
                    <label for="end-date">To</label>
                    <input type="text" name="end-date" value="" required>
                    </div>
            </div>
            </div>
            </br>
            <hr class="my-4">


            <div class="row align-items-center form-outline mb-1" style="font-weight: bold;">
                    <div class="col" >
                    Day
                    </div>
                    <div class="col">
                    Time In
                    </div>
                    <div class="col">
                    Time Out
                    </div>
                </div>
                </br>

                <!-- Monday -->

                <div class="row align-items-center form-outline mb-1" >
                    <div class="col" >
                    Monday
                    </div>
                    <div class="col">
                    <input type="text" name="Monday" value="Monday" hidden>
                    <select class="form-select" aria-label="Default select example" name="time-in1" id="time-in1" >

                    <option selected value="NotAvailable">Not Available</option>
                        <option value="0500">5:00</option>
                        <option value="0600">6:00</option>
                        <option value="0700">7:00</option>
                        <option value="0800">8:00</option>
                        <option value="0900">9:00</option>
                        <option value="1000">10:00</option>
                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>

                    </select>
                    </div>

                    <div class="col">
                    <select class="form-select" aria-label="Default select example" name="time-out1" id="time-out1">

                    <option selected value="NotAvailable">Not Available</option>
                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>
                        <option value="1700">17:00</option>
                        <option value="1800">18:00</option>
                        <option value="1900">19:00</option>
                        <option value="2000">20:00</option>
                        <option value="2100">21:00</option>
                        <option value="2200">22:00</option>

                    </select>
                    </div>
                </div>
                <div id="shiftmsg" class="emsg"></div> 

                </br>

                <!-- Tuesday -->

                <div class="row align-items-center form-outline mb-1" >
                    <div class="col" >
                    Tuesday
                    </div>
                    <div class="col">
                    <input type="text" name="Tuesday" value="Tuesday" hidden>
                    <select class="form-select" aria-label="Default select example" name="time-in2" id="time-in2" >

                    <option selected value="NotAvailable">Not Available</option>
                        <option value="0500">5:00</option>
                        <option value="0600">6:00</option>
                        <option value="0700">7:00</option>
                        <option value="0800">8:00</option>
                        <option value="0900">9:00</option>
                        <option value="1000">10:00</option>
                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>

                    </select>
                    </div>

                    <div class="col">
                    <select class="form-select" aria-label="Default select example" name="time-out2" id="time-out2" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>
                        <option value="1700">17:00</option>
                        <option value="1800">18:00</option>
                        <option value="1900">19:00</option>
                        <option value="2000">20:00</option>
                        <option value="2100">21:00</option>
                        <option value="2200">22:00</option>

                    </select>
                    </div>
                </div>
                </br>

                <!-- Wednesday -->
                
                <div class="row align-items-center form-outline mb-1" >
                    <div class="col" >
                    Wednesday
                    </div>
                    <div class="col">
                    <input type="text" name="Wednesday" value="Wednesday" hidden>

                    <select class="form-select" aria-label="Default select example" name="time-in3" id="time-in3" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="0500">5:00</option>
                        <option value="0600">6:00</option>
                        <option value="0700">7:00</option>
                        <option value="0800">8:00</option>
                        <option value="0900">9:00</option>
                        <option value="1000">10:00</option>
                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>

                    </select>
                    </div>

                    <div class="col">
                    <select class="form-select" aria-label="Default select example" name="time-out3" id="time-out3" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>
                        <option value="1700">17:00</option>
                        <option value="1800">18:00</option>
                        <option value="1900">19:00</option>
                        <option value="2000">20:00</option>
                        <option value="2100">21:00</option>
                        <option value="2200">22:00</option>

                    </select>
                    </div>
                </div>
                </br>

                <!-- Thursday -->

                <div class="row align-items-center form-outline mb-1" >
                    <div class="col" >
                    Thursday
                    </div>
                    <div class="col">
                    <input type="text" name="Thursday" value="Thursday" hidden>

                    <select class="form-select" aria-label="Default select example" name="time-in4" id="time-in4" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="0500">5:00</option>
                        <option value="0600">6:00</option>
                        <option value="0700">7:00</option>
                        <option value="0800">8:00</option>
                        <option value="0900">9:00</option>
                        <option value="1000">10:00</option>
                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>

                    </select>
                    </div>

                    <div class="col">
                    <select class="form-select" aria-label="Default select example" name="time-out4" id="time-out4" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>
                        <option value="1700">17:00</option>
                        <option value="1800">18:00</option>
                        <option value="1900">19:00</option>
                        <option value="2000">20:00</option>
                        <option value="2100">21:00</option>
                        <option value="2200">22:00</option>

                    </select>
                    </div>
                </div>
                </br>

                <!-- Friday -->

                <div class="row align-items-center form-outline mb-1" >
                    <div class="col" >
                    Friday
                    </div>
                    <div class="col">
                    <input type="text" name="Friday" value="Friday" hidden>

                    <select class="form-select" aria-label="Default select example" name="time-in5" id="time-in5" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="0500">5:00</option>
                        <option value="0600">6:00</option>
                        <option value="0700">7:00</option>
                        <option value="0800">8:00</option>
                        <option value="0900">9:00</option>
                        <option value="1000">10:00</option>
                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>

                    </select>
                    </div>

                    <div class="col">
                    <select class="form-select" aria-label="Default select example" name="time-out5" id="time-out5" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>
                        <option value="1700">17:00</option>
                        <option value="1800">18:00</option>
                        <option value="1900">19:00</option>
                        <option value="2000">20:00</option>
                        <option value="2100">21:00</option>
                        <option value="2200">22:00</option>

                    </select>
                    </div>
                </div>
                </br>

                <!-- Saturday -->

                <div class="row align-items-center form-outline mb-1" >
                    <div class="col" >
                    Saturday
                    </div>
                    <div class="col">
                    <input type="text" name="Saturday" value="Saturday" hidden>

                    <select class="form-select" aria-label="Default select example" name="time-in6" id="time-in6" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="0500">5:00</option>
                        <option value="0600">6:00</option>
                        <option value="0700">7:00</option>
                        <option value="0800">8:00</option>
                        <option value="0900">9:00</option>
                        <option value="1000">10:00</option>
                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>

                    </select>
                    </div>

                    <div class="col">
                    <select class="form-select" aria-label="Default select example" name="time-out6" id="time-out6" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>
                        <option value="1700">17:00</option>
                        <option value="1800">18:00</option>
                        <option value="1900">19:00</option>
                        <option value="2000">20:00</option>
                        <option value="2100">21:00</option>
                        <option value="2200">22:00</option>

                    </select>
                    </div>
                </div>
                </br>


                <!-- Sunday -->

                <div class="row align-items-center form-outline mb-1" >
                    <div class="col" >
                    Sunday
                    </div>
                    <div class="col">
                    <input type="text" name="Sunday" value="Sunday" hidden>

                    <select class="form-select" aria-label="Default select example" name="time-in7" id="time-in7" >

                    <option selected value="NotAvailable">Not Available</option>

                        <option value="0500">5:00</option>
                        <option value="0600">6:00</option>
                        <option value="0700">7:00</option>
                        <option value="0800">8:00</option>
                        <option value="0900">9:00</option>
                        <option value="1000">10:00</option>
                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>

                    </select>
                    </div>

                    <div class="col">
                    <select class="form-select" aria-label="Default select example" name="time-out7" id="time-out7" >

                        <option selected value="NotAvailable">Not Available</option>

                        <option value="1100">11:00</option>
                        <option value="1200">12:00</option>
                        <option value="1300">13:00</option>
                        <option value="1400">14:00</option>
                        <option value="1500">15:00</option>
                        <option value="1600">16:00</option>
                        <option value="1700">17:00</option>
                        <option value="1800">18:00</option>
                        <option value="1900">19:00</option>
                        <option value="2000">20:00</option>
                        <option value="2100">21:00</option>
                        <option value="2200">22:00</option>

                    </select>
                    </div>
                </div>
                </br>

            <div style="color: red;"><?= service('validation')->listErrors() ?></div>




    


            
            <a href="/availability/save"><button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button></a>

            <hr class="my-4">
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>


    </section>



    <!-- (C) FORM CHECK -->
<!-- <script>
function check () {
  // (C1) INIT
  var valid = true, error = "", timeout = "", timein = "";

  timeout = document.getElementById("time-out");
  timein = document.getElementById("time-in");

  var ntimeout = parseInt(timeout);
  var ntimein = parseInt(timein);
  var minhours = 600;

  error = document.getElementById("shiftmsg");

// Shift must be 6 hours or more

  if (ntimeout - ntimein < minhours) {
    valid = false;
    timeout.classList.add("err");
    error.innerHTML = "Shift must be 6 hours or more\r\n";
  } else {
    timeout.classList.remove("err");
    error.innerHTML = "";
  }

  // Time out should not be before time in
  if (ntimeout <= ntimein) {
    valid = false;
    timeout.classList.add("err");
    error.innerHTML = "Time out must be after time in\r\n";
  } else {
    timeout.classList.remove("err");
    error.innerHTML = "";
  }


  if (!timeout.checkValidity()) {
    valid = false;
    timeout.classList.add("err");
    error.innerHTML = "This Field is required\r\n";
  } else {
    timeout.classList.remove("err");
    error.innerHTML = "";
  }

  // (C4) RESULT
  return valid;
}
</script> -->




       <!-- Bootstrap JS 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(function() {
        $('#datepicker').datepicker();
      });

    </script> -->
</body>
</html>