
<?php
    $question_tableau = ["quelle est la couleur du cheval blanc d'henri iv ?", "Quelle est la fée la plus méchante, la A, la B ou la C ?", "la terre est ronde plate ou carrée ?"];


    //récupération de la bonne réponse
    $bonneReponse1 = $_POST['bonneReponse1'];
    $bonneReponse2 = $_POST['bonneReponse2'];
    $bonneReponse3 = $_POST['bonneReponse3'];

    //Récupération des questions
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];

    //comparé les questions et réponses

    //Question 1
    if($question1 == $bonneReponse1){
        echo "<p class='alert-success p-5'>Question 1 BONNE REPONSE</p>";
        
    }else{
        echo "<p class='alert-danger p-5'>Question 1 MAUVAISE REPONSE</p>";
        
    }

    //Question 2
    if($question2 == $bonneReponse2){
        echo "<p class='alert-success p-5'>Question 2 BONNE REPONSE</p>";
        
    }else{
        echo "<p class='alert-danger p-5'>Question 2 MAUVAISE REPONSE</p>";
        
    }
    //Question 3
    if($question3 == $bonneReponse3){
        echo "<p class='alert-success p-5'>Question 3 BONNE REPONSE</p>";
        
    }else{
        echo "<p class='alert-danger p-5'>Question 3 MAUVAISE REPONSE</p>";
        
    }
?>

