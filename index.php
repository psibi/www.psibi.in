<!DOCTYPE>
<html>
<head>
  <title>Sibi</title>
  <meta name="keywords" content="sibi, sibi.in, psibi, sastra, kumbakonam" />   
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />   
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="/fancybox/jquery.easing-1.4.pack.js"></script>
  <script src="js/functions.js" type="text/javascript"></script>
  <script>
    function fetchReq(choice){
      if (choice="MORE") {
        $('#more').html('<img class="loader" src =images/ajax-loader.gif />'); //It will select element with ID=more. and html() will change the contents as provide inside it.
        $.get('ajaxHandler.php',{'type':choice},function(data) {
          $('#more').fadeIn('slow'); //Gradually changes visibility from hidden to visibile.
          $('#more').html(data);
        });
        $("#More").css("visibility", "hidden");//Hiding the See More button 
        $("#tabs").show(); //Now making the id="tabs" Visible
      }
    }
</script>
<script type="text/javascript">
		$(document).ready(function() {
$("a#pic").fancybox({
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});
});
	</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27311575-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 
</head>
<link rel="shortcut icon" href="favicon.ico"> <!-- For displaying icon in address bar -->
<body>
  <div id="header"> 
    <ul>
      <div id="tabs" style="display: none"> <!-- Dont display them now. -->
        <li><a href="http://blog.psibi.in" target="_blank"><span>Blog</span></a></li>
	<li><a href="http://psibi.users.sourceforge.net" target="_blank"><span> SourceForge </span> </li>
        </div>
      <li><a href="#" id="More" onclick=fetchReq("MORE");><span>See More</span></a></li> <!--On clicking it the function fetchReq will be called. href="#" is used to specify that anchor is used for JS code. -->
    </ul>
  </div>
  <div id="about">
    <div id="story">
      <h1>Sibi</h1>
      <h2>-- Programmer / Hacker / Free Software Enthusiast</h2>
      <p align="justify">Origined from the port city of Tuticorin and spent most parts of my childhood in the Awadh region Lucknow, I'm a Pythonist by nature and a free software enthusiast by mind who has been dazzled by the spirit of Unix.</p>
      
    </div>
    <ul id="contact">
      <li><span>Phone</span> <strong><span class="phone">+91 7200-120-343</span></strong></li>
      <li><span>Handle</span> <strong><a href="http://psibi.in">psibi</a></strong></li>
      
      <li><span>Resume</span> <strong><a href="resume.pdf">PDF</a> </strong></li>
      <li><span>Email</span> <strong>sibi@psibi.in</strong></li>
      <li>
        <div class="social">
          <a href="http://facebook.com/psibi" target="_blank"><img src="images/social/facebook.png" alt="Friend me on Facebook" /></a> <!-- target="-blank" opens the new window in a tab -->
	   <a href="https://plus.google.com/u/0/102869108986715355195/about" target="_blank"><img src="images/social/gplus.png" alt="Circle me on Google+" /></a>
          <a href="http://twitter.com/psibi" target="_blank"><img src="images/social/twitter.png" alt="Follow me in twitter" /></a> 
          <a href="http://linkedin.com/in/psibi" target="_blank"><img src="images/social/linkedin.png" alt="Connect in Linkedin" /></a> 
          <a href="http://identi.ca/psibi" target="_blank"><img src="images/social/identica.png" alt="Follow me in identi.ca" /></a> 
          <a href="http://github.com/psibi" target="_blank"><img src="images/social/github.png" alt="Check out my github profile" /></a>
        </div>
      </li>
    </ul>
<a id="pic" href="images/sibi.jpg" title="Sibi"><img id="picture" alt="Sibi" src="images/sibi.jpg" /></a>
      </div>
  <div id="more">  <!--This division is for displaying data when the button See More is clicked-->
  </div>
  <div id="footer">
    <p>&copy; Sibi | psibi.in | <small>Last updated on Feb. of '12.</small></p>
  </div>    
</body>
</html>
