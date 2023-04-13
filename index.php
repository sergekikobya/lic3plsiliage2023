<!DOCTYPE html>
<html>
    <head>
        <title>Exercices PHP</title>
</head>
<body>
<?php
//Commentaire mono-ligne
/* Comentaire
multi-ligne */
//Exercices 01 : concantenation
/* 
$n1 = 20;
$n2 = 35;

echo $n1.' + '.$n2.' ='.$n1+$n2;
*/
// exercice 2: operation 
/*$nombrepiece = 337;
$bouteillecart = 6;
echo intval($nombrepiece/$bouteillecart).' cartons et '.$nombrepiece%$bouteillecart.'bouteilles';

*/

//ex3 condution

/*$sexe = 'm';
if($sexe =='m')
{
    echo'vous ete masculin';
}
else
{
    echo'vous avez une autre personalité';
}*/
 /*$sexe = 'f';
switch($sexe) 
{
    case 'm':
        echo 'vous etes un homme';
        break;
        case 'f':
            echo 'vous etes une femme';
            break;
            default:
            echo 'sexe inconnu';
}
*/
//exercice4 boucle
/*$cont=0;
echo"<ol>";

while ($cont<10){
    echo'<li>hello world!</li>';
    $cont++;

}
echo"</ol>";*/

/*$cont=0;
echo"<ol>";
for($cont=0;$cont<=10;$cont++){
    echo'<li>hello world!</li>';

}
echo"</ol>";
*/
// exercices 5 traduction 
/*
function traduction($a){
    if($a=='lundi'){
        echo'monday';
        
    }

   else if($a=='mardi'){
        echo'thursday';

}
else if($a=='mercredi'){

    echo'wensday'}
    else if($a=='jeudi'){

        echo'thurday'}
        else if($a=='vendredi'){

            echo'friday'}
            else if($a=='samedi'){

                echo'week end'}
            
*/

    
?>
<form method="post" action="ttt.php">
    <label for="nomCP">Nom CP:</label>
    <input name="nomCP" id="nomCP" type="password">
    <input type="submit" name="tester" value="tester">

</form>

</body>
</html>