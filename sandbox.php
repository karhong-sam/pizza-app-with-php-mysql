<?php 

    if(isset($_POST['submit'])){
        //cookies for gender
        setcookie('gender', $_POST['gender'], time()+86400);

        session_start();
        $_SESSION['name'] = $_POST['name'];
        header(('Location: index.php'));
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>php</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="text" name="name" id="">
            <select name="gender" id="">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>