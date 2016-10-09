<!doctype html>
<!--
    Created by Keon Hee Park 
    Assignment 4: Part 1
    assignment4.php
	Course: CSC 4370 - Web Programming
	Instructor: Louis Henry
	Date: October 8, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Assignment 4</title>
    <?php
        print '<link rel="stylesheet" type="text/css" href="css/style.php">';
    ?>
</head>

<body>
    <?php
    if($_POST){
        session_start();
        $text = htmlspecialchars_decode($_POST["remarks"]);
        $color = htmlspecialchars_decode(trim($_POST["radioColor"]));
        $fontFamily = htmlspecialchars_decode(trim($_POST["radioFontFamily"]));
        $fontWeight = htmlspecialchars_decode(trim($_POST["optionFontWeight"]));
        $fontSize = htmlspecialchars_decode(trim($_POST["optionFontSize"]));
        
        $_SESSION['colorVariable'] = $color;
        $_SESSION['fontFamilyVariable'] = $fontFamily;
        $_SESSION['fontWeightVariable'] = $fontWeight;
        $_SESSION['fontSizeVariable'] = $fontSize;
        
        print "<p>" . $text . "</p>";
    }else // ! $_POST
    {
        print "POST does not exist. It is set to false.";
    }
    ?>
</body>

</html>