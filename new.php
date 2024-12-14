<html>
    <head>
        <title>Form Validation Using PHP</title>
    <head>
<?php
error_reporting(0);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        if($name == ''){
            $nameerr = "Name is required.";

        }else if(strlen($name)<=8){
            $nameerr = "Name must be more than 8 characters.";
        }

        $email  = $_POST['email'];
        if($email == ''){
            $emailerr = "Email is required.";
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailerr = "Invalid email.";
        }
    }
    ?>
<body>

    <form action="" method="POST">
        <input type="text" placeholder="Name" name="name">
        <?php if($nameerr){?>
            <span><?php echo $nameerr?></span>
        <?php }
        else{
            echo $name;
        }
        ?>

        <input type="email" name="email" placeholder="Email">
        <?php if($emailerr){?>
        <span> <?php echo $emailerr ?></span>
        <?php }?>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>