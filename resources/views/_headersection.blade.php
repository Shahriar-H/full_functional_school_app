<?php 
    $logois = DB::table('logos')->get();
    $logo = $logois[0]->mainlogo;
    $rphoto = $logois[1]->mainlogo;
    // echo $logo;
    // echo $rphoto;
?>

<div class="headersection comonpadd">
    {{-- <p>
        {{Session()->get('logosis')['mainlogo']}}
    </p> --}}
        
    <div class="logo">
        <div class="logophoto">
            <img src="/{{$logo}}" alt="Main Logo">
        </div>
    </div>
    <div class="emptysec"></div>
 
    <div class="occution">
        <div class="octionphoto">
            <img src="/{{$rphoto}}" alt="Main Logo">
        </div>
    </div>
</div>
{{-- end header section --}}
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
    .allclass{
        background-color:var(--bgcolor);
        box-shadow: 0px 0px 3px 0px grey;
        position: absolute;
        z-index: 1000;
        width: 20rem;
        display: none;
    }
    .classis:hover .allclass{
        display: block !important;
    }
    .kephideen{
        height: 0px;
        overflow: hidden;
    }


    @media only screen and (min-width:200px) and (max-width:991px){
        .comonpadd {
            padding: 10px 1rem 10px 1rem;
        }
        .mmenulist{
            background-color: rgb(4, 105, 131);
            padding: 15px;
            position: sticky;
            top: 0;
            height: 200px;
            overflow: hidden;
            animation: mmenuanim 0.5s;
        }

        @keyframes mmenuanim {
            0%{
                height: 0px;
            }
            100%{
                height: 200px;
            }
        }
        .ofonmmenu{
            height: 0px;
            animation: mmenuanim1 0.2s linear;
            overflow: hidden;
        }
        @keyframes mmenuanim1 {
            0%{
                height: 200px;
            }
            100%{
                height: 0px;
            }
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

<script>
    function onofmmenu(){
        document.getElementById('menuonof').classList.add('mmenulist');
        document.getElementById('navicon1').classList.add('text-danger');
        document.getElementById('navicon').classList.add('d-none');
        document.getElementById('navicon1').classList.remove('d-none');
        document.getElementById('menuonof').classList.remove('ofonmmenu');
    }
    async function onofmmenu1(){
        document.getElementById('menuonof').classList.add('ofonmmenu');
        document.getElementById('navicon').classList.remove('d-none');
        document.getElementById('navicon1').classList.add('d-none');
       await document.getElementById('menuonof').classList.remove('mmenulist');
    }
</script>

<div class="menusection">
    <div class="menusli">
        <div>            
            <li><a href="/">Home</a></li>
        </div>
        <div>
            <li><a href="/allteachers">Teachers</a></li>
        </div>

        <div>
            <li><a href="/library">Library</a></li>
        </div>

        <div>
            <li><a href="/theschool">About School</a></li>
        </div>
        <div>
            <li><a href="/studentslogin">Students</a></li>
        </div>
        <div>
            <li class="bg-dark"><a href="/golden_jubilee">Registration for GJ</a></li>
        </div>
        {{-- <div class="classis">
            <li><a href="/class">Classes</a></li>
            <div class="allclass">
                <li><a href="/class">Class 6</a></li>
                <li><a href="/class">Class 7</a></li>
                <li><a href="/class">Class 8</a></li>
                <li><a href="/class">Class 9</a></li>
                <li><a href="/class">Class 10</a></li>
            </div>
        </div> --}}
    </div>
    <div class="mobilemenu">
        <i class="fas fa-bars" onclick="onofmmenu()" id="navicon"></i>
        <i class="fas fa-times d-none" onclick="onofmmenu1()" id="navicon1"></i>
    </div>
    <div class="kephideen" id="menuonof">
        <li><a href="/">Home</a></li>
        <li><a href="/allteachers">Teachers</a></li>
        <li><a href="/library">Library</a></li>
        <li><a href="/theschool">About School</a></li>
        <li><a href="/studentslogin">Students</a></li>
        <li><a href="/registrationforgj">Registration for GJ</a></li>
    </div>

</div>