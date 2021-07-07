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
    form input, select{
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
        <form action="/teachereditup/{{$teacher['id']}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input required type="hidden" value="{{$teacher['tphoto']}}" name="unchangephoto"><br>
            <label>Teachers' Name: </label>
            <input required class="" value="{{$teacher['tname']}}" type="text" name="tname" id=""><br><br>
            
            <label>Authority Type: </label><br>
            <select name="authtype">
                <option selected disabled>Select Authority Type</option>
                <option {{$teacher['authtype']=='Teacher'?'Selected':''}} value="Teacher">Teacher</option>
                <option {{$teacher['authtype']=='MMC'?'Selected':''}} value="MMC">Member of Managing Commity</option>
                <option {{$teacher['authtype']=='Other'?'Selected':''}} value="Other">Others</option>
            </select><br>

            <label>Teachers' Photo: </label><br>
            <input type="file" name="tphoto"><br>

            <label>Teachers' Education: </label>
            <input required value="{{$teacher['teducation']}}" class="" type="text" name="teducation" id=""><br><br>

            <label>Teachers' Designation: </label>
            <input required class="" value="{{$teacher['tpodobi']}}" type="text" name="tdesignation" id=""><br><br>

            <label>Teachers' Word (optional): </label><br>
            <textarea name="tword" id="" class="w-100 p-3" rows="3">{{$teacher['tabout']}}</textarea> <br><br>

            <input class='inbtn' type="submit" value="Save">
        </form>
    </div>



@endsection