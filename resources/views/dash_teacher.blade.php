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
    form input,select{
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
        justify-content: space-between;
    }
    .slide{
        text-align: center;
        background-color: rgb(247, 245, 245);
        padding: 10px;
        box-shadow: 0px 0px 2px 0px rgb(129, 129, 129);
    }
    .slide h4, .slide p{
        padding: 0;
        margin:0;
    }

</style>
@section('dashboardbody')
    
    <div class="logoup m-3">
        <form action="/teacherup" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Authority' Name: </label>
            <input required class="" type="text" name="tname" id=""><br>

            <label>Authority Type: </label><br>
            <select name="authtype">
                <option selected disabled>Select Authority Type</option>
                <option value="Teacher">Teacher</option>
                <option value="MMC">Member of Managing Commity</option>
                <option value="Other">Others</option>
            </select><br>

            <label>Authority' Photo: </label><br>
            <input required type="file" name="tphoto">

            <label>Authority' Education: </label>
            <input required class="" type="text" name="teducation" id=""><br>

            <label>Authority' Designation: </label>
            <input required class="" type="text" name="tdesignation" id=""><br>

            <label>Authority' Word (optional): </label><br>
            <textarea name="tword" id="" class="w-100 p-3" rows="3"></textarea> <br>

            <input class='inbtn' type="submit" value="Save">
        </form>
    </div>

    <div class="logoup slidershow m-3">
        @foreach ($teacher as $item)
            
            <div class="slide">
                @if ($item->id == 1 || $item->id == 2 || $item->id == 4)
                
                @else
                    <a class="pl-2" href="/deleteteacher/{{$item->id}}">Delete</a><br>
                @endif
                <a class="pl-2" href="/dash_editteacher/{{$item->id}}">Edit</a><br>
                <img class="mainlogodash" src="{{$item->tphoto}}" alt="">
                <h4>{{$item->tname}}</h4>
                <p>{{$item->teducation}}</p>
                <p>{{$item->tpodobi}}</p>
            </div>

        @endforeach
    </div>

@endsection