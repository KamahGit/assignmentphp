
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/11/2018
 * Time: 6:40 PM
 */
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>


<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>


      <label for="firstname"><b>First Name :</b></label>
      <input type="text" placeholder="Enter First Name" name="firstname" required>

      <label for="lastname"><b>Last Name :</b></label>
      <input type="text" placeholder="Enter Last Name" name="lastname" required>

      <label for="email"><b>User Name :</b></label>
      <input type="text" placeholder="Enter Email" name="username" required>


    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" >Register</button>
  </div>

<!--  <div class="container signin">-->
<!--    <p>Already have an account? <a href="#">Sign in</a>.</p>-->
<!--  </div>-->
</form>
 </body>
 </html>