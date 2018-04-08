<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        Ecommerce
        |
        @yield("title")
    </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {!!Html::style('website/css/bootstrap.min.css') !!}
        {!!Html::style('website/css/flexslider.css') !!}
        {!!Html::style('website/css/style.css') !!}
        {!!Html::style('website/css/font-awesome.min.css') !!}
        {!!Html::script('website/js/jquery.min.js') !!}
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</head>
<body id="app-layout">
        <div class="header">
                <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i>Mobile Store</a>
                  <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                    <ul class="nav" id="nav">
                      <li class="current"><a href="{{url('/products/showall')}}">Home</a></li>
                      <li><a href="/products/showall">All Products</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="/contactUs">Contact Us</a></li>
                      
                      @if (Auth::guest())
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                           
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                          </ul>
                      </li>
                  @endif
                  <li>
                        <a class="btn btn-default btn-sm ml-3" href="/cart">
                                <i class="fa fa-shopping-cart"></i> Cart
                        <span class="badge badge-light">{{Cart::count()}}</span>
                            </a>
                        
                    </a>
                  </li>
                      <div class="clear"></div>
                    </ul>
                     
                  </div>
                </div>
              </div>



@yield('content')

    <div class="footer">
            <div class="footer_bottom">
              <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
              <div class="copy">
                <p>Copyright &copy; 2018 Company Name. Design by Ahmed Fathi </p> 
              </div>
            </div>
          </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    
    {!!Html::script('website/js/bootstrap.min.js') !!}
   
    
</body>
</html>
