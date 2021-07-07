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
    
    
    div img{
        height: 100px;
        width: 100px;
        margin: 6px;
    }



</style>
@section('dashboardbody')
    
    <div class="logoup m-3">
        <form action="/galleryup" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Gallery Photo Upload: </label><br>
            <input type="file" name="gfile">
            <input class="mt-3" placeholder="Photo Title" type="text" name="title" id=""><br>
            <input class='inbtn' type="submit" value="Save">
        </form>
    </div>

    <div class="logoup slidershow m-3">
        @foreach ($photo as $item)
            
            <div class="d-block">
                <img src="{{$item->gfile}}" alt="">
                <div class="">
                    <a href="/deletenotice/{{$item->id}}">Delete</a>
                </div>
            </div>


        @endforeach
    </div>

@endsection