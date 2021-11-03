<?php

require "Header.php"

?>
<div class="signup__container">

<form action="#" method="POST">
    <h1>Upload a photo</h1>
    <hr>
    <label for="Full name"> Full Name:</label>
    <input type="text" name="full-name" >
    <label for="Email"> Email:</label>
    <input type="email" name="mail" >
    <label for="upload"> Attach file:</label>
    <input type="image" src="./assets/logo.png" alt="upload" style="float:right" width="48" height="48">
    <button type="submit" >Upload now</button>
    
</form>
</div>
<?php

require "Footer.php"

?>