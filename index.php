<?php 
    require "header.php";
?>


<main>

<?php
    if(isset($_SESSION['userId'])){
        echo '<p>You are logged in!</p>';
    }
    else{
        echo '<p>You are logged out!</p>';
    }
?>
<div>

<?php
     if(isset($_SESSION['userId'])){
        echo ' <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
        </form>';
    }
    else{
        echo ' <form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/E-mail...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>';
    }
?>
       
       
    </div>
    
    
</main>


<?php
    require "footer.php";
?>