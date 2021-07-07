<?php 

    $id = $sinfo['sid'];
    $paymentprofe = DB::table('orders')->where('sid',$id)->get();
    $m = date('M-Y');



?>

@include('_headersection')
@include('_alllinks')
<title>Students Login </title>
<style>
    .resultbody{
        margin: 10px 20rem 10px 20rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .resultdiv{
        width: 100%;
        background: white;
        padding: 10px;
    }

    .detailosstudent{
        display: flex;
        flex-wrap: wrap;
        padding: 10px;
    }
    .sphoto img{
        height: 100px;
        width: 100px;
    }
    .sphoto h3{
        font-size: 18px;
        font-weight: 600;
    }
    h3,h4{
        padding: 0;
        margin: 0;
        font-family: 'Times New Roman', Times, serif;
    }
    .paymentdiv{
        height: 30rem;
        overflow: scroll;
        box-shadow: 0px 0px 2px 0px grey;
        padding: 5px;
    }
    table{
        border-collapse: collapse;
        width: 100%;
    }
    table tr th{
        padding: 7px;
        color: white;
        background-color: rgb(4, 174, 226);
    }
    tr td{
        padding: 5px;
    }
    @media only screen and (min-width:200px) and (max-width:992px){
        .resultbody {
            margin: 10px 1rem 10px 1rem !important;
        }
        form {
            width: 98%;
        }
        table {
            width: 170%;
        }
    }
</style>
<div class="resultbody">
     <div class="resultdiv">
        <div class="detailosstudent">
            <div class="sphoto text-center w-100">
                <img src="{{$sinfo['sphoto']}}" alt="">
                <h3>{{$sinfo['sname']}}</h3>
                <h4>Class: {{$sinfo['sclass']}}</h4>
                <h4>Roll: {{$sinfo['sroll']}}</h4>
                <?php 
                    $mon = false;
                    foreach ($paymentprofe as $month) {
                        if($month->month==$sinfo['monthdate'] && $month->status=='Successful'){
                            $mon=true;
                            break;
                        }}

                    if(!$mon){
                ?>
                        <p>{{$sinfo['monthdate']}} | {{$sinfo['comment']}} | {{$sinfo['beton']}}</p>
                        <form action="/payment" method="get">
                            @csrf
                            <input type="hidden" name="sidis" value="{{$sinfo['sid']}}">
                            <input type="hidden" name="snameis" value="{{$sinfo['sname']}}">
                            <input type="hidden" name="sphoneis" value="{{$sinfo['sphone']}}">
                            <input type="hidden" name="smonthis" value="{{$sinfo['monthdate']}}">
                            <input type="hidden" name="samountis" value="{{$sinfo['beton']}}">
                            <input type="hidden" name="scommentis" value="{{$sinfo['comment']}}">
                            <input class="bg bg-primary btn-sm" type="submit" name="payment" value="Pay Now">
                        </form>
                <?php 
                    }else{
                ?>
                    <p class="badge badge-info">Payment Done on {{$sinfo['monthdate']}}</p>
                <?php } ?>
            </div>
        </div>
        <div class="paymentdiv">
            <table border="1">
                <tr>
                    <th>P Month</th>
                    <th>P Date</th>
                    <th>P Amount</th>
                    <th>P Status</th>
                </tr>
                <?php 

                    foreach ($paymentprofe as $month) {

                ?>
                <tr>
                    <td>{{$month->month}}</td>
                    <td>{{$month->created_at}}</td>
                    <td>{{$month->amount}} ({{$sinfo['comment']}})</td>
                    <td style="color: green">{{$month->status}}</td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</div>

@include('_footersection')