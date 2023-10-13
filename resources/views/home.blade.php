@include('header')


<style type="text/css">
    @media only screen and (min-width:320px) and (max-width:560px) {
        .w3-1-icon {
            width: auto;
            height: 100%;
            /*transform: scale(80%);
            transform-origin: top left;*/
        }
    .super-power-india{
        position: absolute;
        top: 118px;
        left: 30px;
        display: inline-block;
        width: 250px;
        height: 240px; 
        color: #fff;
        font-size: 45px;
        font-weight: 600;
    }.honest-reliable-builders{
        position: absolute;
        top: 357px;
        left: 10px;
        font-size: 20px;
        line-height: 30px;
        font-weight: 600;
        color: #fff;
    }.rectangle-parent{
        position: absolute;
        top: 112px;
        left: 745px;
        width: 595px;
        height: 80px;
        font-size: 14px;
    }.rectangle-parent {
        position: absolute;
        top: 84px;
        left: 0;
        width: 0px;
        height: 80px;
        font-size: 10px;
    }.home{
        left: 100px;
    }.desktop-4-child {
        position: absolute;
        top: 108px;
        left: 83px;
        width: 180px;
        height: 74px;
    }.group-child {
        position: absolute;
        top: 24px;
        left: 267px;
        width: 49px;
        height: 66px;
}.desktop-4-item {
    position: absolute;
    top: 418px;
    left: 12px;
    width: 110px;
    height: 43px;
}.desktop-4-inner {
    position: absolute;
    top: 419px;
    left: 134px;
    width: 91px;
    height: 42px;
}.view-project {
    position: absolute;
    top: 438px;
    left: 20px;
    line-height: 4px;
    font-weight: bold;
    font-size: 16px;
}.join-us {
    position: absolute;
    top: 423px;
    left: 150px;
    line-height: 30px;
    font-weight: 600;
}

}
.mobile-menu {
    display: none;
  }
 @media only screen and (max-width: 768px) {
    .desktop-4-child,
    .rectangle-parent {
      display: none;
    }

    .mobile-menu-button {
      display: block;
      position: absolute;
      top: 18px;
      right: 18px;
      cursor: pointer;
      color: white;
      font-size: 24px;
    }

    .mobile-menu {
      display: none;
      position: absolute;
      top: 60px;
      right: 0;
      background-color: #333;
      width: 100%;
      text-align: center;
    }

    .mobile-menu a {
      display: block;
      padding: 15px;
      color: white;
      text-decoration: none;
    }

    .mobile-menu.active {
      display: block;
    }
  }
</style>
<div class="desktop-4">
        <img class="w3-1-icon" alt="" src="{{url('public/img/undefined7.png')}}">
        
         <div class="mobile-menu-button">&#9776;</div>
        <div class="desktop-4-child"></div>
        <div class="rectangle-parent">
            <div class="group-child">
            </div>
            <div class="contact"><a href="{{url('contact')}}">To Unite empery</a></div>
            <div class="home"><a href="{{url('/')}}">Home</a></div>
            <div class="about-us"><a href="{{url('about')}}">About us</a></div>
            <div class="gallery"><a href="{{url('gallery')}}">Gallery</a></div>
            <div class="obligation"><a href="{{url('obligation')}}">Obligation</a></div>
        </div>
         
        <div class="super-power-india">SUPER POWER INDIA 2030</div>
        <div class="honest-reliable-builders">Honest, Reliable Builders since 1968</div>
        <div class="desktop-4-item btn-sm">
        </div>
        <div class="desktop-4-inner btn-sm">
        </div>
        <div class="view-project"><a style="text-decoration: none;color: black;" href="{{url('obligation')}}">View Project</div>
        <div class="join-us"><a style="text-decoration: none;color: black;" href="{{url('contact')}}">Join us</div>

        <div class="mobile-menu">
  <a href="{{url('/')}}">Home</a>
  <a href="{{url('about')}}">About us</a>
  <a href="{{url('gallery')}}">Gallery</a>
  <a href="{{url('obligation')}}">Obligation</a>
  <a href="{{url('contact')}}">To Unite empery</a>
</div>

<script>
  // JavaScript to toggle the mobile menu
  const mobileMenuButton = document.querySelector('.mobile-menu-button');
  const mobileMenu = document.querySelector('.mobile-menu');

  mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".mobile-menu-button").on('click', function() {
      if ($(".mobile-menu").is(":visible")) {
        $(".kn").hide();
      } else {
        $(".kn").show();
      }
    });
  });
</script>
    </div>


<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">

<style type="text/css">
    .wel{
        width: 500px;
        height: 230px;
        margin: 0 20px 0 0;
        background-color: #f2f2f2;
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center;
        border: none;
    }.wel img{height: 50px;
        width: 50px;
    }.hed{
        text-align: center;
        color: black;
        font-family: serif, Times New Roman;
        font-weight: 600;
        /*font-size: 25px;*/
        margin: 50px 0;
    }.wel h3{
        font-size: 18px;
        font-weight: 600;
        color: black;
    }/*.col{
        display: block;
    }*/
    @media only screen and (min-width:320px) and (max-width:560px){
        .wel{
            margin: 0 0px 20px 0;
            width: 300px;
        }.col{
            display: flex;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }.nodu{

        }
    }
