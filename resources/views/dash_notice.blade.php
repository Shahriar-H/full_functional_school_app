@extends('dashboardmaster')
@section('dashboardbody')
<style>
    .logoup{
        background-color: rgb(240, 239, 239);
        padding: 20px;
        box-shadow: 0px 0px 2px 0px rgb(141, 140, 140);
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
    .slide{
        background-color: rgb(4, 176, 199);
        padding: 5px;
        color: white;
        margin: 5px;
    }



</style>
@section('dashboardbody')
    
    <div class="logoup m-3">
        <form action="/noticeup" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Notice File Upload: </label><br>
            <input type="file" name="nfile">
            <input class="mt-3" placeholder="Notice Title" type="text" name="title" id=""><br>
            <input class='inbtn' type="submit" value="Update">
        </form>
    </div>

    <div class="logoup slidershow m-3">
        @foreach ($getnotice as $item)
            
            <div class="slide d-flex">
                <h4>{{$item->title}}</h4>
                <a href="/deletenotice/{{$item->id}}">Delete</a>
            </div>


        @endforeach
    </div>

@endsection