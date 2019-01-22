

<!doctype html>
<html lang="en" xml:lang="en">
<body>

Svi uneseni brojevi: <?php
$brojevi[]="";
$brojevi= $_POST["name"];
echo $brojevi;

$broj = explode(",", $brojevi);


?>






<table>

    <link rel="stylesheet" href="table.css">

    <tbody>



    <?php

    $count=0;
$j=false;

    for($y=1;$y<17;$y++)
    {
       //echo "<html><br></html>";

        echo "<html><tr></tr></html>";
    for($x=1;$x<17;$x++)
    {
        $count++;

        foreach($broj as $value) {


            if (($value == $count) && ($j == false)) {
                echo "<html><td>$count</td></html>";
                $j = true;
            }
        }

            foreach($broj as $value)
            {

          if(($j==false)&&($value!=$count))
        {
            echo "<html><td></td></html>";
            $j=true;
        }




        }
        $j=false;



    }
    }
?>



    </tbody>

</table>




</body>



</html>



