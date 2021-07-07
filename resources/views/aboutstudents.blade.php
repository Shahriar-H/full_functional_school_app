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
    .loginformdiv{
        width: 100%;
        background: white;
        padding: 20px;
        padding-top: 90px;
        padding-bottom: 120px;
        display: flex;
        justify-content: center;
    }
    form{
        width: 40%;
    }
    
    form input{
        width: 100%;
        padding: 7px;
        border-radius: 2px;
        border: 1px solid grey;
    }
    input:focus{
        border: 1px solid rgb(6, 205, 240);
        border-radius: 2px;
    }
    select:focus{
        border: 1px solid rgb(6, 205, 240);
    }
    select{
        width: 100%;
        padding: 9px;
        border: 1px solid grey;
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

    @media only screen and (min-width:200px) and (max-width:992px){
        .resultbody {
            margin: 10px 1rem 10px 1rem !important;
        }
        form {
            width: 98%;
        }
    }
   
</style>
<div class="resultbody">
    <div class="loginformdiv">
        <form action="/studentsloginresult" method="POST">
            @csrf
            <h3 class="text-center">Students Login</h3><br>
            @if (session()->get('erroris'))
                <p class="text-danger">{{session()->get('erroris')}}</p>
            @endif
            <label>Students' ID</label><br>
            <input required type="text" name="studentid" placeholder="21233222" id=""><br>
            <label>Students' Class</label><br>
            <select name="sclass" required >
                <option selected disabled >Select Class</option>
                <option value="6">Six</option>
                <option value="7">Seven</option>
                <option value="8">Eight</option>
                <option value="9">Nine</option>
                <option value="10">Ten</option>
            </select>
            <button class="btn btn-primary mt-3">Login</button>
        </form>
    </div>
</div>

@include('_footersection')