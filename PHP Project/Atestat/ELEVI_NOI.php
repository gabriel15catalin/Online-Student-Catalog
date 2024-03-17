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
$interogare='insert into elevi values (';
$interogare.=$_POST['id'].",";
$interogare.="'".$_POST['nume']."',";
$interogare.="'".$_POST['prenume']."')";
mysqli_query($conexiune, $interogare);
if (mysqli_affected_rows($conexiune)==1)
echo "<h1>Adăugare cu succes!</h1>";
else
echo "<h1>Adăugare fără succes!</h1>";
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
<h1 align='center'>Adăugare elev nou</h1>
<div id='unu'>
<form method='post' action='ELEVI_NOI.php' align='center'>
ID <input type='text' name='id'><br> <br> <br>
NUME: <input type='text' name='nume'><br> <br> <br> <br>
PRENUME:<input type='text' name='prenume'><br> <br> <br>
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
