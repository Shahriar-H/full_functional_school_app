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
        width: 120px;
        height: 100px;
        margin: 4px;
    }
    .slidershow{
        display: flex;
        justify-content: center;
    }
    .slidershow a{
        background-color: rgb(0, 140, 255);
        padding: 5px 10px;
        color: white;
        margin: 5px;
    }

</style>
@section('dashboardbody')
    
    <div class="logoup m-3">
        <form action="/dash_students_edit/{{$studentis['id']}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$studentis['sphoto']}}" name="sphotonotchange">
            
            <label>Students' Name: </label>
            <input required class="" value="{{$studentis['sname']}}" type="text" name="sname" id=""><br>

            <label>Students' Photo: </label><br>
            <input type="file" name="sphoto">

            <label>Students' Class: </label>
            <input required class="" value="{{$studentis['sclass']}}" type="text" name="sclass" id=""><br>
            <label>Students' Fee: </label>
            <input required class="" value="{{$studentis['beton']}}" type="text" name="sbeton" id=""><br>

            <label>Fee Month [MM-YYYY]: </label>
            <input required class="" value="{{$studentis['monthdate']}}" type="text" name="monthdate" id=""><br>

            <label>Comment: </label>
            <input class="" value="{{$studentis['comment']}}" type="text" name="comment" id=""><br>

            <label>Students' Roll: </label>
            <input required class="" value="{{$studentis['sroll']}}" type="text" name="sroll" id=""><br>

            <label>Students' Phone: </label>
            <input required class="" value="{{$studentis['sphone']}}" type="text" name="sphone" id=""><br>

            <label>Students' ID: </label><br>
            <input required value="{{$studentis['sid']}}" class="" type="text" name="sid" id=""><br>

            <input class='inbtn' type="submit" value="Update">
        </form>
    </div>

@endsection