<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<form Method ="POST" >
<label>Id utilisateur : <label/>
<input name="idname" />
<label id="espace">De combien à combien ? : </label>
<input name="hi" >
<input name="nb" >
<input type="submit" value="Envoyer" text="Envoyer" name="Envoyer" /> </br>
</form>

</div>

<br/>
<?php
if(!empty($_POST))
{
if($_POST['Envoyer']=="Envoyer")
{
$lien = "http://mgl.skyrock.net/art/PRIP.{$_POST['idname']}.";
$lien2 = "http://www.skyrock.com/m/messages/write_message.php?dest={$_POST['idname']}";
$nb = $_POST['nb'];
$hi = $_POST['hi'];
{
echo '<a href="'.$lien2.'"></a>';
}

for($i=$hi; $i<=$nb-1; $i++)
{
echo '<img src="'.$lien.$i.".2.jpg".'" alt="Smiley face" height="100" width="100"  onclick=\'window.location = "'.$lien.$i.'.2.jpg"\'>';
}
if(!empty($_POST['hi']>$nb))
{
echo "tu as bugué lol, revois ton calcul !";
}
}
}


?>
</body>
</html>