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
  <style>
  	.home{
  		display: none;
  	}
  </style>
</head>

<body>

  <div class="container">
  	<div class="main" role="main">
  	<div class="content">
	    <header>
			<h1>Alicia <span>web developer</span></h1>
			<nav>
				<ul>
					<li><a href="work.html" title="Check out what I have worked on!">Works</a></li>
					<li><a href="" title="">About Me</a></li>
					<li><a href="" title="">Contact</a></li>
				</ul>
			</nav>
	    </header>
	    
	    <div class="home">
		    <div class="left">
			    <h2>Well Hello!</h2>
			    <p>What a failure, I am a web developer and my site is unfinished! Art takes time, as they say. Trust me I guarantee it will be the awesome-sauce when its done. Be sure to come back and check!</p>
			    
			    <h2>Until then…</h2>
			    <p>Feel free to check out my social profiles, download my <a href="resume_10_17_11_2.pdf" title="Download my resume">resume</a>, or send me a message, I would be happy to hear from you! </p>
		    	
		    	<div class="socialicons">
		    		<a href="http://twitter.com/#!/aliciaj_" title="Aliciaj_ at Twitter"><img src="img/ico_twitter.png" alt="Follow me on Twitter"/></a>
		    		<a href="http://zerply.com/aliciaj_" title="Aliciaj_ at Zerply"><img src="img/ico_zerply.png" alt="Check out my Zerply"/></a>
		    		<a href="http://forrst.com/people/aliciaj" title="Aliciaj at Forrst"><img src="img/ico_forrst.png" alt="Forrst"/></a>
		    		<a href="http://zootool.com/user/aliciaj/type:all/search:web" title="Aliciaj at Zootool"><img src="img/ico_zootools.png" alt="Zootools"/></a>
		    		
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

		
		<div class="works">
			
			<ul>
				<li>
					<div class="one">
						<h2>Site Title</h2>
						<a href="" title="">Live link</a>
						<a href="" title="">Quick Preview</a>
						<a href="" title="">Case Study</a>
					</div>
					<div class="two">
						<a href="" title=""><img src="img/portfolio/barn2.jpg" alt="The Barn"/></a>
					</div>	
				</li>
				<li>
					<div class="one">
						<h2>Site Title</h2>
						<a href="" title="">Live link</a>
						<a href="" title="">Quick Preview</a>
						<a href="" title="">Case Study</a>
					</div>
					<div class="two">
						<a href="" title=""><img src="img/portfolio/barn2.jpg" alt="The Barn"/></a>
					</div>
					
				</li>
				<li>
					<div class="one">
						<h2>Site Title</h2>
						<a href="" title="">Live link</a>
						<a href="" title="">Quick Preview</a>
						<a href="" title="">Case Study</a>
					</div>
					<div class="two">
						<a href="" title=""><img src="img/portfolio/barn2.jpg" alt="The Barn"/></a>
					</div>
					
				</li>
				<li>
					<div class="one">
						<h2>Site Title</h2>
						<a href="" title="">Live link</a>
						<a href="" title="">Quick Preview</a>
						<a href="" title="">Case Study</a>
					</div>
					<div class="two">
						<a href="" title=""><img src="img/portfolio/barn2.jpg" alt="The Barn"/></a>
					</div>
					
				</li>
				<li>
					<div class="one">
						<h2>Site Title</h2>
						<a href="" title="">Live link</a>
						<a href="" title="">Quick Preview</a>
						<a href="" title="">Case Study</a>
					</div>
					<div class="two">
						<a href="" title=""><img src="img/portfolio/barn2.jpg" alt="The Barn"/></a>
					</div>
					
				</li>
				<li>
					<div class="one">
						<h2>Site Title</h2>
						<a href="" title="">Live link</a>
						<a href="" title="">Quick Preview</a>
						<a href="" title="">Case Study</a>
					</div>
					<div class="two">
						<a href="" title=""><img src="img/portfolio/barn2.jpg" alt="The Barn"/></a>
					</div>
					
				</li>
				
			</ul>
		</div><!-- works -->
    	
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


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->
  
  <script type="text/javascript">


		$(function() {
			
			$('.works li').hover(function(){
				$(this).find('div:first-child').css('display', 'block');
			}, function(){
				$(this).find('div:first-child').css('display', 'none');
			}
			
			);
		
		
		});

	</script>


  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