</style>
<section>
    <div class="container">
        <h2 class="hed">Welcome to Hyperway Project</h2>
        <div class="row">
            <div class="card wel col col-6 col-sm col-md col-lg">
                <div class="nodu">
                    <img alt="" src="{{url('public/img/undefined10.png')}}" /><br>
                    <h3>Economy</h3>
                </div>
            </div>
            <div class="card wel col col-6 col-sm col-md col-lg">
                <img alt="" src="{{url('public/img/undefined11.png')}}" /><br>
                <h3>Achivements</h3>
            </div>
            <div class="card wel col col-6 col-sm col-md col-lg">
                <img alt="" src="{{url('public/img/undefined9.png')}}" /><br>
                <h3>Growth</h3>
            </div>
            <div class="card wel col col-6 col-sm col-md col-lg">
                <img alt="" src="{{url('public/img/undefined12.png')}}" /><br>
                <h3>Problem</h3>
            </div>
            <div class="card wel col col-6 col-sm col-md col-lg">
                <img alt="" src="{{url('public/img/undefined13.png')}}" /><br>
                <h3>Facility</h3>
            </div>
        </div>
    </div>
</section>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
<style type="text/css">
    .inf{
        height: 100%;
        width: 100%;
    }.gr h4{
        text-align: center;
        font-family: 'Black Ops One', cursive;
    }.ful{
        margin: 50px 0;
    }.gr span{
        font-weight: 700;
        font-size: 20px;
/*        font-family: 'Black Ops One', cursive;*/
    }.gr{
        color: black;
        padding: 50px 15px !important;
    }
    .gr p{
        font-family: 'Lobstr', cursive;
    }
</style>
<section class="ful">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="inf" alt="" src="{{url('public/img/undefined8.png')}}" />
            </div>
            <div class="col-md-4 gr">
                <h4>MOST READ</h4>
                <span>Our Economy</span><br><br>
                <p>A gradual and steady increase in the revenue of the government to 2000 lakh crores and more (2 Quadrillion).</p>
                <span>Our Achievements</span><br><br>
                <p>Our country will have the highest number of billionaires and happiest people in the world.</p>
                <span>Our Growth</span><br><br>
                <p>100% employmentopportunities will be guaranteed toeverycitizen of thecountry with a minimum salary of Rs.25,000 per month.</p>
                <span>Our Problem</span><br><br>
                <p>Communal riots, Caste discrimination and other issues will never happen anymore in the homeland of India.</p>
            </div>
        </div>
    </div>
</section>

<link href="https://fonts.googleapis.com/css2?family=Nova+Script&display=swap" rel="stylesheet">
<style type="text/css">
    .one{
        background-color: #f3f3f3;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.25);
        border-radius: 15px;
        width: 500px;
        height: 230px;
    }.chil{
        height: 200px;
        width: 200px;
        object-fit: cover;
        border-radius: 15px;
        position: relative;
        left: -40px;
        top: -35px;
    }.hed2{
        margin: 80px 0 80px 0;
        font-family: Black Ops One,cursive;
        font-weight: 800;
        text-align: center;
        padding: 0 0 0 50px;
    }.b{
        background-color: #ff0000;
        color: white;
        font-weight: 700;
        width:125px;
    }.hh h4{
        font-family: serif, Times New Roman;
        font-weight: 600;
        padding: 50px 0 0 0;
    }.hh p{
        font-family: serif, Times New Roman;
        font-weight: 600;
    }.sec{margin:0 0 50px 0;}
    .sppic{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 0 30px 0;
    }
    @media only screen and (min-width:320px) and (max-width:560px){
        .chil{
            width: 100%;
            height: 115px;
            left: 0px;
            top: -18px;
        }.one{
            width: 350px;
            height: 180px;
            margin: 0 0 20px 0;
        }.hh h4{
            padding: 10px 0 0 0;
            font-size: 15px;
            margin-bottom: 14px;
        }.hh p{
            font-size: 15px;
            margin-bottom: 5px;
            font-family: ;
        }.b{
            width: 91px;
            border-radius:25px;
        }
    }
</style>
<section class="sec">
    <div class="container-fluid">
        <h1 class="hed2">Development Schema</h1>
        <div class="row">
            @foreach($dev as $f)
            <div class="col-md-6 sppic">

                <div class="card one">
                    <div class="row">
                        <div class="col-md-4 col-4">
                            <div class="">
                                <img class="chil" alt="correct your" src="{{url('public/upload/' . $f->image)}}" />
                            </div>
                        </div>
                        <div class="col-md-8 col-8 hh">
                            <h4>{{$f->heading}}</h4>
                            <p>{{$f->description}}</p>
                            <button class="btn b btn-sm" style="border-radius: 20px;"><a href="{{('obligation')}}" style="color:white;text-decoration: none;">Read More</a></button>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>
