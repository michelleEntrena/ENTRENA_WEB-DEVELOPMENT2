<?php require_once "includes/header.php" ?>
<h1 class="text-center">Registration of IT Conference</h1>

<form method="GET" action="success.php"> 

<div class="form-group">
    <label for="exampleInputFirstname">firstname</label>
    <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="FnameHelp"name="firstname">
</div>
<div class="form-group">
    <label for="exampleInputLastname">lastname</label>
    <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="LnameHelp"name="lastname">
</div>

<div class="form-group">
  <label for="date">Date</label>
  <input type="text" id="datepicker" placeholder= "Enter Your Birthday" name="date"><br>
</div>

  <label for="Specialty">Specialty:</label>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="Check1">
    <label class="form-check-label" for="exampleCheck1"> DATABASE ADMIN</label>
    </div>
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> SOFTWARE DEVELOPER</label>
    </div>
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> WEB ADMINISTRATOR</label>
    </div>
    <div class="form-group form-check">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  <div class="form-group">
    <label for="exampleInputContactNumber">Contact Number</label>
    <input type="ContactNumber" class="form-control" id="exampleInputContactNumber">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" style="height: 50px; width:2000px">Submit</button></label>
</form>

<?php require_once "includes/footer.php" ?>
