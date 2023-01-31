<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_NINJA</title>
</head>
<body>

<form action="traitement.php" method="post">
  <div class="frm_user">
    <label for="">Nom</label><input type="text" name="input_nom" placeholder="Entrer votre nom svp" /><br>
    <label for="">Yellow</label><input type="checkbox" name="select_colour[]" value="Yellow" /><br>
    <label for="">Orange</label><input type="checkbox" name="select_colour[]" value="orange" /><br>
    <label for="">blue</label><input type="checkbox" name="select_colour[]"   value="blue" /><br
    <label for="">white</label><input type="checkbox" name="select_colour[]"  value="white" /><br>
    <input type="submit" name="btnValider" />
 </div>
 </form>
</body>
</html>