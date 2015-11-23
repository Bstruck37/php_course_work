
<?php
    session_start(); $username = $password = $userError = $passError = '';
    if(isset($_POST['sub'])) {
        $username = $_POST['username']; 
        $password = $_POST['password'];
        
        if($username === 'Bstruck' && $password === 'stocktruck5') {
            $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
        }
        if (($username !== 'Bstruck')  && ($password !== 'stocktruck5')) {
            echo "Incorrect Username or Password";
        }
    }    
?>  

<body>
    <form name='input' action='{$_SERVER['PHP_SELF']}' method='post'>
        <label for='username'>Username: </label>
            <input type='text' value='$username' id='username' name='username' />
            <div class='error'>$userError</div>
        <label for='password'>Password: </label>
            <input type='password' value='$password' id='password' name='password' />
            <div class='error'>$passError</div>
        <input type='submit' value='Log In' name='sub' />
    </form>
</body>