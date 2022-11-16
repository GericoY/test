<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types Demo</title>
</head>
<body>
    <form>
        <label for="txtFirstName">First Name:</label>
        <input type="text" name="txtFirstName" id="txtFirstName" autofocus><br>
        <label for="txtLastName">Last Name:</label>
        <input type="text" name="txtLastName" id="txtLastName"><br>
        <hr>

        <label for="txtPassowrd">Last Name:</label>
        <input type="password" name="txtPassowrd" id="txtPassowrd"><br>
        <hr>

        <input type="submit" name="btnSave1" value="Send 1">
        <button type="submit" name="btnSave2">Send 2</button>
        <hr>

        <input type="reset" value="Reset">
        <hr>

        <input type="radio" name="radSex" value="Male" id="radMale" checked> 
        <label for="radMale">Male</label><br>
        <input type="radio" name="radSex" value="Female" id="radFemale"> 
        <label for="radFemale">Female</label><br>
        <hr>

        <input type="checkbox" name="chkBike" id="chkBike" value="Bike">
        <label for="chkBike">I have a bike</label><br>
        <input type="checkbox" name="chkCar" id="chkCar" value="Car">
        <label for="chkCar">I have a Car</label><br>
        <input type="checkbox" name="chkBoat" id="chBoat" value="Boat">
        <label for="chkBoat">I have a Boat</label><br>
        <hr>

        <label for="clrTheme">Pick a Color</label>
        <input type="color" name="clrTheme" id="clrTheme ">
        <hr>

        <label for="dtpBirthday">Birthday</label>
        <input type="date" name="dtpBirthday" id="dtpBirthday">
        <hr>

        <label for="txtEmail">Email Address</label>
        <input type="email" name="txtEmail" id="txtEmail">
        <hr>

        <label for="filPhoto">Select a File:</label>
        <input type="file" name="filPhoto" id="filPhoto">
        <hr>

        <label for="txtNumber">Enter Quantity:</label>
        <input type="number" name="txtNumber" id="txtNumber">
        <hr>

        <label for="txtVolume">Select Volume:</label>
        <input type="range" name="txtVolume" id="txtVolume">
        <hr>

        <label for="txtTelephone">Enter Telephone Number:</label>
        <input type="tel" name="txtTelephone" id="txtTelephone">
        <hr>

        <label for="txtTime">Select Time:</label>
        <input type="time" name="txtTime" id="txtTime">
        <hr>

        <label for="txtURL">Add URL</label>
        <input type="url" name="txtURL" id="txtURL">
        <hr>
    </form>
</body>
</html>