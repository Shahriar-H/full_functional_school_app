
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



    <div class="footer comonpadd">
        <div class="foot1">
            <h2>Usefull Links</h2>

            <li><a href="/"> <i class="fas fa-link"></i> Jessore Board</a></li>
            <li><a href=""> <i class="fas fa-link"></i> Education Ministry</a></li>
            <li><a href=""> <i class="fas fa-link"></i> Bangladesh Police</a></li>
            <li><a href=""> <i class="fas fa-link"></i> Cyber Cell BD</a></li>
            <li><a href=""> <i class="fas fa-link"></i> Emargency Help Line</a></li>
            <li><a href="/"> <i class="fas fa-link"></i> Daulatpur Thana</a></li>
            <li><a href=""> <i class="fas fa-link"></i> COVID-19 Help</a></li>
            <li><a href=""> <i class="fas fa-link"></i> Shonali Sheba</a></li>
            <li><a href=""> <i class="fas fa-link"></i> Nearest Bank</a></li>
            <li><a href=""> <i class="fas fa-link"></i> Union Porisod</a></li>
        </div>
        <div class="foot2">
            <h2>Address</h2>
            <p style="margin-bottom:0 !important"> <i class="fas fa-map-marker-alt" ></i> Goalgram High School </p>
            <p class="pl-4 mt-0"> Daulatpur Kushtia </p>
            <p> <i class="fas fa-phone"></i> Mobile: 017xx-xxxxxxx </p>
            <p> <i class="fas fa-envelope"></i> E-mail: contact.goalgramhighschool@ggh.com </p>

        </div>
        <div class="foot3 foot2 text-center">
            <h2>Signature Of  The Head</h2>
            <br>
            <img src="myfiles/signature.jpg" style="max-width: 150px" alt="signature">
        </div>
    </div>
    <style>
        .devesign{
            background-color: rgb(31, 30, 30);
        }
        .devesign p{
            color: grey;
            text-align: center;
        }
        .devesign p a{
            color: var(--bgcolor);
        }
        .lov{
            position: fixed;
            height: 90vh;
            width: 100%;
            top: 0;
            left: 0;
            /* background-color: rgba(0, 0, 0, 0.616); */
           
            display: none;
            justify-content: center;
        }
        .lov img{
            width: 400px;
            height: 400px;
            position: absolute;
            bottom: 0;
        }
       .lovshow{
            display: flex !important;
            animation: cometomo .3s linear;
        }
        @keyframes cometomo{
            0{
                margin-bottom: -200px;
            }100{
                margin-bottom:0px;
            }
        }

    </style>
    <div class="devesign text-center">
        <div class="lov" id="love">
            <img class="thankyougif" src="myfiles/thanku.gif" alt="">
        </div>
        <p class="m-0">Develope & Design by <a onmouseover="comethan()"  style="font-size: 14px !important" href="https://facebook.com/shahariarhussainalshaki">s#@k!</a></p>
    </div>
    <script>
        function comethan(){
            document.getElementById('love').classList.add('lovshow');
            var clov = setInterval(closeit,3000);
        var i=0;
        function closeit(){
            i++;
            console.log(i);
            if(i>=2){
                document.getElementById('love').classList.remove('lovshow');
                clearInterval(clov);
            }
        }

        }   
  
    </script>

