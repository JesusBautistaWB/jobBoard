<style>
    td{
border: hidden;
    }
p{

text-align: justify;
    }

  

</style>
      <div class="limiter" >
    <div class="container-login100">
<form> 
 
<form>   
    
     
	<table>
        <?php 
        include("../functions/phpfunctions.php");
        $palabra = $_REQUEST['palabra'];
        
        $conexion = con();
	    $sql="SELECT *FROM laravel.jobs WHERE id = '$palabra'";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr >
            <td ><img  src="../images/company.png" width="50px" height="50px"></td>
            <td><?php echo "<label class='titlePB'>".$mostrar['Job_Title'].
             "</label><br><label class='titleComp'>".$mostrar['Company_Name']."</label>"; "<b>".$mostrar['Job_Type']."</b><br>";
            
                ?></td>
        <td colspan="3"><?php perks($mostrar['Perks']) ?></td>	
        </tr>
     
        <tr>
            	<td><b><?php 
            echo $mostrar['Job_Type'];
                    ?></b></td>
            <td><b><?php 
            echo $mostrar['Location_Full'];
                ?></b></td>
            <td><b><?php
            echo $mostrar['Seniority_slug'];
                ?></b></td>
			<td><?php 
            dias($mostrar['Date_Published']);
                ?></td>
           
		</tr> 
        <tr>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm" disabled>Apply</button>
            </td><td colspan="3"></td></tr>
        <tr>
        <td colspan="4"><?php echo "<label><b>About The Job</b></label><br>"; ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
            <a href="#" class="link-danger">Read more...</a>
            </td>
        </tr>
        
          <tr>
        <td colspan="4"><?php echo "<label><b>About The Company</label></b><br>"; ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
        </tr>
        <tr>
        <td>
            <button type="button" class="btn btn-outline-danger btn-sm" disabled>See Company Profile</button>
            </td>
        </tr>
        <tr>
        <td colspan="3"></td>
            <td><button onClick="window.location.reload();" type="button" class="btn btn-secondary btn-sm">Back To Search</button></td>
        </tr>
       
	<?php 
	}
	 ?>
 
           </table>

      
          </div>
          </div>
  