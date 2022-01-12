<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css?php echo time(); ?>">    <title>Form Data</title>
    <style>
    <?php include "../css/main.css" ?>
    </style>
</head>

<body>
    <?php
    include('../database/db_connection.php');
    mysqli_select_db($conn, "test");
    $query = "SELECT * FROM `saved` WHERE under='Main' ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <div class="container">
                <div>
                    <?php echo "Photo: " .'<img src="'.$row["file"].'" alt="HTML5 Icon" class="contain" style="width:128px;height:128px">'. "</br>";
                    echo "Title: " . $row["title"] . "</br>";
                    echo " Under: "  . $row["under"] . "</br>";
                    echo " Time Taken:  " . $row["time taken"] . "</br>";
                    echo "Ingredients: " . $row["ingredients"] . "<br>";
                    ?>
                </div>
            </div>   

                
        <?php  }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);

        ?>
</body>

</html>
<!-- echo  "Title: " . $row["title"]. " Under: " . $row["under"]. " Time Taken:  " . $row["time taken"]. "Ingredients: " .$row["ingredients"]. "<br>"; -->