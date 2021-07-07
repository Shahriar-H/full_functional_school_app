@extends('dashboardmaster')
@section('dashboardbody')
<style>
    .logoup{
        background-color: rgb(240, 239, 239);
        padding: 20px;
        box-shadow: 0px 0px 2px 0px rgb(141, 140, 140);
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
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
    
    
    div video{
        height: 100px;
        width: 100px;
    }



</style>
@section('dashboardbody')
    
    <div class="logoup m-3">
        <form action="/videoup" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Gallery Video Upload: </label><br>
            <input type="file" name="vfile">
            <input class='inbtn' type="submit" value="Save">
        </form>
    </div>

    <div class="logoup slidershow m-3">
        @foreach ($getvideo as $item)
            
            <div class="d-block">
                <div class="">
                    <a href="/deletevideo/{{$item->id}}">Delete</a>
                </div>
                <video src="{{$item->vfile}}" alt=""></video>
            </div>
        @endforeach
    </div>

@endsection