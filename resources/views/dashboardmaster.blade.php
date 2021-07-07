<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Dashboard</title>
    <style>
        :root{
            --bgcolor:rgb(4, 125, 155);
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: var(--bgcolor);
        }
        body{
            background-color: rgb(236, 236, 236);
        }
        .titledash{
            background-color: rgb(26, 26, 26);
            padding: 5px;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
        }
        .titledash h3{
            font-weight: 600;
        }
        .maindshbody{
            display: flex;
            justify-content: space-between;
        }
        .sidebar{
            min-height: 100vh;
            padding: 15px;
            margin-top: 0px;
            background-color: rgb(24, 24, 24);
            width: 15%;
            
        }
        .dshbodycontent{
            width: 83%;
            background-color: white;
            margin: 10px;
            padding: 20px 20px 20px 30px;
            box-shadow: 0px 0px 4px 0px rgba(128, 128, 128, 0.479);
        }
        .sidebar li{
            padding: 3px;
            list-style-type: none;
        }
        li a{
            font-size: 16px;
        }

    </style>
</head>
<body>
    <div class="titledash">
        <h3>GGH Controll Panel</h3>
    </div>
<div class="maindshbody">
    <div class="sidebar">
        <li><a href="/dash_home">Home</a></li>
        <li><a href="/dash_logo">Logo</a></li>
        <li><a href="/scrollnotice">Scroll Notice</a></li>
        <li><a href="/teachercon">Authority</a></li>
        <li><a href="/dash_students">Students</a></li>
        <li><a href="/dash_slider">Slider</a></li>
        <li><a href="/dash_notice">Notice</a></li>
        <li><a href="/dash_photo">Photo</a></li>
        <li><a href="/dash_video">Video</a></li>
        <li><a href="/dash_writting">Writting</a></li>
        <li><a href="/dash_adminadd">Admin</a></li>
        <li><a href="/dash_logout">Logout</a></li>

    </div>
    <div class="dshbodycontent">
            @yield('dashboardbody');
    </div>
</div>


</body>
</html>