@include('_alllinks')
<title>All Teachers of Goalgram High School</title>

<style>
    :root{
        --bgcolor:rgb(4, 125, 155);
    }
    .noticebodysection{
        margin: 5px 20rem 5px 20rem;
        background-color: rgb(241, 239, 239);
        padding: 20px;
    }
    @media only screen and (min-width:200px) and (max-width:991px){
        .noticebodysection {
            margin: 5px 1rem 5px 1rem !important;
        }
        .aboutteacher{
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }
    }
   
  
</style>
@include('_headersection')
<div class="noticebodysection">
    
    @yield('menussec')
</div>
<br>
@include('_footersection')