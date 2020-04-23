<?php
    include 'dbConfig.php';

    $json = array();
    $show = mysqli_query($connect, "SELECT * FROM test");
    
    while($row = mysqli_fetch_assoc($show))
    {
        if($row['type']=="Leave in lieu")
        {
            $json[] = array (
                'backgrounfColor' => 'rgb(225, 0, 0)',
                'borderColor' => 'rgb(225, 0, 0)',
                'title' => $row['name']." : ".$row['type'],
                'start' => $row['startDate'],
                'end' => $row['finishDate'],
            );
        }
        else
        {
            $json[] = array(
                'title' => $row['name']." : ".$row['type'],
                'start' => $row['startDate'],
                'end' => $row['finishDate'],
            );
        }
    }
    echo json_encode($json);
?>