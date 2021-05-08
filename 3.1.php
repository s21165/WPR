<html>
    
<head></head>
<body>
           <?php require  '3.1function.php';?>
 <?php 
    
extract($_POST);
if(isset($save))
{

	switch($problem)
	{
		case '+':
            add($n1,$n2,$res);
            
		
		break;
		
		case '-':
		  sub($n1,$n2,$res);
		break;
    
		
		case '*':
		  multi($n1,$n2,$res);
		break;
		            
            
         case'/':
            if ($n2 != 0)
                div($n1,$n2,$res);
            else 
                echo("<U can't divide by 0>");
            break;
            
            
	}
	
}

?>
     <?php require  '3.1form.php';?>
 
    
 

    
  