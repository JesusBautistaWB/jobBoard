<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Job Board</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="css/stylesMenu.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
      <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="js/sistema.js"></script>

</head>
  
<body>
      <div id="wrapper" >
      <div class="limiter" >
    <div class="container-login100">
<form>
     <div class="row">   
    <div class="col">
        <label class="form-label" ><b>Search by filters:</b></label>
      
    </div>
    </div>
       <div class="row">   
    <div class="col">
      <input  placeholder="Functional Area" onkeyup="buscarKeyword(this.value,'Functional_Area')" 
    style="font-size: 12px"
      class="form-control">
      </div>
           <div class="col">
      <input  placeholder="Seniority" onkeyup="buscarKeyword(this.value,'Seniority')" 
      style="font-size: 12px"
      class="form-control">
      </div>
           <div class="col">
      <input  placeholder="Perks" onkeyup="buscarKeyword(this.value,'Perks')" 
     style="font-size: 12px"
      class="form-control">
      </div>
           <div class="col">
      <input  placeholder="Location" onkeyup="buscarKeyword(this.value,'Location_Full')" 
      style="font-size: 12px"
      class="form-control">
      </div>
    </div>
    <label class="form-label"></label>
    
  <div class="row border-top  border-primary">   
    <div class="col-7">
        <label class="form-label" ><b>Search by keyword:</b></label>
      <input  placeholder="keyword" onkeyup="buscarKeyword(this.value,'Job_Title')" 
      style="font-size: 12px"
      class="form-control">
      </div>
     <div class="col">
      <label class="form-label" > Order by:</label> 
       <button type="button" onclick="buscarKeyword('','Date_Published')" class="btn btn-outline-danger btn-sm">Recent</button>
      </div>
      <div class="col">
    <label class="form-label" >Order by:</label> 
     <button type="button" onclick="buscarKeyword('','Name')" class="btn btn-outline-secondary btn-sm">Companies A-Z</button>
      </div>
  </div>  
<form>           
       <div id="div1">  
	<table id="adminTable">
        <?php 
           include("../functions/phpfunctions.php");
        $conexion = con();
	    $sql="SELECT *FROM laravel.jobs";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr onclick="details('<?php echo $mostrar['id']; ?>')"><td ><img  src="../images/company.png" width="50px" height="50px"></td>
            <td><?php echo "<label class='titleP'>".$mostrar['Job_Title'].
             "</label><br><label class='titleComp'>".$mostrar['Company_Name']."</label><br>";
            dias($mostrar['Date_Published']);
                ?></td>
            <td><?php echo $mostrar['Job_Type'] ?></td>
			<td><?php perks($mostrar['Perks']) ?></td>			
		</tr> 
	<?php 
	}
        mysqli_close($conexion);
	 ?>
 
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
elems.forEach(function(html) {
  var switchery = new Switchery(html);
});                   
</script>
           </table>
  </div>
          </div>
          </div>
    </div>
</body>
</html>