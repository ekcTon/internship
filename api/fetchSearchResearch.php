<?php

    $servername = "kmscience.sat.or.th";
    $username = "scikmdb";
    $password = 's$IKM2562db!';
    $dbname = "sportscikm";

    $conn = new mysqli($servername, $username, $password, $dbname);mysqli_set_charset($conn, "utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $word = $_POST['word'];
    

    $sql = "SELECT * FROM research where status ='true' and (upper(title) = '$word' or lower(title) = '$word' or title Like '%$word%' or upper(content) = '$word' or lower(content) = '$word' or content Like '%$word%' ) order by id desc";
    // $sql = "SELECT * FROM imageActivity where status = 'true' and (upper(event_name) = 'test' or lower(event_name) = 'test' or event_name like '%test%')";
    $result = $conn->query($sql);
    $allHTML = "";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $allHTML = $allHTML."".$row["id"]."^".$row["title"]."^".$row["content"]."^".$row["date"]."^"."0000000000";
        }
        echo "alladmin_".$allHTML;
    } else {
        echo "0 results";
    }
    $conn->close();


?>