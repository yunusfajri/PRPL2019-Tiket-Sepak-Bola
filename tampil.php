<?php 
include_once ("config.php"); 
$result = mysqli_query($mysqli, "SELECT * FROM club ORDER BY id_club DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form pencarian piala presiden</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <h1>football ticket league indonesia</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="tampil.php">Liga 1</a>
  <a href="#">pembelian tiket</a>
  <a href="#">cara pembelian</a><br>
    <form method="post" action="pencarian.php" align="right">
        <input type="text" name="cari">
        <input type="submit" name="kirim" value="cari">
    </form> 
</div><br>
 <h2 align="center">Daftar TIM LIGA 1</h2> 
<table border="5" align="center">
 <thead>
     <tr>
        <th>Nama club</th> 
        <th>Kota club</th>
    </tr>
 </thead>
 <tbody>
 <?php  
while($user_data = mysqli_fetch_array($result)) {         
 echo "<tr>";
 echo "<td>".$user_data['nama_club']."</td>";
 echo "<td>".$user_data['asal_club']."</td>";  
 echo "</tr>";
 //echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
}
?>
 </tbody>
</table>

</body>
</html>