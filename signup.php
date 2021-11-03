<?php

require "Header.php"

?>
<div class="signup__container">

<form action="#" method="POST">
    <h1>Join today</h1>
    <hr>
    <label for="First name"> First Name:</label>
    <input type="text" name="first-name" >
    <label for="Last name"> Last Name:</label>
    <input type="text" name="last-name" >
    <label for="user name"> User name:</label>
    <input type="text" name="user-name" >
    <label for="Email"> Email:</label>
    <input type="email" name="mail" >
    <label for="Password"> Password: </label>
    <input type="password" name="pwd" >
    <label for="Confirm password"> Confirm Password:</label>
    <input type="password" name="confirm-pwd" >
    <button type="submit" style="background-color:red;">Join</button>
    <section>
        <a href="./login.php">Already have an account ?</a>
    </section>
</form>
</div>
<?php

require "Footer.php"

?>