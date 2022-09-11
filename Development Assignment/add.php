<!doctype html>
<html lang="en">
<head>
    <title>Assignments</title>
</head>
<body>
<div style="text-align: center;">
    <h1>Calculation Exercise</h1>
    <h2>Give the correct answer for the task you see on the screen</h2>
    <h3>Task 1</h3>

    <?php
    //Generating two random numbers
    $first = 0;
    $second = 0;

    for($i=0; $i<2;$i++){
        $array[] = rand(1,10); //generating two random numbers in an array
    }
    $first = $array[0]; //getting the first one out of the array into a variable
    $second = $array[1]; //getting the second one out of the array into a variable

    echo $first." + ".$second; //show the calculation to the user
    ?>

    <!-- The form what the users can see and send their answer -->
    <form method="POST" action="add.php" enctype="multipart/form-data">
        <p><label for="givenAnswer" id="label_givenAnswer">Your answer:</label>
            <input id="givenAnswer" type="text" name="givenAnswer"/></p>
        <p><input type="submit" name="submit"/></p>
    </form>

    <?php
    // see if the given answer is the same as the result of the calculation
    $getAnswer = $_POST['givenAnswer'];
    $correct = $first + $second;
    //echo $getAnswer." and ".$correct."<br>";

    if(isset($_POST['submit'])){
        if(isset($_POST['givenAnswer'])){
            if($getAnswer == $correct){
                // problem! correct variable is changing as the calculation changes, so they are not going to be the same
                // if the result is not the same as the previous one
                echo "yeah, it's correct!!!";
            }
            else{
                echo "bhruuu...";
            }
        }
    }
    ?>
</div>
</body>
</html>