<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h1>Hello World</h1>';
    $myName = 'Marta';
    echo '<p>$myName</p>';
    echo "<p>$myName</p>"; //This takes a little more work
    echo '<p>' . $myName. '</p>';

    $items=['PHP', 'jQuery', 'HTML'];
   function printOurItems($items) {
        for($i = 0; $i<count($items); $i +=1 ) {
        echo "<div>a thing is $items[$i] </div>";

    }
}
echo '<p>a line</p>';
    printOurItems($items);

                                //location, user, password, dbname
    $connection = mysqli_connect("127.0.0.1", "root", "root", "deneb");
    //if there was an error
    if(mysqli_connect_errno()) { //was there an error?
echo "there was an error: " . mysqli_connect_error(); //the error
    } else {
        $query = "SELECT * FROM students;";
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($result)) { //popping mechanism is built into fetch
            $name = $row["name"]; //name of the column
            $id = $row["id"]; //name of the column
            echo "$name with id of $id";
        }
    }
    ?>
</body>
</html>