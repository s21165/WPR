<html>
    
<head></head>
<body>
 <?php 
extract($_POST);
if(isset($save))
{

	switch($problem)
	{
		case '+':
		$res=$n1+$n2;
		break;
		
		case '-':
		$res=$n1-$n2;
		break;
    
		
		case '*':
		$res=$n1*$n;
		break;
		
            
            
         case'/':
            if ($n2 != 0)
                $res=$n1/$n2;
            else 
                echo("<U can't divide by 0>");
            break;
            
            
	}
	
}

?>
<!DOCTYP html>
<html>
	<head>
		
	</head>
	<body>
		<form method="post">
		
				 <h>Enter your math problems</h>
            <br>
		
				
				<th><input type="number" name="n1" value="<?php  echo @$n1;?>"/>
			
				
				<input type="number" name="n2" value="<?php  echo @$n2;?>"/>
			
				
				
				<select name="problem">
					<option>+</option>
					<option>-</option>
					<option>*</option>
                    <option>/</option>
				</select>
				<input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/>
			
				
			
				<input type="submit" 
				name="save" value="Show Result"/>
				
			
	
		</form>
	</body>
</html>
    
    </body>

</html>