<!doctype html>
<html lang="en">
<head>
    <title>Assignments</title>
    <style>
        h1, h3, p: {text-align: center;}
    </style>
</head>
<body>
    <h1>Calculation Exercise</h1>
    <h3>Give the correct answer for the task you see on the screen</h3>

    <?php
        $numberOne = rand(1,10);
        $numberTwo = rand(1,10);
        $first = $numberOne;
        $second = $numberTwo;
        $checkAnswer = $first + $second;

        echo "Task: " . $first . " + " . $second . "<br>";
    ?>

    <form method="POST" action="home.php" enctype="multipart/form-data">
        <p><label for="giveAnAnswer"><input type="text" name="answer"/></label></p>
        <p><input type="submit" name="submit"/></p>
    </form>

    <?php
    $givenAnswer = $_POST['answer'];

    if(isset($givenAnswer))
    {
        if(isset($_POST['submit']))
        {
            echo $givenAnswer . " " . $checkAnswer;
            if($givenAnswer == $checkAnswer)
            {
                echo " Message: Congratulation! The answer is correct!";
            }
            else
            {
                echo " Message: The answer is NOT correct!";
            }
        }
        else {
            echo "Please, submit your answer!";
        }
    }
    ?>
</body>
</html>