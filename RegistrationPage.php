<?php
    include("Includes/Config.php");
    include("Includes/Classes/Account.php");
    include("Includes/Classes/Constants.php");

    $account = new Account($con);
    
    include("Includes/Handlers/RegisterHandler.php");

    function getInputValue($name)
    {
        if(isset($_POST[$name]))
        {
            echo $_POST[$name];
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<div>
    <hr>
    <table bgcolor="lightcyan" border="1" width="100%">
    <tr>
        <td width="150"><img src="/Project/TheBreakRoom.jpg" alt="Image not found" 
            width="240" height="150"/></td>
    <th><center><h1 style="color:black">Everything inside starts shattering from here!</h1></center></th>
    </tr>
    </table>
</div>
  <div>
       <h1><center> Join our elite group! </center></h1>
       <p><center> Fill this once. Book and break as many times as you want. </center></p>
       <hr>
       <form id="Registrationform" action="RegistrationPage.php" method="POST">

        <span style="color: red"><?php echo $account->getError(Constants::$usernameerror); ?></span><br>
        <label for="username"><b>Name: </b></label>
        <input id="username" name="username" type="text" placeholder="Enter your name" value="<?php getInputValue('username') ?>" required>

        <span style="color: red"><?php echo $account->getError(Constants::$breaknameerror); ?></span><br>
        <span style="color: red"><?php echo $account->getError(Constants::$breaknameused); ?></span><br>
        <label for="breakname"><b>Break-Name: </b></label>
        <input id="breakname" name="breakname" type="text" placeholder="Enter a funky name for a swing" value="<?php getInputValue('breakname') ?>" required>

        <label for="sex"><b> Sex: </b></label>
        <input id="sex" name="sex" type="radio"  value="M"> M
        <input id="sex" name="sex" type="radio" value="F"> F
        <input id="sex" name="sex" type="radio" value="O"> T
        </br>
        </br>

        <label for="number"><b>Age: </b></label>
        <input id="number" name="age" type="text" placeholder="Enter your age" value="<?php getInputValue('number') ?>" required>

        <span style="color: red"><?php echo $account->getError(Constants::$ageerror); ?></span><br>
        <label for="phnumber"><b>Phone: </b></label>
        <input id="phnumber" name="phnumber" type="text" placeholder="Enter your contact number" value="<?php getInputValue('phnumber') ?>" required>


        <span style="color: red"><?php echo $account->getError(Constants::$emailerror); ?></span><br>
        <label for="email"><b>Email ID: </b></label>
        <input id="email" name="email" type="text" placeholder="Enter Email" value="<?php getInputValue('email') ?>" required>

        <span style="color: red"><?php echo $account->getError(Constants::$passworderror1); ?></span><br>
        <span style="color: red"><?php echo $account->getError(Constants::$passworderror2); ?></span><br>
        <span style="color: red"><?php echo $account->getError(Constants::$passworderror3); ?></span><br>
        <label for="psw"><b>Password: </b></label>
        <input id="psw" name="psw" type="password" placeholder="Enter Password" value="<?php getInputValue('psw') ?>" required/>

        <label for="pswrepeat"><b>Repeat Password</b></label>
        <input id="pswrepeat" name="pswrepeat" type="password" placeholder="Repeat Password" value="<?php getInputValue('pswrepeat') ?>" required>
    <hr>
    <h2> Instructions: </h2>
    </br>
    <ul> 
        <li> Those who are under 14, sufferers of severe to moderate Health conditions, or are a danger to themselves or others are NOT permitted to participate in the Break Room. </li>
        <li> The Break Room has 0 tolerance policy for those who abuse and/or ignore BR’s rules and regulations or falsify documents upon entry. We will work with any and all enforcement authorities, if needed. </li>
        <li> The Break Room does not claim to be a mental help or medical facility; we do not treat, give diagnosis or provide medical therapy of any kind. We are classified as entertainment only, if you feel that you have any mental or medical issues that need to be treated please see a licensed physician. Thank you! </li>
        <li> Release and acknowledgment waivers are mandatory and will be required to sign before entry. </li>
        <li> Maximum of two persons are allowed at a time in a room. </li>
        <li> Arrive a little early than your booking time. Late arrival may result in cancellation of your slot. </li>
        <li> Wear the costume that we give that cover your feet like boots, sneakers etc. </li>
        <li> Bring an ID PROOF (Driver’s license, passport, Adhaar card, School or College ID). </li>
        <li> Wear the safety gear provided by us and sign the waiver. </li>
        <li> Our staff reserves the right to remove items brought in by you that are deemed unsafe or unfit. No sharp object like knives, blades, scissors are allowed in the room. Our staff holds the right to deny permission to any person, they deem unfit to play or may not follow the rules!</li>
    </ul>
    <p> Reach to us at 455413553, between 11:00 AM and 10:00 PM. </p>
    </br>

    <button type="submit" class="registerbtn" name="registerbtn"> Let me in </button>
    </form>
    
    
  </div>
  


    </body>
</html>
