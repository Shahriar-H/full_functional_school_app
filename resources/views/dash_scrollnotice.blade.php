@extends('dashboardmaster')
@section('dashboardbody')
<style>
    .logoup{
        background-color: rgb(240, 239, 239);
        padding: 20px;
        box-shadow: 0px 0px 2px 0px rgb(141, 140, 140);
        display: flex;
        justify-content: center;
    }
    form{
        width: 40%;
    }
    form input,textarea{
        border: 1px solid rgba(128, 128, 128, 0.637);
        padding: 4px;
        width: 100%;
    }
    .inbtn{
        padding: 5px 10px ;
        background-color: rgb(0, 140, 255);
        color: white;
        margin-top: 5px;
        width: 30%;
    }
    .mainlogodash{
        width: 150px;
        height: 150px;
        margin: 4px;
    }
    .slidershow{
        display: block;
    }
    .slide{
        padding: 10px;
        background-color: rgba(1, 141, 94, 0.541);
        color: white;
        margin: 5px;
    }

</style>
@section('dashboardbody')
    
    <div class="logoup m-3">
        <form action="/scrollnoticeup" method="POST">
            @csrf
            <label>Scroll Notice Upload: </label><br>
            <textarea name="snotice" id="" cols="30" rows="5"></textarea>
            <input class='inbtn' type="submit" value="Save">
        </form>
    </div>

    <div class="logoup slidershow m-3"> 
        @foreach ($scrollnotic as $item)
            
            <div class="slide">
                {{$item->notice}}
                <a class="text-danger" href="/deletescrollnotic/{{$item->id}}">Delete</a>
            </div>

        @endforeach           

    </div>

@endsection