<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/assets/css/jquery.multiselect.css')?>">
  <script type="text/javascript" src="<?php echo base_url('/public/assets/js/jquery.multiselect.js')?>"></script> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="jquery-ui-multiselect-widget-master/src/jquery.multiselect.js" type="text/javascript"></script> -->
<link rel="stylesheet" href="jquery-ui-multiselect-widget-master/jquery.multiselect.css" />


    <title>Health And Safety</title>

</head>
<body >
<div style="color: red;"><?= service('validation')->listErrors() ?></div>


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
                <li><a class="dropdown-item" href="/availability")>Fill Availability Form</a></li>
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

  <!-- Main Section -->

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col-12 col-md-8 col-lg-6 col-xl-5" >
        <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: white;" >
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Health and Safety Issue Form</h3>
            <form action="/healthsafety/save" method="POST">
                <!-- <div class="form-outline mb-1">
                    <label class="form-label" for="yes-no" style="font-weight: bold;">Do You Have any Health/Safety Issue</label>
                    <select class="form-select" aria-label="Default select example" for="yes-no">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>

                    </select>
                </div> -->
                <?php
                    if (isset($msg)):
                ?>
                <div style="color: green;"><?= esc($msg) ?></div>
                <?php else:?>
                <?php endif?>

</br>
                <div class="form-outline mb-1 d-flex justify-content-center">
                    <label class="form-label" for="health-issue" style="font-weight: bold;">What Kind of Health/Safety Issue</label>
                    <select class="form-select" aria-label="Default select example" for="health-issue" id="health-issue" name="health-issue" required>
                        <option selected></option>
                        <option value="Broken Leg">Broken Leg</option>
                        <option value="Broken Arm">Broken Arm</option>
                        <option value="Asthma">Asthma</option>
                        <option value="Eyesight Issues">Eyesight Issues</option>
                        <option value="Hearing Problems">Hearing Problems</option>
                        <option value="Body Pains">Body Pains</option>
                        <option value="Other">Other</option>
                        <!-- <option><textarea id="other" name="other" rows="1" cols="20" placeholder="Other"></textarea></option> -->
                    </select>
                </div>
</br> </br>
                <div class="form-outline mb-1 d-flex justify-content-center">
                    <label class="form-label" for="task-not" style="font-weight: bold;">Which Tasks Can You Not Perform?</label>
                    <select class="form-select" aria-label="Default select example" for="task-not" id="task-not" name="task-not" required>
                        <option selected></option>
                        <!-- <option value="cash-register">Cash Register</option>
                        <option value="bag-groceries">Bag Groceries</option>
                        <option value="unload-trucks">Unload Trucks</option>
                        <option value="stock-shelves">Stock Shelves</option>
                        <option value="customer-service">Customer Service</option>
                        <option value="sales-associate">Sales Associate</option>
                        <option value="janitorial">Janitorial</option> -->
                        <?php if(!empty($tasks)):?>

                        <?php foreach($tasks as $task): ?>

                        <option value="<?=$task->task_name?>"><?= $task->task_name?></option>

                        <?php endforeach;?>

                        <?php else:?>
                        <h3>Sorry! No Tasks Found</h3>
                        <?php endif;?>


                    </select>
                </div>
</br>


            
            <a href="emp_dashboard"><button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button></a>

            <hr class="my-4">
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>




    </section>


    <!--    Bootstrap JS and Jquery -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--  -->
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>