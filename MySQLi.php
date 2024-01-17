  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta http-equiv="refresh" content="0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>






    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";



    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("sorry we fail to connect" . mysqli_connect_error());
    } else {
      echo "Connection was successful";

      echo "<br><br>";
    }

    // $sql .= "INSERT INTO MYGuest (id,firstname, lastname, email)
    // VALUES (112,'Mary', 'Moe', 'mary@example.com');";
    // $sql .= "INSERT INTO MYGuest (id,firstname, lastname, email)
    // VALUES (113,'Julie', 'Dooley', 'julie@example.com')";

    // if (mysqli_multi_query($conn, $sql)) {

    //   echo "New record successfull";
    // } else {
    //   echo "Error" . $sql . "<br>" . mysqli_error($conn);
    // }

    // $stmt = $conn->prepare("INSERT INTO MYGuest (id,firstname, lastname, email) VALUES (?,?, ?,?)");
    // $stmt->bind_param("isss", $firstname, $lastname, $email);

    // set parameters and execute

    //  $id=115;
    // $firstname = "John";
    // $lastname = "Doe";
    // $email = "john@example.com";
    // $stmt->execute();

    //  $id=116;
    // $firstname = "Mary";
    // $lastname = "Moe";
    // $email = "mary@example.com";
    // $stmt->execute();

    //  $id=117;
    // $firstname = "Julie";
    // $lastname = "Dooley";
    // $email = "julie@example.com";
    // $stmt->execute();

    // echo "New records created successfully";

    // $stmt->close();

    // $sql = "SELECT id,firstname,lastname FROM MyGuest where lastname='singh'";
    // $result = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result) > 0) {
    //     echo "<table><tr><th>ID</th><th>Name</th></tr>";
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //       echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    //     }
    //     echo "</table>";
    //   } else {
    //     echo "0 results";
    //   }


    // $sql = "DELETE FROM MYGUEST WHERE ID=101";

    // if (mysqli_query($conn, $sql)) {
    //   echo "Successfully deleted";
    // } else {
    //   echo "error" . mysqli_error($conn);
    // }


    // $sql = "UPDATE MYGUEST 
    // SET LASTNAME='ROBITSON'
    // WHERE FIRSTNAME='Julie'";

    // if (mysqli_query($conn, $sql)) {
    //   echo "Successfully UPDATED";
    // } else {
    //   echo "error" . mysqli_error($conn);
    // }


    // mysqli_close($conn);

    if (mysqli_query($conn, $sql)) {
      $last_id = mysqli_insert_id($conn);
      echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


    $myXMLData =
      "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

    $xml = simplexml_load_file("sample2.xml") or die("Error: Cannot create object");
    echo $xml->book[0]->title['lang'];
    echo "<br><br>";

    foreach ($xml->children() as $books) {
      echo $books->title;
      echo "<br>";
    }


    ?>





  </body>

  </html>