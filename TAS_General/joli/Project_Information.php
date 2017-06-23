<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='ProjectInfo_Form' action='#'>
 
    <table class='table table-bordered'>
 		<!-- <input type='hidden' name='id' value='' /> -->
		<tr>
            <td>Project ID:</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['JobId']; ?>' required readonly></td>
        </tr>
		
        <tr>
            <td>Project Name:</td>
            <td><input type='text' name='admin_id' class='form-control' value='<?php echo $row['AdminId']; ?>' required readonly></td>
        </tr>
		
		 <tr>
            <td>Project Description:</td>
            <td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='jobDesc'><?php echo $row['JobDesc']; ?></textarea></td></td>
        </tr>
		
		 <tr>
            <td>Project Status:</td>
            <td> <select>
				  <option value="volvo">Volvo</option>
				  <option value="saab">Saab</option>
				  <option value="mercedes">Mercedes</option>
				  <option value="audi">Audi</option>
				</select> </td>
        </tr>
		
		 <tr>
            <td>Required By:</td>
            <td><input type='text' name='yearOfExp' class='form-control' value='<?php echo $row['YearOfExp']; ?>'</td>
        </tr>
 
        <tr>
            <td>Team Strength:</td>
			<td><input type='text' name='admin_id' class='form-control' value='<?php echo $row['AdminId']; ?>' required readonly></td>
        </tr>
		
		  <tr>
            <td>Available No:</td>
			<td><input type='text' name='admin_id' class='form-control' value='<?php echo $row['AdminId']; ?>' required readonly></td>
			</tr>
        	 
			 <tr>
            <td>Required No:</td>
			<td><input type='text' name='admin_id' class='form-control' value='<?php echo $row['AdminId']; ?>' required readonly></td>
			</tr>
			 
			 
			  <tr>
            <td>Skills Required:</td>
            <td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='jobDesc'><?php echo $row['JobDesc']; ?></textarea></td></td>
        </tr>
		
		 <tr>
            <td>Year Of Exp:</td>
            <td> <select>
				  <option value="one">1</option>
				  <option value="two">2</option>
				  <option value="three">3</option>
				  <option value="four">4</option>
				</select> </td>
        </tr>
		 
     
 
    </table>
</form>
     
