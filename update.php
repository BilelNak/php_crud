<!DOCTYPE HTML>
<html>  
<body>
    <form action="save.php" method="post">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "foodjek";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //create sql request 
        $sql = "select * from client where id = ".$_REQUEST["id"];

        //execute sql request and get results
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            $row = $result->fetch_assoc();
            echo "id: <input type='text' name='id' value='". $row['id'] ."'><br>" ;
            echo "Name: <input type='text' name='name' value='". $row['name'] ."'><br>" ;
            echo "Email: <input type='text' name='email' value='". $row['email'] ."'><br>" ;
            echo "Phone: <input type='text' name='phone' value='". $row['phone'] ."'><br>" ;
            echo "Adresse: <input type='text' name='adresse' value='". $row['adresse'] ."'><br>" ;

        }
        //close connection 
        $conn->close();
    ?>
    <input type="submit">
    </form>
</body>
</html>