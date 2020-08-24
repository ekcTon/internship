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

        

        $sql = "SELECT * FROM imageActivity where status = 'true' order by id desc";
        $result = $conn->query($sql);
        $allHTML = "";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $allHTML = $allHTML."".$row["id"]."^".$row["pathImg"]."^".$row["event_name"]."^"."0000000000";
            }
            echo "alladmin_".$allHTML;
        } else {
            echo "0 results";
        }
        $conn->close();


?>