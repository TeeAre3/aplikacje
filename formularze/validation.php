<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Validation</title>
    <style>
        p, .error{
            color: red;
        }
    </style>
</head>
<body>
    <p>* - required field</p>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">*<?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">*<?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span><br>
        Comment: <textarea name="comment" cols="30" rows="5" value="<?php echo $comment;?>"></textarea>
        <br><br>
        Gender: 
            <input type="radio" name="gender" <?php if(isset($gender)&& $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="other" name="gender" value="Other">
            <label for="other">Other</label>
            <span class="error">*<?php echo $genderErr;?></span>
        <br><input type="submit" value="Submit"><br>
        <h2>Your Input:</h2>
    </form>
</body>
</html>
<?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
?>
