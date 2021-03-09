<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./asset/quizz.css"/><!-- Lien avec css -->
    <title>Quizz</title>
</head>
<body>
    <form action="post" action="quizz_recup.php"> <!--Appeller le script php-->
        <!-- QUESTIONS SOUS FORMES D'INPUT -->
        <label for="q1">1: Comment s'appele le Pokemon qui possede le bout de la queue en feu ? (1ere évolution)</label> 
        <br />
        <input type="text" name="question1" required id="q1"><!-- required exige une reponse -->
        <br /><br />
        <label for="q2">2: Comment s'appele le fils du 4eme Hokage dans Naruto ? (prénom seulement)</label>
        <br />
        <input type="text" name="question2" required id="q2">
        <br /><br />
        <label for="q3">3: Qui est le capitaine de l'équipage au chapeau de paille ? (prénom seulement)</label>
        <br />
        <input type="text" name="question3" required id="q3">
        <br /><br />
        <!-- QUESTIONS SOUS FORMES DE PLUSIEURS CHOIX -->
        <label for="question4">4: Qui a accomplis les 12 travaux dans la mythologie grecque</label>
        <br />
        <select name="q4" id="q4" required>
        <option value="">Sélectionnez</option> <!-- vu que cette balise n'a pas de valeur le mot "selectionnez" ne compte pas comme une réponse -->
        <option value="Héraclès">Héraclès</option>
        <option value="Hercule">Hercule</option>
        <option value="Sacha">Sacha du Bourg-Palette</option>
        <option value="Harry">Harry Poter</option>
        </select>
        <br /><br />
        <label for="q5">5: Combien font -14 + 0 * 10 - 14</label>
        <br />
        <select name="question5" id="q5" required>
        <option value="">Sélectionnez</option> 
        <option value="0">0</option>
        <option value="28">28</option>
        <option value="-28">-28</option>
        <option value="-154">-154</option>
        </select>
        <br /><br />
        <label for="q6">6: Qui est le fils du frere de ton frere</label>
        <br />
        <select name="question6" id="q6" required>
        <option value="">Sélectionnez</option> 
        <option value="Cousin">Cousin</option>
        <option value="Cousine">Cousine</option>
        <option value="Niece">Niece</option>
        <option value="Neveu">Neveu</option>
        </select>
        <br /><br />
        <!-- QUESTIONS SOUS FORMES DE QCM et OUI/NON -->
        <label for="q7">7: Quel élément ne represente pas le plasmas naturels</label>
        <br />
        <input type="radio" name="question7" value="étoiles" checked> Les étoiles <!-- checked permet de cocher d'avance pour etre sur d'avoir une reponse car le required ne marche pas -->
        <input type="radio" name="question7" value="nébuleuses"> Les nébuleuses gazeuses 
        <input type="radio" name="question7" value="aurores"> Les aurores boréales 
        <input type="radio" name="question7" value="foudre"> la foudre 
        <input type="radio" name="question7" value="vent"> le vent 
        <input type="radio" name="question7" value="vent2"> le vent solaire 
        <input type="radio" name="question7" value="flammes"> le coeur des flammes 
        <br /><br />
        <label for="q8">8: Les Dinosaures sont éteints</label>
        <br />
        <input type="radio" name="question8" value="Oui" checked> Oui 
        <input type="radio" name="question8" value="Non"> Non 
        <br /><br />
        <label for="q9">9: Le cheval blanc tacheter est-il tout Blanc ?</label>
        <br />
        <input type="radio" name="question9" value="Oui" checked> Oui 
        <input type="radio" name="question9" value="Non"> Non 
        <input type="radio" name="question9" value="Peut-etre"> Peut-etre 
        <br /><br />
        <!-- QUESTION BONUS -->
        <label for="q10">10: Voici la question bonus : Si je te dis de sélélectionnez le "oui" pour avoir des points le fais-tu ?</label>
        <br />
        <input type="radio" name="question10" value="Oui" checked> Oui 
        <input type="radio" name="question10" value="Non"> Non 
        <input type="radio" name="question10" value="oui"> oui 
        <input type="radio" name="question10" value="non"> non 
        <br /><br />
        <input type="submit" value="Valider" /> <!-- Renvoi à la page mise dans le form en haut de page -->
    </form>
</body>
</html>