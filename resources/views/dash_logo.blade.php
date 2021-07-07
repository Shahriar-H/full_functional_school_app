@extends('dashboardmaster')
<style>
    .logoup{
        background-color: rgb(240, 239, 239);
        padding: 20px;
        box-shadow: 0px 0px 2px 0px rgb(141, 140, 140);
        display: flex;
        justify-content: center;
    }
    form{
    }
    form input{
        border: 1px solid rgba(128, 128, 128, 0.637);
        padding: 4px;
    }
    .inbtn{
        padding: 5px 10px ;
        background-color: rgb(0, 140, 255);
        color: white;
        margin-top: 5px;
    }
    .mainlogodash{
        max-width: 100px;
    }
</style>
@section('dashboardbody')
    
    @foreach ($logois as $item)
    <div class="logoup m-3">
        <form action="/logoup/{{$item->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <img class="mainlogodash" src="{{$item->mainlogo}}" alt=""><br><br>
            <label>Logo Update: </label><br>
            <input type="file" name="logo">
            <input class='inbtn' type="submit" value="Update">
        </form>
    </div>
    @endforeach
    {{-- <div class="logoup m-3 mt-4">
        <form action="">
            <label>Right Side Photo Update: </label><br>
            <input type="file" name="logo">
            <input class='inbtn' type="submit" value="Update">
        </form>
    </div> --}}
@endsection