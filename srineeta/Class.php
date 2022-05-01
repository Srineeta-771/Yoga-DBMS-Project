<html>
<head>
    <title></title>
    <style type = "text/css">
        input[type=text], input[type=tel], select, textarea{ width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; resize: vertical; }
        label { padding: 12px 12px 12px 12px; display: inline-block; }
        /* .bg-img {background-image: url(https://image.shutterstock.com/image-photo/side-view-portrait-beautiful-slim-260nw-528602392.jpg); height: 100%; background-size: cover; position: relative;} */
        /* .container { border-radius: 5px;  background-color: white; padding: 30px; height : 100%; font-size: 20px; border: 3px; border-style: ridge;}  */
        .card { height: 45%; width: 55%; box-shadow: 0 8px 16px 0 #302D1F; padding: 50px 10px 50px 0; text-align: center; background-color: white; position: relative; top: 25%; left: 25%;}
        .col-25 { float: left; width: 25%; margin-top: 6px; }
        .col-75 { float: left; width: 75%; margin-top: 6px; }
        .row:after { content: ""; display: table; clear: both; }
        input[type=submit] { background-color: black; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; float: right; }
        @media screen and (max-width: 600px) { .col-25, .col-75, .bg-img, input[type=submit] { width: 100%; margin-top: 0; } }
        .btn {background-color: black; border: none; color: white; font-weight: bold; padding: 12px 16px; font-size: 16px; cursor: pointer; }
    </style>
</head>

<body style = "background-color: #f0ede4">
        <div class = "card">
            <form name = "Class" action = "" method = "post">
                <div class = "row">
                    <div class = "col-25">
                        <label for = "Time"><b>TIME</b> </label>
                    </div>  
                    <div class = "col-75">  
                        <input type = "text" name = "Time" placeholder = "Enter time">
                    </div>
                </div>        

                <div class = "row">
                    <div class = "col-25">
                        <label for = "YogaType"><b> YOGA TYPE</b> </label>
                    </div>
                    <div class = "col-75">  
                        <input type = "text" name = "YogaType" placeholder = "Enter yoga type">
                    </div>
                </div>
                <br>

                <div class = "row">
                    <div class = "col-25">
                        <label for = "Duration"><b> DURATION (in minutes)</b> </label>
                    </div>
                    <div class = "col-75">  
                        <input type = "text" name = "Duration" placeholder = "Enter duration">
                    </div>
                </div>
                <br>
                <br>

                <div class="row">
                    <a href="HP.php" class="btn"> HOME </a> &nbsp&nbsp&nbsp
                    <button type="submit" name="insert" class="btn "> Submit </button>
                </div>
            </form>   
        </div>

        <?php
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection, 'details');

            if(isset($_POST['insert']))
            {
                $Time = $_POST['Time'];
                $YogaType  = $_POST['YogaType'];
                $Duration  = $_POST['Duration'];
                
                $query = "INSERT INTO class (Time, YogaType, Duration) VALUES ('$Time', '$YogaType', '$Duration')";
                
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                {
                    echo '<script> alert("Data Saved"); </script>';
                    header("Location: ClassIndex.php");
                }
                else
                {
                    echo '<script> alert("Data Not Saved"); </script>';
                    //header('Location: index.php');
                }  
            }
        ?>
</body>
</html>