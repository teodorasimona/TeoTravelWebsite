
<?php
include "includes/header.php";
?>


<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="https://cdn-icons-png.flaticon.com/512/6676/6676023.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label >
      <input style="margin-bottom:0;display:inline-block;" type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>


<?php
include "includes/footer.php";
?>
