<?php
$display = "";

if (isset($_POST['input'])) {
    $display = $_POST['input'];
}

if (isset($_POST['num'])) {
    $display .= $_POST['num'];
}

if (isset($_POST['op'])) {
    setcookie("num", $display, time()+3600, "/");
    setcookie("op", $_POST['op'], time()+3600, "/");
    $display = "";
}

if (isset($_POST['equal']) && $display !== "") {
    $num1 = $_COOKIE['num'] ?? 0;
    $num2 = $display;
    $op   = $_COOKIE['op'] ?? "";

    switch ($op) {
        case "+":
            $display = $num1 + $num2;
            break;
        case "-":
            $display = $num1 - $num2;
            break;
        case "*":
            $display = $num1 * $num2;
            break;
        case "/":
            $display = ($num2 != 0) ? $num1 / $num2 : "Error";
            break;
        default:
            $display = $num2;
    }

    
    setcookie("num","",time()-3600,"/");
    setcookie("op","",time()-3600,"/");
}

if (isset($_POST['clear'])) {
    $display = "";
    setcookie("num","",time()-3600,"/");
    setcookie("op","",time()-3600,"/");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP Calculator</title>

<style>
body{
    background:#a39f9f;
    font-family:Arial
}
.calc{
    width:320px;
    margin:40px auto;
    background:black;
    padding:15px;
    border-radius:20px;
    box-shadow:10px 10px 40px
}
.maininput{
    width:100%;
    height:80px;
    font-size:35px;
    text-align:right;
    color:white;
    background:black;
    border:1px solid gray;
    border-radius:10px;
    margin-bottom:15px;
    padding-right:10px
}
.buttons{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:10px
}
button{
    height:65px;
    border-radius:50%;
    font-size:20px;
    font-weight:600;
    border:none;
    cursor:pointer
}
.numbtn{background:gray}
.calbtn{background:orange}
.c{background:red;color:white}
.equal{background:green;color:white}
</style>
</head>

<body>
<div class="calc">
<form method="post">
    <input type="text" name="input" class="maininput" value="<?=$display?>" readonly>

    <div class="buttons">
        <button class="numbtn" name="num" value="7">7</button>
        <button class="numbtn" name="num" value="8">8</button>
        <button class="numbtn" name="num" value="9">9</button>
        <button class="calbtn" name="op" value="+">+</button>

        <button class="numbtn" name="num" value="4">4</button>
        <button class="numbtn" name="num" value="5">5</button>
        <button class="numbtn" name="num" value="6">6</button>
        <button class="calbtn" name="op" value="-">-</button>

        <button class="numbtn" name="num" value="1">1</button>
        <button class="numbtn" name="num" value="2">2</button>
        <button class="numbtn" name="num" value="3">3</button>
        <button class="calbtn" name="op" value="*">*</button>

        <button class="c" name="clear">C</button>
        <button class="numbtn" name="num" value="0">0</button>
        <button class="equal" name="equal">=</button>
        <button class="calbtn" name="op" value="/">/</button>
    </div>
</form>
</div>
</body>
</html>
