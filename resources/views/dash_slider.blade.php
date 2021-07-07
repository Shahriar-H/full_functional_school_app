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
    form input{
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
        display: flex;
        justify-content: space-between;
    }

</style>
@section('dashboardbody')
    
    <div class="logoup m-3">
        <form action="/slideup" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Slider Upload: </label><br>
            <input type="file" name="slide">
            <input class="mt-3" type="text" name="caption" id=""><br>
            <input class='inbtn' type="submit" value="Update">
        </form>
    </div>

    <div class="logoup slidershow m-3">
        @foreach ($slide as $item)
            
            <div class="slide">
                <a class="pl-2" href="/deleteslide/{{$item->id}}">Delete</a><br>
                <img class="mainlogodash" src="{{$item->slide}}" alt=""><br>
            </div>

        @endforeach
    </div>

@endsection