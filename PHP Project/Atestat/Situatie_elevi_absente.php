<style>
table {
	border-collapse: collapse;
	margin: 5px auto;
	width: 60%;
	
}
@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
p {
	font-size: 30px;
	text-align: center;
	color: white;
	font-family: 'Indie Flower', cursive;
}
body {
	background-image: url("8.jpg");
	background-attachment:fixed;
	background-size:cover;
	}	
	
</style>
<?php
$server='localhost';
$user='GABRIEL';
$parola='parola';
$bd='GABRIEL';

$conexiune=@mysqli_connect ($server,$user,$parola,$bd);

$conexiune
or
die ("<p>Eroare la conectare!</p>");

echo "<p><i>Situație absențe elevi</p></i><br>";

$interogare='select nume, prenume, disciplina, semestru, data, absenta from elevi, absente where elevi.id=absente.id';

$rezultat=mysqli_query($conexiune,$interogare);

if(mysqli_num_rows($rezultat) > 0){
  $tabel_html = '<table border="1" cellpadding="20" cellspacing="20"><tr align="center" bgcolor="aqua"><td><font color="#6666FF"><b>Nume</b></td>
  <td><font color="#6666FF"><b>Prenume</b></td>
  <td><font color="#6666FF"><b>Disciplina</b></td>
  <td><font color="#6666FF"><b>Semestru</b></td>
  <td><font color="#6666FF"><b>Data</b></td>
  <td><font color="#6666FF"><b>Tip absență</td></b></tr>';

  
  while($rand = mysqli_fetch_array($rezultat)) {
	  
    $tabel_html .= '<tr align="center"><td bgcolor="#33CCFF">' .$rand['nume']. '</td><td bgcolor="#33CCFF">' .$rand['prenume']. '</td><td bgcolor="#33CCFF">' .$rand['disciplina']. '</td><td bgcolor="#33CCFF">' .$rand['semestru']. '</td><td bgcolor="#33CCFF">' .$rand['data']. '</td><td bgcolor="#33CCFF">' .$rand['absenta']. '</td></tr>';
  }

  
  $tabel_html .= '</table>';
}
echo $tabel_html;
mysqli_free_result($rezultat);
mysqli_close ($conexiune);
?>



	

