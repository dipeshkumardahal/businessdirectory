<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodhpuch Itahari</title>
</head>
<body>
    <?php
    $websiteName = "Business Listing";
    $subtitle = "Business Directory of Itahari";
    $timenow = 18; 
    $business = array (
        array("Gorkha Department","Main Chowlk - Dharan Line",1800000),
        array("Sunrise","Somewhere",130000),
        array("Mart","okay the location",20000),
        array("Resort Rover","halgoda",15000000)
      );
          
    ?>

<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
      <span class="fs-4"><?php echo $websiteName ?></span>
    </a>
  </header>

  <main>
    <h1><?php echo $subtitle ?></h1>
    <div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
         <button type="button" class="btn btn-outline-primary">search</button>
    </div>
    <p class="fs-5 col-md-8">
        <?php
        if($timenow<12){
            echo("Hllo good morning Have agreat day");
        }
        elseif($timenow>=12 & $timenow <=17){
            echo("Good Aftornoon hope you having great day");
        }
        elseif($timenow>=18 & $timenow <=24){
            echo("Good Evening Folks , Enjoy the Sunset");
        }
        else{
            echo(" good night Have a sweet dreams");
        }
        ?>
    </p>
    <?php

    ?>
    
    
    <table class="table">
        <thead class="table-dark"></thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
            <th scope="col">Phone</th>
            <th scope="col">-</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
            for ($row = 0; $row < 4; $row++) {
             echo "<tr>";
             for ($col = 0; $col < 3; $col++) {
            echo "<td>".$business[$row][$col]."</td>";
             }
             echo "</tr>";
          } 
          ?>
            
            </tr>
        </tbody>
    </table>
    <hr/>
    <br />
    <h1>Add New Directory</h1>
    <br />
    <form method="post" action = "adddir.php">
    <div class="mb-5">
        <input class="form-control form-control-lg" type="text" placeholder="Business Name" name="name" id="name" required>
        <br />
        <input class="form-control" type="text" placeholder="Location" name="location" id="location"  required>
        <br />
        <input class="form-control form-control-sm" type="text" placeholder="Phone Number" name="phone" id="phone"  required>
        <br />
    <input type = "submit" value = "Add">
    </div>
   
        </form>
  </main>
  <footer class="pt-5 my-5 text-muted border-top">
    Created by dipeshkumardahal &middot; &copy; 2022
  </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>

