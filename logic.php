<?php
//error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
//ini_set('display_errors', 1); # Display errors on page (instead of a log file)

/*-------------- Configuration settings --------------*/

//If no number is submitted with the form, this will be the default number of words
$defaultWords = 4;

/*----------------------------------------------------*/

/*------------Words compiled from: http://www.manythings.org/vocabulary/lists/a/words.php --------*/

include('config.php');

//Initialize the variables
$wordsList = [];
$answer = '';

//The amount of words to display
if(isset($_POST['numberOfWords'])){
  $numberOfWords = $_POST['numberOfWords'];
}else{
  $numberOfWords = $defaultWords;
}

//Connect to the database
$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $db);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Request animals from database
if(!isset($_POST['animalsCheck']) || $_POST['animalsCheck'] == "yes"){

    /* Prepared statement, stage 1: prepare */
    if ($stmt = $mysqli->prepare("SELECT type FROM animals")) {

    	$stmt->execute();

        /* bind variables to prepared statement */
        $stmt->bind_result($animals);

        /* fetch values */
        while ($stmt->fetch()) {
            $wordsList[] = $animals;
        }

        /* close statement */
        $stmt->close();
    }
}

//Request clothes from database
if(!isset($_POST['clothesCheck']) || $_POST['clothesCheck'] == "yes"){

    /* Prepared statement, stage 1: prepare */
    if ($stmt = $mysqli->prepare("SELECT type FROM clothes")) {

        $stmt->execute();

        /* bind variables to prepared statement */
        $stmt->bind_result($clothes);

        /* fetch values */
        while ($stmt->fetch()) {
            $wordsList[] = $clothes;
        }

        /* close statement */
        $stmt->close();
    }
}

//Request fruits from database
if(!isset($_POST['fruitsCheck']) || $_POST['fruitsCheck'] == "yes"){

    /* Prepared statement, stage 1: prepare */
    if ($stmt = $mysqli->prepare("SELECT type FROM fruits")) {

        $stmt->execute();

        /* bind variables to prepared statement */
        $stmt->bind_result($fruits);

        /* fetch values */
        while ($stmt->fetch()) {
            $wordsList[] = $fruits;
        }

        /* close statement */
        $stmt->close();
    }
}

//Request tools from database
if(!isset($_POST['toolsCheck']) || $_POST['toolsCheck'] == "yes"){

    /* Prepared statement, stage 1: prepare */
    if ($stmt = $mysqli->prepare("SELECT type FROM tools")) {

        $stmt->execute();

        /* bind variables to prepared statement */
        $stmt->bind_result($tools);

        /* fetch values */
        while ($stmt->fetch()) {
            $wordsList[] = $tools;
        }

        /* close statement */
        $stmt->close();
    }
}


for ($i = 0; $i < $numberOfWords; $i++) {
    if($_POST['separation'] == 'camelCase'){
        $answer = $answer.ucfirst($wordsList[array_rand($wordsList)]);
    }elseif($_POST['separation'] == 'hyphen'){
        $answer = $answer."-".$wordsList[array_rand($wordsList)];
    }else{
        $answer = $answer." ".$wordsList[array_rand($wordsList)];
    }
}

//Clean the answer - remove the first character
if($_POST['separation'] != 'camelCase'){
        $answer = substr($answer,1);
}


?>