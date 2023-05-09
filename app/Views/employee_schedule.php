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
                <li><a class="dropdown-item" href="/availability">Fill Availability Form</a></li>
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


  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-start  h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 justify-content-start">
        <div class="card shadow-2-strong justify-content-start" style="border-radius: 1rem; width: 70rem;">
          <div class="card-body p-5 text-center">

          <h1 class="mb-5">Schedule</h1>
            <hr class="my-4">


<table class="table table-striped table-bordered">
  <thead>
    <tr>
        
      <th scope="col">Name</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Day</th>
      <th scope="col">Task</th>
      <th scope="col">Shift</th>


    </tr>
  </thead>
  <tbody>
    <tr>
    <?php if(!empty($empschedule)):?>

    <?php foreach($empschedule as $schedule): 
        echo "<tr>";
        echo "<td>" . $schedule->emp_name . "</td><td>". $schedule->start_date . "</td><td>". $schedule->end_date ."</td><td>". $schedule->day ."</td><td>". $schedule->task . "</td><td>". $schedule->shift_time ."</td>";
        echo "</tr>"
        
        
        
    ?>

    



    <?php endforeach;?>

    <?php else:?>
    <h1>Sorry! No Schedule Found</h1>
    <?php endif;?>

    </tr>


    <!-- <tr> -->

  </tbody>
</table>

</div>
</div>
</div>
</div>
</div>

</body>
</html>
