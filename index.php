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

<!----------------------- Question 1 --------------------------------------->
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
<!----------------------- Question 2 --------------------------------------->
        <div class="container bg-primary p-3 mb-2">
          <h1>Question 2:</h1>
            <h2>
              <?php
                echo $question_tableau[1];
              ?>
            </h2>

            <input type="hidden" value="c" name="bonneReponse2"/>

            <select class="form-select" name="question2">
              <option value="a">la fée a</option>
              <option value="b">la fée b</option>
              <option value="c">la fée c</option>
            </select>
        </div>
<!----------------------- Question 3 --------------------------------------->
        <div class="container bg-warning p-3 mb-2">
          <h1>Question 3:</h1>
            <h2>
              <?php
                echo $question_tableau[2];
              ?>
            </h2>

            <input type="hidden" value="ronde" name="bonneReponse3"/>

            <select class="form-select" name="question3">
              <option value="ronde">elle est ronde</option>
              <option value="plate">elle est plate</option>
              <option value="carree">elle est carrée</option>
            </select>
        </div>

        <button type="submit" class=" text-center btn btn-success m-5 " >Valider les réponses</button>
      </form>

    </div> 



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>