<?php
function con(){
		$conexion = mysqli_connect('localHost','root','','laravel');
        $conexion -> set_charset("utf8");
	return $conexion;
}
        
function dias($fecha){
$conexion = con();
  date_default_timezone_set('america/mexico_city');
  $time = time();
  $fechaHoy = date('Y-m-d', $time);

$con = "SELECT DATEDIFF('$fechaHoy','$fecha') AS DateDiff ";
$result2=mysqli_query($conexion,$con);
     while($milista=mysqli_fetch_array($result2)){
  echo "Posted :<b>".$milista['DateDiff']." days ago"; 
     }
}

function perks($perks){
    $list = explode(";", $perks);
    foreach($list as $perk) {
        if($perk != "" && $perk != " "  ){
    echo "<img src='../images/".trim($perk).".png' width='50px' height='50px' title='$perk'>";
        }
}
 
    
}

function perksD($perks){
    $list = explode(";", $perks);
    foreach($list as $perk) {
        if($perk != "" && $perk != " "  ){
    echo "<img src='../images/".trim($perk).".png' width='80px' height='80px' title='$perk'>";
        }
    }
?>
<ul class="list-group">
<?php
        /* foreach($list as $perk) {
        if($perk != "" && $perk != " "  ){
    echo "<li class='list-group-item'>".trim($perk)."</li>";
        }
} */
    
?>
</ul>
<?php
    
}
?>