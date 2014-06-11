<?php

    $link = mysqli_connect("localhost", "root", "web2014", "github") or die("Error " . mysqli_error($link));

//consultation:

    $query = "SELECT * FROM fruteria" or die("Error in the consult.." . mysqli_error($link));

//execute the query.

    $result = $link->query($query);

//display information:

    while($row = mysqli_fecth_array($result)) {
        echo $row[0] . "<br>";
    }




//$myArray = getArraySQL($sql);
print_r($myArray);
echo "ok: ".json_encode($myArray);
?>