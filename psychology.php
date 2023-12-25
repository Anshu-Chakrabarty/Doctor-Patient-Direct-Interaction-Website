<?php
session_start();
header('location:psychology.php');
?>
<!doctype html>
<head>
    <title>PROBLEM</title>
    <link rel="stylesheet" type="text/css" href="problem.css">
        <body>

    <form action="problem.php" >
       <div class="problem">
        <p>Brief Your Problem</p>
        <input type="text"  class="box" name="problem" placeholder="Enter Problem">
        <p>Tests Done</p>
        <input type="text" name="test" placeholder="Reports">
        <p>Tests to be Done<p>
        <input type="text" name="done" placeholder="Reports">
        <p>Medicines Taken</p>
        <input type="text" name="meds" placeholder="Name of Meds"><br>
            <input type="submit" name="" value="Submit" >
        </div>
            </form>

    </body>
</head>