<style type="text/css">
    .conca{
        width:  400px;
        height: 400px;
    }.conpic{
        width:  300px;
        height: 300px;
        border-radius: 10px;
        object-fit: cover;
    }.impo{
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        top: -50px;
    }.cote{
        text-align: center;
        font-family: serif, Times New Roman;
        font-weight: 800;
        margin: 0 0 20px 0;
    }.cote h4{
       font-weight: 800;/*
       font-family:  Black Ops One,cursive;*/
    }.bica{
        width: 360px;
        background-color: #f3f3f3;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.25);
        border: none;
    }.chi{
        background-color: #ff0000;
        color: white;
        font-weight: 700;
        border-radius: 50px;
    }.cepo{
        display: flex;
        align-items: center;
        justify-content: center;
    }
        @media only screen and (min-width:320px) and (max-width:560px){
        .bica {
        width: 75%;

    }.conpic {
        width: 50%;
        height: 50%;
    }.chi{
        width: 84px;
        font-size: 12px;
        height: 29px;
        background-color: #ff0000;
        color: white;
        font-weight: 700;
        border-radius: 25px;
    }.cote p{
        font-size: 12px;
    }



}
</style>
<section>
    <div class="container">
        <h1 style="text-align: center;font-family:  Black Ops One,cursive;margin: 0 0 80px 0;">Resource</h1>
        <div class="row">
            @foreach($res as $d)
            <div class="col-md-4 cepo">
                <div class="card bica">
                    <div class="impo">
                        <img class="conpic" alt="correct your" src="{{asset('public/upload/' . $d->image)}}" />
                    </div>
                    <div class="cote">
                        <h4>{{$d->heading}}</h4>
                        <p>{{$d->description}}</p>
                        <button class="btn chi"><a href="{{('obligation')}}" style="color:white;text-decoration: none;">Read More</a></button>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>

 <!-- <style type="text/css">
        .imgg{
            width:100%;height: 100%;border-radius: 45px;
        }
        .cont{
            margin: 100px 0 0 0;
            text-align: center;
            position: relative;
        }
        .rac{
            width: 200px;
            height: 100%;
            border-radius: 20px;
            position: relative;
        }.rol{
            width: 100%;
            height: 150px;
            border-radius: 20px 20px 0 0;
        }.fdr{
            width: 100px;
            height: 100px;
            border-radius: 50px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            z-index: 1;
            left: 50px;
            top: 110px;
            position: absolute;
        }
    </style>

<section>
    <div class="container">
        <div class="card rac">
            <img class="rol" alt="" src="{{url('public/img/undefined7.png')}}" />
            <div class="card fdr">
                <img class="imgg" alt="" src="{{url('public/img/icoq.jpg')}}" />

            </div>
            <div class="cont">
                <span>Paul walker</span><br>
                <p>Kim</p><br>
                <button class="btn btn-warning">warning</button><br>
                <span>The box-shadow can also be affected by the :hoveThe box-shadow can also be affected by the :hove</span>
            </div>
        </div>
    </div>
</section> -->
<style type="text/css">
    .twon{
        text-align: center;
        font-family: serif, Times New Roman;
    }.twon h1{
        font-weight: 700;
/*        font-size: 25px;*/
    }.twon h4{
        font-weight: 600;
    }.blco{
        background: linear-gradient(59.12deg, #000, rgba(30, 30, 30, 0));
        position: absolute;
        z-index: 1;
        width: 100%;
    height: 100%;
    top: 0;
    }.glim{
        position: relative;
    }.pic{
        position: absolute;
    color: white;
    z-index: 1;
    bottom: 6vh;
    left: 52px;
    font-family: times;
    }.kipo{
        margin: 0 0 50px 0;
    }.careff{
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.25);
        border: none !important;
        background-color: #f3f3f3 !important;
    }

    @media only screen and (min-width:320px) and (max-width:560px){
        .twon h4{
        font-size: 11px;
    }.twon h1{
        font-size: 18px;
    }.kipo{
        margin: 50px 0;
    }.pic{
        left: 13px;
        bottom: 2vh;
        padding: 5px;
    }.pic h2{
        font-size: 15px;
    }.pic span{
        font-size: 12px;
    }


    }
</style>
<section class="kipo">
    <div class="container-fluid">
        <div class="twon">
                <h1>FUTURE INDIA</h1>
                <h4>CITY WITH EQUITY - EFFICIENCY - OPPORTUNITY</h4>
            </div>
        <div class="card careff">
            
            <div class="glim">
               <img alt="" style="width: 100%;height: 100%;" src="{{url('public/img/undefined21.png')}}" />
               <div class="blco"></div>
           </div>
           <div class="pic">
             <h2>HYPER WAY PROJECT</h2>
             <span>This socio-economic plan can solve more issues and thus a new India will be formed.</span>
         </div>
     </div>
 </div>
</section>

    @include('footer')