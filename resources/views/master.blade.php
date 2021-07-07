<?php 

$slider = DB::table('sliders')->get();
//echo $slider[0]->slide;
$scrollnotice = DB::table('scrollnotices')->get();
//echo $scrollnotice;

$mainteacher = DB::table('teachers')->get();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <title>Goalgram High School</title>
    <style>
        :root{
            --bgcolor:rgb(4, 125, 155);
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            overflow-x:hidden; 
            background-image: linear-gradient(rgba(179, 178, 178, 0.612),rgba(179, 178, 178, 0.612)), url('myfiles/background.jpg');
            background-attachment: fixed;
            background-repeat:repeat;
            background-size: 30% 30%;
            background-position: center;

        }
        .headersection{
            /* background: rgb(255, 253, 253); */
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }
        .headersection div{
            width: 33.3%
        }
        .comonpadd{
            padding: 10px 20rem 10px 20rem;
        }
        .occution{
            display: flex;
            flex-direction: row-reverse;
        }
        .logophoto img{
            max-width: 270px;
        }
        .octionphoto img{
            max-width: 100px;
        }
        .menusection{
            background-color: var(--bgcolor);
            padding: 8px 20rem 8px 20rem;
        }
        .menusli{
            display: flex;
        }
        li{
            list-style-type: none !important;
            padding: 5px 10px;
        }
        a{
            text-decoration: none !important;
            color: rgb(216, 215, 215);
            transition: 0.4s;
            font-size: 17px;
            font-family: 'open sans', arial, sans-serif;
        }
        a:hover{
            color: aliceblue;
            transition: 0.4s;
        }
        .menusection div li:hover{
            background-color: rgb(3, 146, 182);
        }
        .mainslider{
            padding: 10px 20rem 10px 20rem;
        }
        .carousel-inner{
            height: 40rem !important;
        }
        .carousel-item img{
            height: 40rem !important;
        }
        .scrollernews{
            background-color: var(--bgcolor);
            padding: 7px;
            margin: 0px 20rem 0px 20rem;
        }
        .carousel-caption1{
            position: absolute;
            bottom: 30px;
            left: 40px;
            z-index: 10;

        }
        .carousel-caption1 h3{
            background-color: var(--bgcolor);
            color: white;
        }
        .mainbodyhere{
          display: flex;
          justify-content: space-between;  
          margin: 10px 20rem 10px 20rem; 
          font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
        }
        .teacherController{
            width: 28%;
            background-color: rgb(233, 232, 232);
            padding: 10px;
            margin-right: 2px;
        }
        .teacherController .headesir h3{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
            font-weight: 600;
            font-size: 21px !important;
        }
        .teacherController .headesir p{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
            font-weight: 600;
            padding-top: 5px;
        }
        .teacherController .headesir a{
            padding: 6px 15px;
            background-color: var(--bgcolor);
            border-radius: 2px;
        }
        .noticeboard{
            width: 70%;
            background-color: rgb(233, 232, 232);
            padding: 10px;
            padding-top: 0px;
            margin-left: 20px;
        }
        .chairman{
            background-color: var(--bgcolor);
            padding: 20px;
            margin: 20px 20rem 0px 20rem;
            display: flex;
            flex-wrap: wrap;
            padding-bottom: 40px;
        }
        .chairmanbox{
            width: 30%
        }
        .chairmandetails{
            width: 70%;
            text-align: center;
            padding-top: 9rem;
            padding-right: 100px
        }
        .chairmandetails p{
            font-size: 15px;
        }
 
        .managingcom{
            padding: 8px 15px;
            background-color: rgb(36, 36, 36);
        }
        .managingcom:hover{
            background-color: black;
        }
        .footer{
            background-color: rgb(31, 30, 30);
            padding-top: 50px;
            padding-bottom: 20px;

            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer div{
            width: 33.33%
        }
        .foot1 h2{
            color: white;
            font-size: 21px;
        }
        .foot1 li{
            padding: 0 !important;
            font-family: Georgia, 'Times New Roman', Times, serif;

        }
        .foot1 li a{
            font-size: 14px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: var(--bgcolor);
        }
        .foot1 li a:hover{
            color: rgb(0, 140, 255);
        }
        .foot2{
            color: rgb(196, 191, 191);
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .foot2 h2{
            font-size: 21px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            padding-bottom: 10px;

        }
        .mobilemenu{
            display: none;
        }

        .snoticeis{
            font-size: 14px;
        }

        @media only screen and (min-width:200px) and (max-width:991px){
            .comonpadd {
                padding: 10px 1rem 10px 1rem;
            }
            .emptysec{
                width: 0 !important;
                display: none;
            }
            .menusection {
                padding: 8px 1rem 8px 1rem;
            }
            .headersection div {
                width: 50%;
            }
            .menusli {
                display: none;
            }
            .mainslider {
                padding: 10px 0rem 10px 0rem;
            }
            .scrollernews {
                margin: 0px 0rem 0px 0rem;
            }
            .mainbodyhere {
                display: flex;
                justify-content: space-between;
                margin: 10px 1rem 10px 1rem;
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
                flex-wrap: wrap;
            }
            .teacherController {
                width: 100%;
                margin-right: 0px;
            }
            .noticeboard {
                width: 100%;
                background-color: rgb(233, 232, 232);
                padding: 10px;
                padding-top: 0px;
                margin-top: 20px;
                margin-left: 0px;
            }         
            .chairman {
                margin: 20px 1rem 0px 1rem;
            }
            .chairmanbox {
                width: 100%;
            }  
            .chairmandetails {
                width: 100%;
                text-align: center;
                padding-top: 9rem;
                padding-right: 0px;
            }   
            .footer div {
                width: 100%;
            }   
            .foot1, .foot2{
                padding-left: 13%;
            }   
            .foot3{
                padding-left: 0px !important;
                padding-bottom: 20px;
            }   
            .mobilemenu{
                display: block;
            }    
            .mobilemenu i{
                font-size: 21px;
                color: white;
                padding-top: 2px;
                cursor: pointer;
            }    
            .carousel-caption1 h3 {
                font-size: 18px;
            }       
            .carousel-inner {
                height: 25rem !important;
            } 
            .carousel-item img {
                height: 25rem !important;
            }
            
        }

        @media only screen and (min-width:200px) and (max-width:432px){

            .logophoto img {
                max-width: 220px;
            }
                
            .octionphoto img {
                max-width: 70px;
            }
            .carousel-caption1 h3 {
                font-size: 12px;
            }
            .noticebody h4 {
                font-size: 12px;
            }
            .chairmandetails {
                padding-top: 5rem;
            }
            .chairmandetails p {
                font-size: 13px;
            }
            .foot1, .foot2 {
                padding-left: 6%;
            }
        
        }

        @media only screen and (min-width:200px) and (max-width:350px){
            .logophoto img {
                max-width: 146px;
            }
            .octionphoto img {
                max-width: 53px;
            }
            .foot2 p{
                font-size: 13px;
            }
            .foot1, .foot2 {
                padding-left: 1%;
            }
        }

    </style>
</head>
<body>
    @include('_headersection')

    <div class="mainslider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php 
                    $i=0;
                    foreach ($slider as $item){
                        //echo $item->id;
                        $i++;                 
                ?>
              <div class="carousel-item {{ $i==1?'active':'' }}">
                    <img class="d-block w-100" src="{{$item->slide}}" alt="First slide">
                    <div class="carousel-caption1">
                        <h3 class=" p-2">{{$item->caption}}</h3>
                    </div>
              </div>

              <?php } ?>
            
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        {{-- Slider section end --}}

    <div class="scrollernews">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <?php 
                foreach ($scrollnotice as $notice) {
                
            ?>
            <a class="mr-4 snoticeis" href="/"> <img src="myfiles/logo.png" style="max-width:60px" alt="">
                    {{$notice->notice}}
            </a>

            <?php } ?>
        </marquee>
    </div>

            {{-- marquee section end --}}
    
    <div class="mainbodyhere">
        <div class="teacherController">
            <br>
            <?php 
                foreach ($mainteacher as $key) {
                    if($key->id==1 || $key->id==2){

            ?>
            <div class="headesir text-center">
                <h3>{{$key->tpodobi}}</h3>
                <img src="{{$key->tphoto}}" style="width: 150px; height:150px;" alt="">
                <p>{{$key->tname}}</p>
                <a href="/aboutteacher/{{$key->id}}"><i class="fas fa-paperclip"></i> Details</a>
            </div>
            <br>
            <?php 
                }}
            ?>
            <br>
        </div>
        <div class="noticeboard" id="master">
            @yield('dynamiccontent')
        </div>
        <br><br>
    </div>

    <div class="chairman">
        <div class="chairmanbox">
        <?php 
            foreach ($mainteacher as $key1) {
                if($key1->id==4){

        ?>
            <div class="headesir text-center">
                <h3>{{$key1->tpodobi}}</h3>
                <img src="{{$key1->tphoto}}" style="max-width: 150px" alt="">
                <p style="font-size:18px;">{{$key1->tname}}</p>
                <a class="bg-dark p-3" href="/aboutteacher/4"><i class="fas fa-paperclip"></i> Details</a>
            </div>
        <?php }} ?>
        </div>
        <div class="chairmandetails">
            <p>
                আমন সেনাপ কিছুরিদ সেনি ইপসুম কেন ইপন। আজনে আদবি রদি বামাকে বডতেন
                 ঝঁপেষা তাপবে আমনা রই নাবো। আপবে নাই ইত্তা বরাইয়া দিমেন। থমেস ইজুন 
                 তুসিক চকর রিচ্ছা করনেছে। তাই উবারা তাহানের বিসট আর্তরান কনিয়াও বোস লান পসলোনা।            
            </p>
            <a class="managingcom" href="/allmanagingcommity">ম্যানেজিং কমিটি</a>
        </div>
        
    </div>

    <br>
@include('_footersection')

</body>
</html>








