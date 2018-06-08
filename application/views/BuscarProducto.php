<?php
    $mysqli=new mysqli('localhost', 'root', '', 'sl');
    $mysqli->query("SET NAMES 'utf8'");
    $q=$mysqli->query("select * from ventas");
    while($r=$q->fetch_assoc()) 
    {
        // echo '<tr><td>miinfo</td><td>miinfo</td><td>miinfo</td><td>miinfo</td></tr>';
        echo $r['nombre']." - ".$r['categoria']."<br>";
    }
?>