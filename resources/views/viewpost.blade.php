@include('_alllinks')
<title>All Teachers of Goalgram High School</title>

<style>
    :root{
        --bgcolor:rgb(4, 125, 155);
    }

    .aboutteacher{
        display: flex;
        justify-content: start;
        flex-wrap: wrap;
    }
    .tbox{
        text-align: center;
        background-color: white;
        padding: 10px;
        box-shadow: 0px 0px 4px 0px rgba(141, 141, 141, 0.658);
        margin: 19px;
    }
    .tbox img{
        height: 180px;
        width: 180px;
    }
    .tbox h4{
        font-size: 20px;
    }

    @media only screen and (min-width:200px) and (max-width:991px){
        .noticebodysection {
            margin: 5px 1rem 5px 1rem;
        }
        .aboutteacher{
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }
    }

    @media only screen and (min-width:200px) and (max-width:413px){
        .tbox{
            width: 100%;
        }
    }
  
</style>
    @extends('common')
    @section('menussec')
    <p><i class="fas fa-home"></i> <a style="color: black;" href="/">Home</a>/{{$seepost['wname']}}</p>
    <br><br>
    <div class="details p3">
        <h4>{{$seepost['title']}}</h4>
        <p>{{$seepost['wname']}} | {{$seepost['created_at']}}</p>
        <br>

        <p>
            {{$seepost['postbody']}}
        </p>
    </div>
        

    @endsection
