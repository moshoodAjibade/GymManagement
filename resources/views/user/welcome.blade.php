
{% load static %}
<!DOCTYPE html>
<html lang="en">
<head>
<title>Derby Fitness Club</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="{% static 'css/reset.css' %}">
<link rel="stylesheet" type="text/css" media="screen" href="{% static 'css/style.css' %}">
<link rel="stylesheet" type="text/css" media="screen" href="{% static 'css/grid_12.css' %}">
<link rel="stylesheet" type="text/css" media="screen" href=" {% static 'css/slider.css' %}">
<script src="{% static 'js/jquery-1.7.min.js' %}"></script>
<script src="{% static 'js/jquery.easing.1.3.js' %}"></script>
<script src="{% static 'js/tms-0.3.js' %}"></script>
<script src="{% static 'js/tms_presets.js' %}"></script>
<script src="{% static 'js/cufon-yui.js' %}"></script>
<script src="{% static 'js/Asap_400.font.js' %}"></script>
<script src="{% static 'js/Coolvetica_400.font.js' %}"></script>
<script src="{% static 'js/Kozuka_M_500.font.js' %}"></script>
<script src="{% static 'js/cufon-replace.js' %}"></script>
<script src="{% static 'js/FF-cash.js' %}"></script>
<script>
$(window).load(function(){
	$('.slider')._TMS({
	prevBu:'.prev',
	nextBu:'.next',
	pauseOnHover:true,
	pagNums:false,
	duration:800,
	easing:'easeOutQuad',
	preset:'Fade',
	slideshow:7000,
	pagination:'.pagination',
	waitBannerAnimation:false,
	banners:'fade'
	})
}) 	
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <div class="bg-img"></div>
  <!--==============================header=================================-->
  <header>
    <h1><a href="index">Derby<strong>Fitness</strong> </a></h1>
	
    <nav>
      <div class="social-icons"> <img src="{% static 'images/uod.jpg' %}" style="width:70px;height:80px;" ></a>
	   </div>
      <ul class="menu">
        <li class="current"><a href="index">Home</a></li>

        
        <li><a href="signup">Gym Membership</a></li>
        <li><a href="schedule">Schedule</a></li>
       
        
        <li><a href="login">login</a></li>
        <li><a href="contact">contact</a></li>
      </ul>
    </nav>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <h2>Welcome</h2>
        {% if request.user.is_authenticated %}
        <p>Hello {{request.user}}</p>
        {% endif %}
  </section>

  <!--==============================footer=================================-->
  <footer>
    <p>© <script>document.write(new Date().getFullYear())</script> Mosh Fitness Club</p> 
    <p>KEDLESTON R0AD <a target="_blank" href="" class="link">DERBY</a></p>
  </footer>
</div>
<script>Cufon.now();</script>
</body>
</html>


    
