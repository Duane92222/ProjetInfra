<?php
foreach ($_POST as $key=>$value)
{
    echo($key." : ".$value."<br>");
}
$score =0;
// Pour les 3 premieres questions
if (strtolower($_POST["question1"]) == "Salamèche") 
{ 
    $score++;
}
if (strtolower($_POST["question2"]) == "Naruto") //strtolower pour eviter les fautes avec Naruto, nARUTO, NARUTO, etc...
{
    $score++;
}
if (strtolower($_POST["question3"]) == "Luffy") 
{
    $score++;
}
//Pour les 3 questionnaires avec plusieurs options
if ($_POST["question4"] == "Héraclès")
{
    $score++;
}
if ($_POST["question5"] == "-28") 
{
    $score++;
}
if ($_POST["question6"] == "Neveu") 
{
    $score++;
}
//Pour les trois QCM 
if ($_POST["question7"] == "vent")
{
    $score++;
}
if ($_POST["question8"] == "Oui") 
{
    $score++;
}
if ($_POST["question9"] == "Peut-etre") 
{
    $score++;
}
//Pour la question Bonus
if ($_POST["question10"] == "oui") 
{
    $score++;
}
echo("Votre score est de ".$score."/9.");

switch ($score)
{
    case 0 : $etat = "Nul !"; break;
    case 1 : $etat = "Insuffisant..."; break;
    case 2 : $etat = "NOOB"; break;
    case 3 : $etat = "BAD"; break;
    case 4 : $etat = "Unlucky"; break;
    case 5 : $etat = "Peu mieux faire !"; break;
    case 6 : $etat = "Sufisant !"; break;
    case 7 : $etat = "BRAVO !"; break;
    case 8 : $etat = "GG !"; break;
    case 9 : $etat = "INCROYABLE !"; break;
    case 10 : $etat = "PARFAIT !"; break;
}

echo("<br>".$etat);

?>