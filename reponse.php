
<?php
    $question_tableau = ["quelle est la couleur du cheval blanc d'henri iv ?", "Quelle est la fée la plus méchante, la A, la B ou la C ?", "la terre est ronde plate ou carrée ?"]


    //récupération de la bonne réponse
    $bonneReponse1 = $_POST['bonneReponse1'];

    //Récupération des questions
    $question1 = $_POST['question1'];

    //comparé les questions et réponses
    if($question1 == $bonneReponse1){
        echo "<p class='alert-success p-5'>BONNE REPONSE</p>";
        echo $tableau_question[0] ."La réponse est " . $bonneReponse1;
        $score += 1;
    }else{
        echo "<p class='alert-danger p-5'>MAUVAISE REPONSE</p>";
        echo $tableau_question[0] ."La réponse est " . $bonneReponse1;
    }
?>