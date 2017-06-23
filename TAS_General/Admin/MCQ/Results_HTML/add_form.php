
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
	
	    <tr>
            <td>User Id</td>
            <td><input type='text' name='uid' class='form-control' placeholder='EX : 2219' required /></td>
        </tr>
 
        <tr>
            <td>Program Id</td>
            <td><input type='text' name='html_id' class='form-control' placeholder='EX : 02' required /></td>
        </tr>
 
        <tr>
            <td>Program Description</td>
            <td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='html_desc' placeholder='EX : class A {' required></textarea> </td>
        </tr>
 
       		 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
