<html>
	<body> 
        Enter input that u want to save <br>
        <form method="post">
            <input type="textarea"  name="fname"><br>
            <input type="submit"
                   name="save" value="Show Result"/>
        </form>
    </body>
</html>
<?php
extract($_POST);
if(isset($save))
{
    if($fname!=null){
        $File = "3.2text.txt";
        $Handle = fopen($File, 'a');
        fwrite($Handle, $fname. "\n");
        print "Data Written";
        fclose($Handle);
    }
}
?>