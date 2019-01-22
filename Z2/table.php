<?php
?>
<html>
<body>


Svi uneseni brojevi: <?php
$brojevi[]="";
$brojevi= $_POST["name"];
echo $brojevi;

$broj = explode(",", $brojevi);

//echo "broj0";
//echo $broj[0];
//
//echo "broj1";
//echo $broj[1];
//echo "broj2";
//echo $broj[2];
//echo "velicina arraya";
$velicina=count($broj);
//echo (count($broj));
?>
<br>





<table>

    <link rel="stylesheet" href="table.css">

    <tbody>



    <?php

    $count=1;

    for($y=1;$y<17;$y++)
    {
        echo "<html><tr></tr></html>";
    for($x=1;$x<17;$x++)
    {

        for($q=0;$q<$velicina;$q++)
        {
           if(count===1)
           {
               echo "<html><td>$count</td></html>";
           }

           elseif (count!==broj[q])
           {
               echo "<html><td>$velicina</td></html>";
               break;
           }

        }
    //    echo "<html><td>$count</td></html>";
        $count++;
    }
    }
?>



    </tbody>

</table>




</body>



</html>




