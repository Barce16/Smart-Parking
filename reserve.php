<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reservation.css">
    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900">
</head>
<body>

<div class="container">
    <div class="container-time">
    <h2 class="heading">Time Open</h2>
    <h3 class="heading-days">Mon-Fri</h3>
    <p> 7am - 11am (Break)</p>
    <p> 1pm - 5pm (Close)</p>

    <h3 class="heading-days">Sat-Sun</h3>
    <p> 9am - 3pm (No Break)</p>
    <hr>
    <h4 class="heading-phone">Call us: (+63-991-757-0154)</h4>

</div>
<div class="container-form">
    <!-- LINK -->
    <form action="profile.php">

        <div class="h2 heading-yellow"><b> Reservation Online</b></div>

        

        <div class="form-field"></div>
        <p>Date</p>
        <input type="date">

        <div class="form-field">
        <p><b>Time</b></p>
        <select name="select" id="#">
            <option value="1">30mins</option>
            <option value="2">1hr</option>
            <option value="3">2hrs</option>
            <option value="4">3hrs</option>
            <option value="5">4hrs</option>
        </select>
        </div>
        <button class="btn">Submit</button>
    </form>
</div>
</div>
    
</body>
</html>