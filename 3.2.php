<html>
	<body> 
        <form method="post">
            <label for="fname">First name:</label>
            <input type="textarea"  name="fname"><br>
            <label for="lname">Last name:</label>
            <input type="textarea"  name="lname"><br>
            <input type="submit"
                   name="save" value="Show Result"/>
        </form>
    </body>
</html>
<?php
extract($_POST);
if(isset($save))
{
    if($fname!=null && $lname!=null ){
        $File = "3.2text.txt";
        $Handle = fopen($File, 'a');
        fwrite($Handle, $fname." ".$lname. "\n");
        print "Data Written";
        fclose($Handle);
    } else  echo"U need to enter both values for saving";
}
?>