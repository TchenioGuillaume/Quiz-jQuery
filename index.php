<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Quiz</title>

    <!-- Lien CSS -->
    <link rel="stylesheet" href="style.css">

  </head>

  <?php
    include '../../header.php';
  ?>
  
  <body>
    <p>Question 1</p>
    <div class="question">
      <label for="q1a">Réponse A<input type="radio" id="q1a" name="question1" value="a"></label><br/>
      <label for="q1b">Réponse B<input type="radio" id="q1b" name="question1" value="b"></label><br/>
      <label for="q1c">Réponse C<input type="radio" id="q1c" name="question1" value="c"></label>
      <hr> <!-- fait une ligne de separartion -->
    </div>

    <p>Question 2</p>
    <div class="question">
      <label for="q1a">Réponse A<input type="radio" id="q1a" name="question2" value="a"></label><br/>
      <label for="q1b">Réponse B<input type="radio" id="q1b" name="question2" value="b"></label><br/>
      <label for="q1c">Réponse C<input type="radio" id="q1c" name="question2" value="c"></label>
      <hr> <!-- fait une ligne de separartion -->
    </div>

    <p>Question 3</p>
    <div class="question">
      <label for="q1a">Réponse A<input type="radio" id="q1a" name="question3" value="a"></label><br/>
      <label for="q1b">Réponse B<input type="radio" id="q1b" name="question3" value="b"></label><br/>
      <label for="q1c">Réponse C<input type="radio" id="q1c" name="question3" value="c"></label>
      <hr> <!-- fait une ligne de separartion -->
    </div>

    <input type="button" name="" class="valider" value="Valider">


<!----------------------------------------->

    <div class="modal">
      <p>Résultat</p>
      <a href="#" class="fermer">Fermer</a>
    </div>

    <script src= "jquery-3.1.1.js"></script>
    <script type="text/javascript" src="script.js"></script>

  </body>
</html>
