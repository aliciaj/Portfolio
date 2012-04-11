<?php 
if(!empty($_POST)){
	 
	if(isset($_POST['contact'])){
	
		
		$fullname = $_POST['name'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];
		
		//$to = 'aliciaj.com' . ', ';
		$to .= 'aliciajdev@gmail.com';
		
		$subject = "$name has contacted you through aliciaj.com.";
		
		$error_list = array();
		
		if(empty($error_list)){
			$message .= "\t Name: $fullname \n"; 
			$message .= "\t Email: $email \n "; 
			$message .= "\t Comments: $comments \n ";
			
			//echo $message;
			$mail = @mail($to, $subject, $message);
			
			//display thanks 
			echo '<script> alert("Thank you for contacting me!") </script>';
			
			if($mail){
				//echo "yay contact sent";
			}else{
				//echo "not sending email";
			}//mail sent
		}else{
			//echo "error";
		}//empty error list

	}else{
		//echo "nothing was sent";
	}//isset contact	
}//if post
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Alicia Brooks - Web Developer</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  
  
	
</head>

<body>

  <div class="container">
  	<div class="main" role="main">
  	<div class="content">
	    <header>
			<h1>Alicia <span>web developer</span></h1>
			<nav>
				<ul>
					<li><a href="index.php" title="Learn a little about me" class="active">About Me</a></li>
					<li><a href="works.html" title="Check out what I have worked on!">Works</a></li>
					<!-- <li><a href="" title="">Contact</a></li> -->
				</ul>
			</nav>
	    </header>
	    
	    <div class="home">
		    <div class="left">
		    	
			    <h2>Well Hello!</h2>
			    <div class="intro">
			    	<a href="./img/me_thumb.jpg" title="" id="avatar"><img src="img/me_thumb_extra.jpg" alt="Me Alicia" class="avatar"/></a>
				    <p>I am a fun girl from a small town in Indiana. I traveled all the way down to Florida so that I could attend Full Sail University and make my dreams come true. Ever since I discovered HTML in Jr. High while surfing Neopets.com I have been interested in the Web and how it works. That interest is what drives me to continue to learn everything I can. I love what I do!</p>
		    	</div>
			    
			    
			    
		    	<h2>I'm Social!</h2>
		    	<div class="socialicons">
		    		<a href="http://twitter.com/#!/aliciaj_" title="Aliciaj_ at Twitter" target="_blank"><img src="img/ico_twitter.png" alt="Follow me on Twitter"/></a>
		    		<a href="http://zerply.com/aliciaj_" title="Aliciaj_ at Zerply" target="_blank"><img src="img/ico_zerply.png" alt="Check out my Zerply"/></a>
		    		<a href="http://forrst.com/people/aliciaj" title="Aliciaj at Forrst" target="_blank"><img src="img/ico_forrst.png" alt="Forrst"/></a>
		    		<a href="http://zootool.com/user/aliciaj/type:all/search:web" title="Aliciaj at Zootool" target="_blank"><img src="img/ico_zootools.png" alt="Zootools"/></a>
		    		
		    	</div>
		    	<div class="clear"></div>
		    </div><!-- left -->
    	
	    	<div class="right">
	    	
	    	
	    		<h2>Contact Me:</h2>
	    	
	
				<form action="index.php" method="post" id="contactform">
					<p id="error"></p>
	    			<fieldset>
		    			<input type="text" name="name" value="Name:" class="input_text" id="name" />
						<input type="hidden" name="contact" value="contact"/>
					
						<input type="text" name="email" value="Email:" class="input_text" id="email" />
						
						<textarea rows="9" cols="50" name="comments" class="input_area" id="comments">Comments:</textarea>
						
						<input type="submit" id="submit" class="input_submit"/>
					</fieldset>
				</form> 
	    
	    	</div><!-- right -->
		</div><!-- home -->

		
		
			
		
    	
	</div><!-- content -->
    </div><!-- main -->
    <div id="thanks">Thank you for contacting me!</div>
    <footer>
		<p>&copy;Copyright 2011 Alicia Brooks</p>
    </footer>
  </div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
  
  <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
  
  <!-- fancybox -->
  <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->
  
  
	


  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>
  
  <script type="text/javascript">
		$("a#avatar").fancybox();
	</script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
