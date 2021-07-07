@include('_alllinks')
<title>Login -- Goalgram High School</title>
<style>
    *{
        padding: 0;
        margin: 0 !important;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login{
        background-color: rgb(216, 242, 253);
        width: 50rem;
        padding: 40px 20px 40px 20px ;
        box-shadow: 0px 0px 4px 0px rgba(114, 139, 168, 0.822);
        border-radius: 2px;
    }
    form{
        padding: 0px 30px 0px 30px
    }
    form input{
        width: 100%;
        padding: 5px;
        text-align: center;
        border: 1px solid black;
        border-radius: 2px;
        background-color: rgba(194, 248, 248, 0.603);
        text-align: left !important;
        padding-left: 30px;
    }
    input:focus{
        border: 1px solid rgb(1, 200, 250);
        border-radius: 2px;
        background-color: rgba(237, 253, 253, 0.603);
    }
    h3{
        font-weight: 600;
    }
    div i{
        position: absolute;
        font-size: 17px;
        margin-top: 7px !important;
        margin-left: 6px !important;
    }
    
    @media only screen and (min-width:200px) and (max-width:992px){
        .login{
            display: none !important;
        }
    }

</style>
<div class="login">
    <h3 class="text-center">Login Here</h3>
    <br>
    <form action="/login-todashboard" method="POST">
        @csrf
        <p class="text-danger text-center">
            @if (session()->has('userinfo'))
                {{session()->get('userinfo')}}
            @endif
        </p>
        <label>E-mail:</label><br>
        <div class="">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="">
        </div>
        
        <label>Phone:</label><br>
        <div class="">
            <i class="fas fa-phone"></i>
            <input type="text" name="phone" id="">
        </div>
        
        <label>Password:</label><br>
        <div class="">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="">
        </div>
        <br>
        <input class="btn btn-primary text-center" type="submit" name="submit" value="Login">
    </form>
</div>