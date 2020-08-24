<?php
        // $servername = "kmscience.sat.or.thx";
        // $username = "scikmdbx";
        // $password = 's$IKM2562db!x';
        // $dbname = "sportscikmx";

        $servername = "kmscience.sat.or.th";
        $username = "scikmdb";
        $password = 's$IKM2562db!';
        $dbname = "sportscikm";

        $conn = new mysqli($servername, $username, $password, $dbname);mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        $sql = "SELECT * FROM calendars where status = 'true' and STR_TO_DATE( date,'%d/%m/%Y') between STR_TO_DATE( '$start_date','%d/%m/%Y') and STR_TO_DATE( '$end_date' ,'%d/%m/%Y') order by id desc";
        $result = $conn->query($sql);
        $allHTML = "";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            
                $allHTML = $allHTML."".$row["id"]."^".$row["title"]."^".$row["detail"]."^".$row["time"]."^".$row["date"]."^".$row["note"]."^"."0000000000";

            }
            echo "alladmin_".$allHTML;
        } else {
            echo "0 results";
        }
        $conn->close();


?>