<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Mon Questionnaire</title>
  </head>

  <body>
    <h1 class="text-center" >Questionnaire</h1>
    <?php
    //tableau des questions
    $question_tableau = ["quelle est la couleur du cheval blanc d'henri iv ?", "Quelle est la fée la plus méchante, la A, la B ou la C ?", "la terre est ronde plate ou carrée ?"]
    ?>

    <div>
      <form action="reponse.php" method="post">
        <div class="container bg-danger p-3 mb-2">
          <h1>Question 1:</h1>
            <h2>
              <?php
                echo $question_tableau[0];
              ?>
            </h2>

            <input type="hidden" value="blanc" name="bonneReponse1"/>

            <select class="form-select" name="question1">
              <option value="noir">il est Noir</option>
              <option value="blanc">il est blanc</option>
              <option value="bleu">il est bleu</option>
              <option value="rose">il est rose</option>
            </select>
        </div>

        <button type="submit" class=" text-center, btn btn-success m-5 " >Valider les réponses</button>
      </form>

    </div> 

    
       
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>