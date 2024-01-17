  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("connection fail" . mysqli_connect_error());
    } else {
        echo "successfull connection";
    }
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $age = $_POST["age"];
    
        $insert = "INSERT INTO college (fname, lname, age) VALUES ('$fname', '$lname', '$age')";

        mysqli_query($conn, $insert);
    
        if ($conn->query($insert) === true) {
            echo "<br>Record inserted successfully<br>";
        } else {
            echo "<br>Error inserting record: " . $conn->error;
        }
    







    ?>
