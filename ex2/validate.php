<?php 
  
if (!isset($_COOKIE['answer'])){
    $answer = $_POST["question"];
    setcookie('answer', $answer, time()+60*2);
    echo "Thank you for submitting. You voted for " .$answer;

}
else{
  
    echo "You already submitted.You voted for " . $_COOKIE['answer'];
}