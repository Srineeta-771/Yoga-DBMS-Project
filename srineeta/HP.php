<html>
<head>
    <title>Home | Yoga Center</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        .div1 {height: 80%; background-image: url(https://t4.ftcdn.net/jpg/04/26/64/13/360_F_426641333_x71suUrAE1A4N9lqnYVgjdGPjkgudmdR.jpg); background-size: cover; padding: 12px 16px; box-shadow: 0 0 5px 0 #302D1F;}
        .div2 {height: 10%; background-image: url(https://t4.ftcdn.net/jpg/04/26/64/13/360_F_426641333_x71suUrAE1A4N9lqnYVgjdGPjkgudmdR.jpg); background-size: cover; padding: 12px 16px; box-shadow: 0 0 5px 0 #302D1F;}
        .btn {background-color: transparent; border: none; color: black; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; }
        .btn:hover {background-color: black; color: white; }
        .dropdown-content {display: none; position: absolute; background-color: transparent; font-weight: bold; min-width: 160px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; }
        .dropdown {position: relative; display: inline-block;}
        .dropdown-content a {color: black; padding: 12px 16px; text-decoration: none; display: block;}
        .dropdown-content a:hover {background-color: black; color: white; font-weight: bold;}
        .dropdown:hover .dropdown-content {display: block;}
        span {float: right;}
        h1 {text-align: center;}
        .column { float: left; width: 40%; padding: 0 10px;}
        .row {margin: 0 -5px;}
        .row:after { content: ""; display: table; clear: both;}
        @media screen and (max-width: 600px) { .column { width: 100%; display: block; margin-bottom: 20px;}}
        .card {padding: 10px; position: relative; left: 25%;}
    </style>
</head>

<body style = "background-color: #f0ede4">
    <div class = "div1">
        <b>Home</b>
        <div class = "dropdown">
            <button class="btn"> Yoga Center v</button>
                <div class="dropdown-content">
                    <a href="YC.php">New</a>
                    <a href="YCIndex.php">View</a>
                </div>
        </div>
        <div class = "dropdown">
            <button class="btn"> Yoga Types v</button>
                <div class="dropdown-content">
                    <a href="YType.php">New</a>
                    <a href="YTypeIndex.php">View</a>
                </div>
        </div>
        <div class = "dropdown">
            <button class="btn"> Class v</button>
                <div class="dropdown-content">
                    <a href="Class.php">New</a>
                    <a href="ClassIndex.php">View</a>
                </div>
        </div>
        <div class = "dropdown">
            <button class="btn"> Center Manager v</button>
                <div class="dropdown-content">
                    <a href="CM.php">New</a>
                    <a href="CMIndex.php">View</a>
                </div>
        </div>
        <div class = "dropdown">
            <button class="btn"> Trainee v</button>
                <div class="dropdown-content">
                    <a href="Trainee.php">New</a>
                    <a href="TraineeIndex.php">View</a>
                </div>
        </div>
        <div class = "dropdown">
            <button class="btn"> Trainer v</button>
                <div class="dropdown-content">
                    <a href="Trainer.php">New</a>
                    <a href="TrainerIndex.php">View</a>
                </div>
        </div>
        <div class = "dropdown" style = "float: right;">
            <button class="btn" onclick = "document.location= 'FP.html'"> Logout</button> 
        </div>
    </div>
    <br>

    <div class="row">
        <div class="column">
            <div class = "card">
                <p style = "font-family: Lucida Handwriting; font-size: 40px; font-weight: bold; text-align: center; padding: 50px;">Little YOGA<br> a day keeps<br> laziness away! ;)</p>
            </div>
        </div>
    
        <div class="column">
            <div class = "card">
                <img src = "http://static.skaip.org/img/emoticons/180x180/f6fcff/suryannamaskar.gif" width = "70%" > 
            </div>
        </div>
    </div>
    <br><br>
    
    <!-- <div class="row">
        <div class="column">
            <div class="card"> 
            <img src = "https://cdn.dribbble.com/users/722246/screenshots/6979276/yoga-light_drb.gif" width = "100%" >
                <h2>Wanna learn YOGA!?</h2>
                <a href = "Trainee.php"><h1 style = "color: black;">JOIN</h1></a>
            </div>
        </div>

        <div class="column">
            <div class="card">
            <img src = "https://c.tenor.com/8IPQv7Oc0O4AAAAM/yoga.gif" width = "75%" >
                <h2>Wanna teach YOGA!?</h2>
                <a href = "Trainer.php"><h1 style = "color: black;">JOIN</h1></a>
            </div>
        </div>
    </div>
    <br><br> -->
    <div class = "div2" style = "align: right;">
        <span> <p><b>©2022 MVJCE Designed by SRINEETA</b></p> </span>
    </div>

</body>
</html>