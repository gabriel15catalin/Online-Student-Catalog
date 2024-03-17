<style>
@import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@1,300&family=Dancing+Script&display=swap');
h1 {
	font-size: 40px;
	text-align: center;
	color: cyan;
	font-family: 'Comic Neue', cursive;
	}
div#unu {
	position: absolute;
	top: 20%;
	bottom: 0px;
	left: 40%;
	right: 60%;
	width: 40%;
	height: 40%;
}
div#doi {
	position: absolute;
	top: 30%;
	bottom: 0px;
	left: 55%;
	right: 0%;
	width: 40%;
	height: 40%;
}	

body {
	background-image: url("8.jpg");
	background-attachment:fixed;
	background-size:cover;
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

<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$server='localhost';
	$user='GABRIEL';
	$parola='parola';
	$bd='GABRIEL';
	$conexiune=mysqli_connect ($server,$user,$parola,$bd);
	$interogare='delete from elevi where id=';
	$interogare.=$_POST['id'];
	mysqli_query ($conexiune, $interogare);
	if (mysqli_affected_rows($conexiune)!=1)
		echo "<h1>Eliminare fara succes!</h1>";
	else
		echo "<h1>Eliminare cu succes!</h1>";
	mysqli_close ($conexiune);
}
else
{
?>
<h1>Eliminare elevi transferati</h1>
<form method='post' action='Eliminare_elevi_transferati.php' 
onsubmit="return confirm('Esti sigur ca vrei sa stergi persoana selectata?')">
<div id='unu'>
<select name='id'>
<?php
$server='localhost';
$user='GABRIEL';
$parola='parola';
$bd='GABRIEL';
$conexiune=mysqli_connect ($server,$user,$parola,$bd);
$interogare='select * from elevi';
$rezultat=mysqli_query($conexiune,$interogare);
while($linie=mysqli_fetch_assoc($rezultat))
{
	echo "<option value='".$linie['id']."'>";
	echo $linie['nume']," ",$linie['prenume']," ";
	
	echo"</option>";

}
mysqli_free_result($rezultat);
mysqli_close($conexiune);
?>
</select>
</div>
<div id='doi'>
<button class="btn" type='submit'>
        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        </svg>
        <span>Ștergeți persoana selectată!</span>
      </button>
  </div>
</form>
<?php
}
?>
</html>