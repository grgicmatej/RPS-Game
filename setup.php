<?php
$b="<br />";
// Computer choices
$choiceComputer = array ("rock", "paper", "scissors");  // Possible computer choices
$rand_keys = array_rand($choiceComputer, 1);
//echo $choiceComputer[$rand_keys];         // checking if works? it works!         // 

$choiceUser = $_GET["option"];
//echo $choiceUser;

echo "Computer chose: $choiceComputer[$rand_keys]$b";

switch ($choiceUser){           // provjeriti zavrsetke caseova i sintaksu!!
    case "paper":
        switch ($choiceComputer[$rand_keys]){
            case "rock":
                echo "paper beats rock, user wins! $b";
                echo '<a href="index.php">Play again</a>';
                break;
            case "scissors":
                echo "scissors beats paper, computer wins! $b";
                echo '<a href="index.php">Play again</a>';
                break;
            case "paper":
                echo "It/'s a tie! $b";
                echo '<a href="index.php">Play again</a>';
                break;
        } }  
switch ($choiceUser){   
    case "rock":  
        switch ($choiceComputer[$rand_keys]){
            case "rock":
                echo "It/'s a tie!$b";
                echo '<a href="index.php">Play again</a>';
                break;
            case "scissors":
                echo "rock beats scissors, user wins!$b";
                echo '<a href="index.php">Play again</a>';
                break;
            case "paper":
                echo "paper beats rock, computer wins!$b";
                echo '<a href="index.php">Play again</a>';
                break;
        } }
 switch ($choiceUser){     
    case "scissors":   
        switch ($choiceComputer[$rand_keys]){
            case "rock":
                echo "rock beats scissors, computer wins!$b";
                echo '<a href="index.php">Play again</a>';
                break;
            case "scissors":
                echo "It/'s a tie!$b";
                echo '<a href="index.php">Play again</a>';
                break;
            case "paper":
                echo "scissors beats paper, user wins!$b";
                echo '<a href="index.php">Play again</a>';
                break;
        }  }