<?php
  $title="Homepage";
  $style="../styles/index.css";
  require_once './default/header.php';
?>
<div class ="main">
  <div id="login-signup">
    <button id="login-btn" class="index-button">Login</button>
    <button id="signup-btn" class="index-button">SignUp</button>
  </div>

  <div id='login-box'>
    <div id='pop-up-login' class='animate'>
      <span class="close"> &#10060;</span>
      <h1 class="head"><center>Login</center></h1>
      <form action="./DB/success_login.php" method='post'>
        <label for='username'>Username</label><br>
        <input class='input-box' type='text' name='UserID' id='username' required placeholder="Username"><br>
        <label for='password'>Password</label><br>
        <input class='input-box' type='password' name='Password' id='password' required placeholder="Password"><br>
        <center><button id="submit-login" class="submit-button" type='submit' name='submit'>Login</button></center>
      </form>
    </div>
  </div>

  <div id='signup-box'>
    <div id='pop-up-signup' class='animate'>
      <span class="close"> &#10060;</span>
      <h1 class="head"><center>Signup</center></h1>
      <form action="./DB/Success_register.php" method='post'>
        <label for='name'>Name</label><br>
        <input class='input-box' type='text'name='Name'id='name' required placeholder="Full Name"><br>
        <label for="mobile">Mob No.</label><br>
        <input class='input-box' type='number' name="MobNo" id='mobile' required placeholder="10 digit Mobile Number"><br>
        <label for='clg_id'>Email</label><br>
        <input class='input-box' type='email' name='EMail' id='clg_id' required placeholder="Email Id"><br>
        <label for='username'>Username</label><br>
        <input class='input-box' type='text' name='UserID' id='username' required placeholder="Username"><br>
        <label for='password'>Password</label><br>
        <input class='input-box' type='password' name='Password' id='password' required placeholder="Password"><br>
        <center><button id="submit-signup" class="submit-button" type='submit' name='submit'>Signup</button></center>
      </form>
    </div>
  </div>

</div>
<?php
  $script="../scripts/script_index.js";
  require_once './default/footer.php';
?>
