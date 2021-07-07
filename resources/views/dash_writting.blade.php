@extends('dashboardmaster')
@section('dashboardbody')
<style>
    .logoup{
        background-color: rgb(240, 239, 239);
        padding: 20px;
        box-shadow: 0px 0px 2px 0px rgb(141, 140, 140);
        height: 60vh;
        overflow-y: scroll;
    }
    form{
        width: 40%;
    }
    form input,textarea,select{
        border: 1px solid rgba(128, 128, 128, 0.637);
        padding: 4px;
        width: 100%;
    }
    textarea{
        height: 150px;
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
        <form action="/writtingup" method="POST">
            @csrf
            <label>Students & Teachers Novel Upload: </label><br>
            <input class="mt-3" placeholder="Title" type="text" name="title" id=""><br>
            <input class="mt-3" placeholder="Writer Name" type="text" name="wname" id=""><br>
            <select name="category" class="mt-3">
                <option selected disabled>Select Category</option>
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
            </select>
            <textarea class="mt-3" placeholder="Body" type="text" name="pbody" id=""></textarea><br>

            <input class='inbtn' type="submit" value="Update">
        </form>
    </div>

    <div class="logoup slidershow m-3">
        @foreach ($writting as $item)
            
            <div class="slide d-flex">
                <h5>{{$item->title}} <p class="text-warning">{{$item->wname}}</p></h5>
                <a href="/deletewrite/{{$item->id}}">Delete</a>
            </div>


        @endforeach
    </div>

@endsection