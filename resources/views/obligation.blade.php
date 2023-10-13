@include('header')


<style type="text/css">
  /* Desktop Styles */
  .df {
    position: absolute;
    top: 0px;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .rg {
    position: relative;
    background-color: #fff;
    width: 100%;
    height: 300px;
    overflow: hidden;
    text-align: left;
    font-size: 16px;
    color: #000;
    font-family: Inter;
  }

  .rock {
    position: absolute;
    top: 19px;
    left: 617px;
    width: 595px;
    height: 80px;
    font-size: 14px;
  }

  .home a,
  .about-us a,
  .gallery a,
  .obligation a,
  .contact a {
    color: black;
    text-decoration: none;
    font-weight: bold;
    font-size: 15px;
  }

  .pika {
    position: absolute;
    top: 18px;
    left: 599px;
    background: linear-gradient(180deg, #f8f9fa, rgba(0, 0, 0, 0.15) 0.01%, rgba(0, 0, 0, 0));
    width: 410px;
    height: 80px;
  }

  .kn {
    text-align: center;
    position: relative;
    z-index: 1;
    top: -65px;
    color: white;
    font-size: 15px;
  }

  .kn a {
    text-decoration: none;
    color: white;
  }.mobile-menu {
    display: none;
  }

  /* Mobile Styles */
  @media only screen and (max-width: 768px) {
    .rock,
    .pika {
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

<div class="rg">
  <img class="df" alt="" src="{{url('public/img/cit1.jpg')}}">

  <div class="mobile-menu-button">&#9776;</div>
  <div class="pika"></div>
  <div class="rock">
    <div class="group-child">
    </div>
    <div class="contact"><a href="{{url('contact')}}">To Unite empery</a></div>
    <div class="home"><a href="{{url('/')}}">Home</a></div>
    <div class="about-us"><a href="{{url('about')}}">About us</a></div>
    <div class="gallery"><a href="{{url('gallery')}}">Gallery</a></div>
    <div class="obligation"><a href="{{url('obligation')}}">Obligation</a></div>
  </div>
</div>

<h4 class="kn"><a href="{{url('/')}}">Home &nbsp;›&nbsp;</a>Obligation</h4>

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


<style type="text/css">
  .lin {
    border-top: 1px solid #fb542b;
    padding: 50px 0 0 0;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .colour {
    background-color: #fb542b;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    width: 100px;
    height: 20px;
    float: right;
    position: absolute; /* Add position: absolute */
    top: 0; /* Add top: 0 */
    right: 0;
  }

  .colourr {
    background-color: #fb542b;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    width: 100px;
    height: 20px;
    float: left;
    position: absolute; /* Add position: absolute */
    top: 0; /* Add top: 0 */
    left: 0;
  }.pore{
    margin: 100px 0;
  }.flri{
    position: relative;
    margin: 0 0 40px 0;
  }
   svg {
width: 50px;
  }.pag p{
    margin-top: unset;
    margin-bottom: unset;
  }.pag{
      width: auto;
      height: 50px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }.sik{

    }
  @media only screen and (min-width:320px) and (max-width:560px){
    .flri{
    margin: 0 0 40px 0;
  }

    }
    
</style>

<!-- <section class="pore">
  <div class="container">
    <div class="row">
      
        <div class="col-md-5 flri">
          <div class="row lin">
            <div class="col-md-7">
              <p>A gradual and steady increase in the revenue of the government to 2000 lakh crores and more (2 Quadrillion).</p>
            </div>
            <div class="col-md-5">
              <div class="colour">Economy</div>
              <img alt="" src="{{url('public/img/eco.jpg')}}" style="width: 180px;height: 190px;">
            </div>
          </div>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-5 flri">
          <div class="row lin">
            <div class="col-md-7">
              <p>India’s GDP will upsurge to $30 trillion and more by 2030.</p>
            </div>
            <div class="col-md-5">
              <div class="colourr">Economy</div>
              <img alt="" src="{{url('public/img/eco1.jpg')}}" style="width: 180px;height: 190px;">
            </div>
          </div>
        </div>

    </div>

  </div>


</section> -->

<section class="pore">
  <div class="container">
    <div class="row">
      @foreach($obg as $index => $item)
        
          
            

      @if($index % 2 == 0)
      <div class="col-md-5 flri">
        <div class="row lin">
          <div class="col-md-7">
            <p>{{ $item->description }}</p>
          </div>
          <div class="col-md-5 sik">
            <div class="colour">{{ $item->heading }}</div>
            <img alt="" src="{{ url('public/upload/' . $item->image) }}" style="width: 160px; height: 170px;">
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
      @else
      <div class="col-md-5 flri">
        <div class="row lin">
          <div class="col-md-5">
            <div class="colourr">{{ $item->heading }}</div>
            <img alt="" src="{{ url('public/upload/' . $item->image) }}" style="width: 160px; height: 170px;">
          </div>
          <div class="col-md-7">
            <p>{{ $item->description }}</p>
          </div>
        </div>
      </div>
      @endif
              
            
          
        
        
      @endforeach

    </div>
  </div>
  <div class="pag">
 <center> {{ $obg->links() }}</center>
 </div>
</section>


@include('footer')