<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

         $servername = 'localhost';
         $username = 'root';
         $password = 'empty';
         $database = 'staff';
        $conn = mysqli_connect("localhost", "root", "", "man");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];


        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO woman
        VALUES ('$email',
            '$password')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$email\n "
                . " $password");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>