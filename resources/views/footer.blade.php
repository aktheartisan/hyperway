<style type="text/css">
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
        .blac{
            background-color: black;
        }.fox, .fox1, .fox2{
            color: white;
        }ul{
            list-style-type: none;
        }.qs{
            font-size: 18px;
            font-weight: 500;
            text-align: justify;
        }.col-md-4, .col-md-3{
            padding: 50px 0;
        }.on{
            width: 40px;
            height: 40px;
            margin: 0 15px 0 0;
        }.onn{
            height: 30px;
            width: 30px;
        }li{font-weight: 500;font-size: 16px;margin: 0 0 8px 0;
        }li a{
            list-style: none;text-decoration: none !important;color: white;
        }
        .foxx{font-weight: 500;font-size: 16px;}
        .fox, .fox1, .fox2{
            padding: 10px;
        }
    </style>
    <footer>
        <div class="blac">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fox">
                            <h4>HYPERWAY</h4>
                            <span class="qs">We have created a huge socio-economic plan called “The hyper way project” to resolve all the problems prevailing in the country and to transform India into rich and the world super power.</span><br><br>
                            <h4>Follow us</h4>
                            <img class="on" alt="" src="public/img/undefined.png" />
                            <img class="on" alt="" src="public/img/undefined1.png" />
                            <img class="on" alt="" src="public/img/undefined2.png" />
                            <img class="on" alt="" src="public/img/undefined3.png" />
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="fox1">
                            <h4>Essential link</h4>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('gallery')}}">Gallery</a></li>
                                <li><a href="{{url('obligation')}}">Obligation</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fox2">
                            <h4>Join us through this to aware of Future Have a question?</h4><br><br>
                            <div class="foxx">
                                <span><img class="onn" alt="" src="public/img/undefined5.png" />&nbsp;&nbsp;&nbsp;{{$phone}}</span><br><br>
                                <span><img class="onn" alt="" src="public/img/undefined6.png" />&nbsp;&nbsp;&nbsp;{{$email}}</span><br><br>
                                <span><img class="onn" alt="" src="public/img/undefined4.png" />&nbsp;&nbsp;&nbsp;{{$address}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</html>