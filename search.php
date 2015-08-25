<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","t12s9n9e8e8");
    $db=mysql_select_db("testdb",$con);
    $query=mysql_query("select * from user_name where first_name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['title'];
    }
    echo json_encode($array);
?>