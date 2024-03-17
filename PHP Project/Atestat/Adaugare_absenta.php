<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
	$server='localhost';
	$user='GABRIEL';
	$parola='parola';
	$bd='GABRIEL';
	$conexiune=mysqli_connect ($server,$user,$parola,$bd);
	$conexiune
	or
	die ("<b>Eroare la conectare!</b>");
$interogare='insert into absente values (';
$interogare.=$_POST['id'].",";
$interogare.="'".$_POST['disciplina']."',";
$interogare.="'".$_POST['semestru']."',";
$interogare.="'".$_POST['data']."',";
$interogare.="'".$_POST['tip_absenta']."')";
mysqli_query($conexiune, $interogare);
if (mysqli_affected_rows($conexiune)==1)
echo "Adăugare cu succes!<br>";
else
echo "Adăugare fără succes!<br>";
mysqli_close ($conexiune);
}
else {
?>
<html>
<head>
<style type="text/css">
body {
	background-image: url("8.jpg");
	background-attachment:fixed;
	background-size:cover;
	}
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
h1 {
	font-size: 40px;
	text-align: center;
	color: #33CCFF;
	font-family: 'Dancing Script', cursive;
}	
div#unu {
	position: absolute;
top: 90px;
bottom: 400px;
left: 20%;
right: 80%;
width: 50%;
height: 40%;
}
div#doi { 
position: absolute;
top: 75%;
bottom: 0%;
left: 40%;
right: 0%;
width: 50%;
height: 40%;
}

@import url('https://fonts.googleapis.com/css?family=Lato:100&display=swap');

.container {
  width: 400px;
  height: 400px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  justify-content: center;
  align-items: center;
}

.center {
  width: 180px;
  height: 60px;
  position: absolute;
}

.btn {
  width: 180px;
  height: 60px;
  cursor: pointer;
  background: #00FFFF;
  border: 1px solid #91C9FF;
  outline: none;
  transition: 1s ease-in-out;
}

svg {
  position: absolute;
  left: 0;
  top: 0;
  fill: none;
  stroke: #fff;
  stroke-dasharray: 150 480;
  stroke-dashoffset: 150;
  transition: 1s ease-in-out;
}

.btn:hover {
  transition: 1s ease-in-out;
  background: #4F95DA;
}



.btn span {
  color: white;
  font-size: 18px;
  font-weight: 100;
}
</style>
</head>
<body>
<h1 align='center'>Adăugare absență</h1>
<div id='unu'>
<form method='post' action='Adaugare_absenta.php' align='center'>
ID <input type='text' name='id'><br> <br> <br>
DISCIPLINA: <input type='text' name='disciplina'><br> <br> <br> <br>
SEMESTRU:<input type='text' name='semestru'><br> <br> <br>
DATA:<input type='text' name='data'><br> <br> <br>
TIP ABSENTA:<input type='text' name='tip_absenta'><br> <br> <br>
<button class="btn" type='submit'>
        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        </svg>
        <span>Adăugați!</span>
      </button>

</form>
</div>
</body>
<?php
}
?>