<?php
class userForms{
    public function signup_form(){
        ?>
        <div class = "container d-flex gap-3 justify-content-center align-items-center mt-2">
<form class = "needs-validation" class = "col-log-6 offset-lg-3" method = "POST" action = "<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" novalidate>
  <h1 style = "text-align:center;">Sign Up</h1>
  <div class="form-group p-2" class = "row justify-content-center">
    <label for="firstname">Firstname</label>
    <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname" name="firstname" required>
  <div class= "valid-feedback">Valid</div>
  <div class= "invalid-feedback">Please fill out this field.</div>
</div>
  <div class="form-group p-2 " class = "row justify-content-center">
    <label for="lastname">Lastname</label>
    <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" name = "lastname" required>
    <div class = "valid-feedback">Valid</div>
    <div class = "invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group p-2" class = "row justify-content-center">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name = "email" oninput = "validateEmail(this.value)" required>
    <div class = "valid-feedback">Valid</div>
    <div class = "invalid-feedback">Please fill out this field.</div>	
    <i class = "fas fa-eye" id = "icon2"></i>  
  </div>
  <div class = "form-group p-2">
  <span id = "emailverification" class = "text-danger"></span>
  </div>
  <div class="form-group p-2" class = "row justify-content-center">
    <label for="password">Password</label>
    <input type="password" class= "form-control" id="password" placeholder="Enter Password" name = "password" oninput = "validatePassword(this.value)" required>
    <input type="checkbox" onclick="myFunction()">Show password
    <!--<div class = "valid-feedback">Valid</div>-->
    <div class = "invalid-feedback">Please fill out this field.</div>
   <i class = "fas fa-eye" id = "icon"></i>
  </div>
  <div class = "form-group">
    <span id="feedback" class = "text-danger"></span>
  </div>
  <div class="form-group p-2" class = "row justify-content-center">
    <label for="confirmpassword">ConfirmPassword</label>
    <input type="password" class = "form-control "id="confirmpassword" placeholder="Confirm Password" name = "confirmpassword" oninput ="validateConfirmPassword(this.value)" required>
    <input type="checkbox" onclick="myFunction1()">Show password
    <!--<div class = "valid-feedback">Valid</div>-->
    <div class = "invalid-feedback">Please fill out this field.</div>
    <i class = "fas fa-eye" id = "icon1"></i>
  </div>
  <div class = "form-group">
    <span id="feedback1" class = "text-danger"></span>
  </div>
  <div class = "row justify-content-center p-2">
  <button type="submit" class="btn btn-primary" id= "myButton" name = "signup">Submit</button>
  </div>
  <div class = "form-group justify-content-center">
    <p>Back Home <a href = "index.php"> Home</a></p>
</div>
</form>
  </div>
        <?php
    }
}