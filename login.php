<?php

require "Header.php"

?>
<div class="signup__container">

<form action="#" method="POST">
    <h1> Sign in today</h1>
    <hr>
    
    <label for="user name"> User name:</label>
    <input type="text" name="user-name" >
    <label for="Password"> Password: </label>
    <input type="password" name="pwd" >
    <button type="submit" >Sign in</button>
    <section>
        <a href="./signup.php">Dont have an account ?</a>
    </section>
</form>
</div>
<?php

require "Footer.php"

?>