<?php
$title = 'success';
require_once "includes/header.php";
?>
 
  <h1 class="text-center">You Have Been Registered</h1>


  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_GET ['firstname'].' '. $_GET ['lastname'];?>
    </h5>
    <p class="card-text">
        date of birth: <?php echo $_GET['date'];?>
    
     </p>
     <p class="card-text">
     Specialty: <?php echo $_GET['check1'];?>
     </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<?php require_once "includes/footer.php";?>