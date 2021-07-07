@include('_alllinks')
@include('_headersection')
<title>All Teachers of Goalgram High School</title>

<style>
    :root{
        --bgcolor:rgb(4, 125, 155);
    }
    .noticebodysection{
        margin: 5px 20rem 5px 20rem;
        background-color: rgb(241, 239, 239);
        padding: 20px;
    }
    .aboutteacher{
        display: flex;
        justify-content: space-evenly;
    }
    .tbox{
        text-align: center;
        background-color: white;
        padding: 10px;
        box-shadow: 0px 0px 4px 0px rgba(141, 141, 141, 0.658);
    }
    .tbox img{
        height: 180px;
        width: 180px;
    }
    .tbox h4{
        font-size: 20px;
    }
    .aboutpragraph{
        padding: 20px;
    }
    .aboutpragraph p{
        font-size: 15px;
        line-height: 1.64;
    }
    @media only screen and (min-width:200px) and (max-width:991px){
        .noticebodysection {
            margin: 5px 1rem 5px 1rem !important;
            text-align: justify;
        }
        .aboutteacher{
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }
        .aboutpragraph {
            padding: 0px;
        }
    }
  
</style>
<div class="noticebodysection">
    <p><i class="fas fa-home"></i> <a style="color: black;" href="/">Home</a>/Teachers</p>
    <br><br>
    <div class="aboutteacher">
       <div class="tbox">
            <img src="/{{$getabout['tphoto']}}" alt="">
            <h4>{{$getabout['tname']}}</h4>
            <span>{{$getabout['teducation']}}</span><br>
            <span>{{$getabout['tpodobi']}}</span>
       </div>
    </div>
    <br>
    <div class="aboutpragraph">
        <p>
            {{$getabout['tabout']}}  
        </p>
    </div>
</div>
<br>
@include('_footersection')