    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $database = "blogpost";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database, 3307);

    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error() . "  " . $conn->connect_error);
    }
    // echo "Connected successfully";
