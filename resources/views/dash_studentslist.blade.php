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
    table{
        width: 100%;
        border-collapse: collapse;

    }
    tr th{
        padding: 5px;
        background-color: rgb(44, 128, 255);
        color: white;
    }
    tr td{
        padding: 5px;
    }
    td img{
        height: 30px;
        width: 30px;
    }
    .largview{
        height: 300px;
        width: 60%;
        background-color: rgb(63, 62, 62);
        position: absolute;
        top: 0;
        left: 90px;
        right: 0;
        bottom: 0;
        box-shadow: 0px 0px 4px 0px rgb(2, 157, 247);
        margin: auto;
        text-align: center;
        padding-top: 30px;
        display: none;
        color: rgb(253, 253, 253);

    }
    .largview img{
        height: 150px;
        width: 150px;
    }
    .onofclaas{
        display: block !important;
    }

</style>

@section('dashboardbody')

    <div class="logoup slidershow m-3">
        <a href="/dash_studentslist/6">Class 6</a>
        <a href="/dash_studentslist/7">Class 7</a>
        <a href="/dash_studentslist/8">Class 8</a>
        <a href="/dash_studentslist/9">Class 9</a>
        <a href="/dash_studentslist/10">Class 10</a>
    </div>
    
    <div class="logoup m-3">
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Class</th>
                <th>Fee</th>
                <th>Roll</th>
                <th>Phone</th>
                <th><?php echo date("M-Y") ?></th>
                <th>Action</th>
            </tr>
            @php
                $idindex=-1;
            @endphp
        @foreach ($cstudents as $item)
        @php
        $idindex++;
        @endphp
        <script>

            function showme{{$item->id}}(){
                document.getElementsByClassName('largview')[{{$idindex}}].classList.toggle('onofclaas');
                document.getElementsByClassName('fa-eye')[{{$idindex}}].classList.toggle('text-danger');
            }
        </script>
            <div class="largview">
                <img src="/{{$item->sphoto}}" alt="No photo">
                <h3>{{$item->sname}}</h3>
                <a href="tel:{{$item->sphone}}"> <i class="fas fa-phone"></i> Call Him</a>
                <p>{{$item->monthdate}} | {{$item->comment}} | {{$item->beton}}</p>
            </div>

            <tr>
                <td>{{$item->sid}}</td>
                <td class="text-center"><img src="/{{$item->sphoto}}" alt=""></td>
                <td>{{$item->sname}}</td>
                <td>{{$item->sclass}}</td>
                <td>{{$item->beton}}</td>
                <td>{{$item->sroll}}</td>
                <td>{{$item->sphone}}</td>
                <td>
                <?php 
                    $orderid = DB::table('orders')->where('sid',$item->sid)->get();
                    //echo $orderid;
                    foreach ($orderid as $paystatus) {
                        if($paystatus->month==date('M-Y')){
                            echo "Paid";
                            break;
                        }
                    }
                   
                ?>
                </td>
                <td class="text-center"><a href="/dash_studentedit/{{$item->id}}"><i class="fas fa-edit"></i></a>
                     | <a href="/dash_studentedit/{{$item->id}}"><i class="fas fa-trash"></i></a> | 
                     <a onclick="showme{{$item->id}}()" href="#"><i class="fas fa-eye"></i></a>
                </td>
            </tr>
        @endforeach

        </table>
    </div>



@endsection