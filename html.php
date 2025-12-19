<?php   
$h2_color="purple";

echo "<h1 style='color:green'>php with html</h1>";
echo " <h1 style='color:blue'>php with html</h1> ";
?>

<?php
$name="coder boy";
echo "<h1 style='color:red'>my name is $name</h1>";

?>

<h1 style='color: pink'>
    my  name is  <?php echo $name;?>
</h1>

<h2 style="color:<?php echo $h2_color  ?>"><?php echo "this is h2 tag";?></h2>
<h2 style="color:<?php echo $h2_color  ?>"><?php echo $name ?></h2>
<h2 style="color:<?php echo $h2_color ?>"><?php echo $name ?></h2>
<h2 style="color:<?php echo $h2_color ?>">my name is <?php echo  $name?></h2>