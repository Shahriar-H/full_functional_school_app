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
        <form action="/dash_students_save" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Students' Name: </label>
            <input class="" type="text" name="sname" id=""><br>

            <label>Students' Photo: </label><br>
            <input type="file" name="sphoto">

            <label>Students' Class: </label>
            <input class="" type="text" name="sclass" id=""><br>
            <label>Students' Fee: </label>
            <input class="" type="text" name="sbeton" id=""><br>

            <label>Students' Roll: </label>
            <input class="" type="text" name="sroll" id=""><br>

            <label>Students' Phone: </label>
            <input class="" type="text" name="sphone" id=""><br>

            <label>Students' ID: </label><br>
            <input class="" type="text" name="sid" id=""><br>

            <input class='inbtn' type="submit" value="Save">
        </form>
    </div>

    <div class="logoup slidershow m-3">
       <a href="/dash_studentslist/6">Class 6</a>
       <a href="/dash_studentslist/7">Class 7</a>
       <a href="/dash_studentslist/8">Class 8</a>
       <a href="/dash_studentslist/9">Class 9</a>
       <a href="/dash_studentslist/10">Class 10</a>

    </div>

@endsection