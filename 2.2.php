<form action="2.2.php" method="post">
    <label>
        
            People 
            <td><select name="ppl" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
					<option value="5">5</option>
                </select>
            
            <br>
        <div>        
            Name
           <input type="text" name="name" required>
            <br>    
           Surname
            <input type="text" name="surname" required>
             <br>      
           City
            <input type="text" name="city"  >
            <br>
            Post Code
            <input type="text" name="code" pattern="[0-9]{2}-[0-9]{3}" maxlength="6" required>
            <br>
            Street
         <input type="text" name="street" required>
            <br>
            Bulding number
            <input type="text" name="building" required>
            <br>
           Phone number(9 digit)
            <input type="tel" name="tn" size="10"  pattern="[0-9]{9}"  required >
            <br>
            Email
            <input type="email" name="email" required >
            <br>
           From 
            <input type="date" name="D1"  required>
            <br>
            Untill
            <input type="date" name="D2"  required>
            <br>
            Arrival time
            <input type="time" name="H1" required>
            <br>
            Departure time
            <input type="time" name="H2" required>
            <br>
            Kid
            <input type="checkbox" name="kid" >
            <br>
           Air-conditioning
            <input type="checkbox" name="ac" >
           Smoking room
            <td><input type="checkbox" name="smoke">
            <br>
            <input type="submit" value="SEND"/>
                </div>
    </label>
    
</form>
    

<?php
if (isset($_POST["ppl"]) && isset($_POST["name"]) && isset($_POST["surname"]) &&
    isset($_POST["tn"]) && isset($_POST["D1"]) && isset($_POST["D2"])) {
    $ppl = $_POST["ppl"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $city = $_POST["city"];
	$code = $_POST["code"];
	$street = $_POST["street"];
	$building = $_POST["building"];
    $tn = $_POST["tn"];
    $email = $_POST["email"];
    $D1 = $_POST["D1"];
    $D2 = $_POST["D2"];
    $H1 = $_POST["H1"];
	$H2 = $_POST["H2"];
	

    echo (" <div><ul> People number:" . $ppl . "<br>" . "<br>" .    "<li>Name:" . --$name . "<br>" .
        "<li>Surname:" .$surname . "<br>" .
        "<li>City:" . $city . "<br>" .
		"<li>Post code:" . $code . "<br>" .
		"<li>Street:" . $street . "<br>" .
		"<li>Bulding number:" . $building . "<br>" .
        "<li>Phone number:" . $tn . "<br>" .
        "<li>Email:" . $email . "<br>" .
        "<li>From:" . $D1 . "<br>" .
        "<li>Until:" . $D2 . "<br>" .
        "<li>Arrival time:" . $H1 . "<br>" .
		"<li>Departure time:" . $H2 . "<br> <div>"
          
    );


    if (isset($_POST["kid"])) {
        echo "Kid" . "<br>";
    }
    if (isset($_POST["AC"])) {
        echo "AC" . "<br>";
    }
    if (isset($_POST["smoke"])) {
        echo "Smoking room" . "<br>";
    }


	



	}
?>