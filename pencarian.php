<?php 
include_once ("config.php");
$key = $_POST['cari'];
// echo "Keyword pencarian = $key";
echo "<br>";
$result =mysqli_query($mysqli, "SELECT * FROM club WHERE nama_club LIKE '%$key%' ");
	// $SQL = mysqli_query($connect,$QueryString); 
?>

<table border="1">
		<tr>
            <th>Nama club</th> 
      		<th>Kota club</th> 
		</tr>
		<?php
		while($user = mysqli_fetch_array($result)) {
				echo("<tr>");
				//echo "<td>".$user['id']."</td>";
				echo "<td>".$user['nama_club']."</td>";
				echo "<td>".$user['asal_club']."</td>";
				echo "</tr>";
			}
		?>	
	</table>