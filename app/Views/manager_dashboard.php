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

    <title>Manager Dashboard</title>

</head>
<body >

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
                <li><a class="dropdown-item" href="#">New Schedule</a></li>
                <li><a class="dropdown-item" href="/all_schedule">View Past Schedules</a></li>
                <li><a class="dropdown-item" href="/healthsafety/gethealthdetails" target="_blank">View Employee Health and Safety Details</a></li>
                <li><a class="dropdown-item" href="/dashboard/employee_availability_details" target="_blank">View Employee Availability Details</a></li>
                <li><a class="dropdown-item" href="#">View Task Change Requests</a></li>
                <li><a class="dropdown-item" href="#">View Task Change Requests</a></li>


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
            <a class="nav-link" href="#" style="color: black; font-size:x-large; padding-right: 10px"><?php echo session()->get('mng_name') ?></a>
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
    <div class="row d-flex justify-content-start  h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 justify-content-start">
        <div class="card shadow-2-strong justify-content-start" style="border-radius: 1rem; width: 70rem;">
          <div class="card-body p-5 text-center">

            <h1 class="mb-5">New Schedule</h1>
            <hr class="my-4">

          <!-- Success Message -->

            <?php
                    if (isset($success)):
            ?>
                        <div style="color: green;"><?= esc($success) ?></div>

            <?php else:?> 
            <?php endif?>

            <!-- End of Success Message -->


            <form action="/dashboard/save" method="POST">

            <div class="row align-items-center form-outline mb-1" style="font-weight: bold;">
                    <div class="col" >
                    <label for="start_date">From</label>
                    <input type="text" name="start_date" required>
                    </div>
                    <div class="col">
                    <label for="end_date">To</label>
                    <input type="text" name="end_date" required>
                    </div>
            </div>
            <hr class="my-4">

            <?php if(!empty($employees)):?>

            <?php foreach($employees as $employee): ?>

              <input type="number" name="emp_id[]" value="<?=$employee->emp_id?>" hidden >
                      <input type="text" name="emp_name[]" value="<?=$employee->emp_name?>" hidden >

            <div class="row align-items-center form-outline mb-1" style="font-weight: bold;">
                    <div class="col"  >
                    Employee
                    </div>
                    <div class="col" >
                    Task
                    </div>
                    <div class="col">
                    Monday
                    </div>
                    <div class="col">
                    Tuesday
                    </div>
                    <div class="col">
                    Wednesday
                    </div>
                    <div class="col">
                    Thursday
                    </div>
                    <div class="col">
                    Friday
                    </div>
                    <div class="col">
                    Saturday
                    </div>
                    <div class="col">
                    Sunday
                    </div>

                </div>
                </br>

                <!-- For availability hidden form -->
                <!-- <form action="/dashboard/employee_availability_details">

                </form> -->

                <!-- End...For availability hidden form -->


                <div class="row align-items-center form-outline mb-1" >
                    <div class="col" >

                      <a href="" hidden><?= $employee->emp_id?></a> <a href="/dashboard/employee_availability_details" target="_blank" style="color: #326872;" data-value="<?= $employee->emp_name?>"><?= $employee->emp_name?></a>
                    </div>



                    <div class="col" >
                    <select class="form-select" aria-label="Default select example" name="task[]" id="task" >

                        <option selected></option>
                        <?php if(!empty($tasks)):?>

                        <?php foreach($tasks as $task): ?>

                        <option value="<?=$task->task_name?>"><?= $task->task_name?></option>

                        <?php endforeach;?>

                        <?php else:?>
                        <h3>Sorry! No Tasks Found</h3>
                        <?php endif;?>


                    </select>
                    </div>





                    <div class="col">
                    <input type="text" name="Monday[]" value="Monday" hidden>

                    <select class="form-select" aria-label="Default select example" name="mon-shift[]" id="mon-shift"  >

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

                    <div class="col">
                    <input type="text" name="Tuesday[]" value="Tuesday" hidden>

                    <select class="form-select" aria-label="Default select example" name="tue-shift[]" id="tue-shift" >

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

                    <div class="col">
                    <input type="text" name="Wednesday[]" value="Wednesday" hidden>

                    <select class="form-select" aria-label="Default select example" name="wed-shift[]" id="wed-shift" >

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

                    <div class="col">
                    <input type="text" name="Thursday[]" value="Thursday" hidden>

                    <select class="form-select" aria-label="Default select example" name="thur-shift[]" id="thur-shift" >

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

                    <div class="col">
                    <input type="text" name="Friday[]" value="Friday" hidden>

                    <select class="form-select" aria-label="Default select example" name="fri-shift[]" id="fri-shift" >

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

                    <div class="col">
                    <input type="text" name="Saturday[]" value="Saturday" hidden>

                    <select class="form-select" aria-label="Default select example" name="sat-shift[]" id="sat-shift" >

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

                    <div class="col">
                    <input type="text" name="Sunday[]" value="Sunday" hidden>

                    <select class="form-select" aria-label="Default select example" name="sun-shift[]" id="sun-shift" >

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

                    <hr class="my-4">

                    <!-- <hr class="my-4">
                    <hr class="my-4"> -->

                </div>

                <?php endforeach;?>

                <?php else:?>
                <h3>Sorry! No Records Found</h3>
                <?php endif;?>


                <a href="/dashboard/save"><button class="btn  btn-lg btn-block" style="background-color: #326872; color:white;" type="submit">Post</button></a>






            </form>

            <?php if(!empty($employees)):?>
            <?php foreach($employees as $employee): ?>

                <!-- For availability hidden form -->
                <form action="/dashboard/employee_availability_details">
                      <input type="number" name="emp_id" value="<?=$employee->emp_id?>" hidden>
                      <input type="text" name="emp_name" value="<?=$employee->emp_name?>" hidden>

                </form>

                <!-- End...For availability hidden form -->


              <?php endforeach;?>

              <?php else:?>
              <h3>Sorry! No Records Found</h3>
              <?php endif;?>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>


