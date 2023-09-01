<?php 
  include("phpfunctions.php");
$palabra = $_REQUEST['palabra'];
$campo = $_REQUEST['campo'];

        $conexion = con();
 $sql="SELECT *FROM laravel.jobs WHERE ".$campo." LIKE '%$palabra%'"; 
if($campo == "Date_Published"){
     $sql="SELECT *FROM laravel.jobs ORDER BY Date_Published Desc";
}
if($campo == "Name"){
     $sql="SELECT *FROM laravel.jobs ORDER BY Job_Title ASC";
}


		$result=mysqli_query($conexion,$sql);
?><tr>
<td colspan="4"><b><?php
    if($palabra != ""){
    echo "SEARCH RESULTS TO <u>".$campo." LIKE ".$palabra."</u>";
    }
    ?></b></td></tr>
<?php
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr onclick="details('<?php echo $mostrar['id']; ?>')"><td><img  src="../images/company.png" width="50px" height="50px"></td>
            <td  ><?php echo "<label class='titleP'>".$mostrar['Job_Title'].
             "</label><br>";
            if($campo != "Job_Title" && $palabra != ""){ echo "<b>(".$mostrar[$campo].")</b><br>"; }
             echo "<label class='titleComp'>".$mostrar['Company_Name']."</label><br>";
            dias($mostrar['Date_Published']);
                ?></td>
            <td><?php echo $mostrar['Job_Type'] ?></td>
			<td><?php perks($mostrar['Perks']) ?></td>			
		</tr> 
	<?php 
	}
mysqli_close($conexion);
	 ?>
 