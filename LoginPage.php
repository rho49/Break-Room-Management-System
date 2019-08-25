<?php
	
	include("Includes/Config.php");
    include("Includes/Classes/Account.php");
    include("Includes/Classes/Constants.php");

    $account = new Account($con);
    
    include("Includes/Handlers/LoginHandler.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> The Break Room </title>
	<style type="text/css">
		body {
				background-image: url("/Project/BR10.jpg");
				background-repeat: no-repeat;
				background-size: cover;
			}
		button {
    background-color: powderblue;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

		button:hover {
    opacity: 0.8;
}
		.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

	</style>
</head>
<body>
	<center>
		<h1 style="color:lavenderblush;font-family:Ariel black;">
			<b>
				<i>
					Welcome to the House of Shatter!
				</i>
			</b>
		</h1>
	</center>
	<form method="POST" action="LoginPage.php">
		<center>
			<p style="color:lavender;">
			
			<label for="breakname"><b> Break-Name: </b></label>
			<input id="breakname" type="text" name="breakname" size="15" maxlength="30" required />
			</p>
			<p style="color:lavender;">
				
			<label for="password"><b> Password: </b></label>
			<input id="password" type="password" name="password" size="15" maxlength="30" required />
			</p>

			
			
			<p style="color:lavender;">
			<b> Choose a day: </b>
			<select name="Day" id="Day">
				<option disabled="disabled" selected="selected">DAY</option>
			  	<option value="Today" name="Day" >Today</option>
  				<option value="Tomorrow" name="Day" >Tomorrow</option>
  				<option value="Day after tomorrow" name="Day">Day after Tomorrow</option>
			</select>
			</p>
		<p style="color:lavender;">
			<b> Choose a slot: </b>
			<select name="slot" id="slot">
				<option disabled="disabled" selected="selected">SLOT</option>
			  	<option value="11:00">11:00</option>
  				<option value="11:30">11:30</option>
  				<option value="12:00">12:00</option>
  				<option value="12:30">12:30</option>
  				<option value="13:00">13:00</option>
  				<option value="13:30">13:30</option>
  				<option value="14:00">14:00</option>
  				<option value="14:30">14:30</option>
  				<option value="15:00">15:00</option>
  				<option value="15:30">15:30</option>
  				<option value="16:00">16:00</option>
  				<option value="16:30">16:30</option>
  				<option value="17:00">17:00</option>
  				<option value="17:30">17:30</option>
  				<option value="18:00">18:00</option>
  				<option value="18:30">18:30</option>
  				<option value="19:00">19:00</option>
  				<option value="19:30">19:30</option>
  				<option value="20:00">20:00</option>
  				<option value="20:30">20:30</option>
  				<option value="21:00">21:00</option>
  				<option value="21:30">21:30</option>
  				<option value="22:00">22:00</option>
  				<option value="22:30">22:30</option>
 			</select>
		</p>
		<!--button type="button" onclick="location.href='/Project/Booking Successful.php'"> Book Now </button-->
		<div><span style="color: blue"><h1><?php echo $account->getError(Constants::$loginfailed); ?></h1></span><br></div>
		<button type="submit" name="loginbtn" id="loginbtn">Book Now</button>
    	<label>
    	<button type="submit" name="profilebtn" id="profilebtn">View Your Profile</button>
    	</label>
    	<label>
      	<b><input type="checkbox" checked="checked" name="remember"> Remember me </b>
    	</label>
		</center>
		<center>
		<form action="/Project/HomePage.php">
    	<button type="submit" class="cancelbtn" name="cancelbtn">Cancel</button>
		</form>
    	<span><b><a href="#"> Forgot Password?</a></b></span>
    	</center>
    	<br>

    	<h2 style="color: blue"> Special note: </h2>
    	<table style="color: aqua" class="centered">
                        <tr>
                            <th>Session</th>
                            <th>Time*</th>
                            <th>Price(Cash only)</th>
                        </tr>
                        <tr>
                            <td>Need a Break</td>
                            <td>2 minutes</td>
                            <td>Rs. 300</td>
                        </tr>
                        <tr>
                            <td>Lash Out</td>
                            <td>3 minutes</td>
                            <td>Rs. 400</td>
                        </tr>
                        <tr>
                            <td>Demolition</td>
                            <td>5 minutes</td>
                            <td>Rs. 500</td>
                        </tr>
                </style>
        </table>
		<p class="small" style="color: aqua">*Additional time increments are available at additional cost with a maximum of 15 minutes. However, our staff has full authority to deny permission to do so.</p>
		<p class="small" style="color: aqua">*You can purchase more items to break in the room, in addition to the basic Break session (based on availability).</p>
		<br>

		<fieldset>
			<legend style="text-align: right;"><strong><h3 style="color: aqua"> Items and Rates </h3></strong></legend>
			<table  style="color: aqua"; align="right";>
				<tr>
					<th> Article </th>
					<th> Cost </th>
				</tr>
				<?php
					$con = mysqli_connect("localhost", "root", "", "BreakRoom");
					$sql = "CALL Proc()";
					$result = mysqli_query($con,$sql) or die("Error: $sql. ".mysql_error($con));
					$row = mysqli_fetch_assoc($result);
					do { ?>

					<tr>
						<td> <?php echo $row['Article']; ?> </td>
						<td> <?php echo $row['Cost']; ?> </td>
					</tr>
				    <?php } while($row = mysqli_fetch_assoc($result)) ?>
			</table>
		</fieldset>

	</form>
</body>
</html>