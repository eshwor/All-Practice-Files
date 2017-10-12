<?php
/*if(isset($_POST['send'])){
$to      = 'ishwor_k1989@yahoo.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: ishwor_k1989@yahoo.com' . "\r\n" .
       'Reply-To: ishwor_k1989@yahoo.com';

mail($to, $subject, $message, $headers);  
}*/
?>

<!DOCTYPE>
<html>
<head>
    <title>Ishwor KC || Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ishworportfolio , portfolio ">
    <meta name="keywords" content="portfolio , CSS, XML, XHTML, JavaScript">
    <!--link of bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
<script>
 window.onscroll = function(){
      if(document.body.scrollTop > 550){
        $('#top-menu').slideDown();
        $('#top-menu').css("position","fixed");      
      }else{
           $('#top-menu').hide();
      }
        if(document.body.scrollTop > 40){
            $('#sub-service-container').fadeIn(1500);
        }
        if(document.body.scrollTop > 1300){
            $('#sub-project-container').fadeIn(2200);
        }
      if(document.body.scrollTop > 3300){
            $('#sub-contact-container').fadeIn(2200);
        }
  } 
  
/*content animation during menu click*/
      $(document).ready(function(){
          $('.service-menu').click(function(){
              $('#sub-service-container').fadeIn(1500);
          });
          $('.project-menu').click(function(){
              $('#sub-project-container').fadeIn(1500);
          });
           $('.contact-menu').click(function(){
              $('#sub-contact-container').fadeIn(1500);
          });
          $('#small-device-menu').click(function(){
              $('#top-menu').slideToggle();
              $('#top-menu').css("position","fixed"); 
          });
      });

    /*header content during page load*/
  window.onload = function(){
    $('#header-content') .fadeIn();
    $('#logo').fadeIn(2000);
  }
  
</script>
    
</head>
<body>
<!--scrool and small device menu bar start code-->
<div id="top-menu">
<div id="scroll-nav-div">
    <nav>
        <ul>
           <li><a href="">home</a></li>
           <li><a class="service-menu" href="#service">service</a></li>
           <li><a class="project-menu" href="#project">project</a></li>
            <li><a class="contact-menu" href="#contact">contact</a></li>            
        </ul>
    </nav>
</div>
</div>
<!--scrool and small device menu bar end code-->

<header>
<div id="header-container">
<p id="logo"><img src="images/logo.png" alt=""></p>
<!--Small devices Menu Bar Code Start From Here-->
<div id="small-device-menu"></div>
<!--Small devices Menu Bar Code END From Here-->
<div id="nav-div">
    <nav>
        <ul>
            <li><a class="contact-menu" href="#contact">contact</a></li>
            <li><a class="project-menu" href="#project">project</a></li>
            <li><a class="service-menu" href="#service">service</a></li>
            <li><a class="home-menu" href="">home</a></li>
        </ul>
    </nav>
<hr>
</div>
<span id="header-content"><span id="header-title">websites done here</span><br>I am a web developer from Louisville Kentucky. I enjoy building everything from small business sites to rich interactive web apps. If you are a business seeking a web presence or an employer looking to hire, you can get in touch with me.<br><br><span id="need-website-button"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeD7iuqdcHFDeT2VEk8R4cHPwJkiLwTA5_uF-aMbSinJFM5tw/viewform?usp=sf_link" target="_blank">I need a website</a></span>&nbsp;&nbsp;&nbsp;<span id="hire-button"><a href="">I am looking to hire</a></span></span>
</div>
</header>

<div id="main-container">


<!--service session-->
<session name="service" id="service">
<div id="main-service-container">
<div id="sub-service-container">
<h1>service</h1>
<!--skills content div-->
<div id="service-leftside-container">
<h3><span class="glyphicon glyphicon-hand-right" style="color:#e6e6e6;"></span>&nbsp; Website Design</h3>
<h5>Simplicity is one of the golden rules of website design which allows your content to guide the layout. The audience should have an enjoyable, positive experience when using your websites. My approach is to create a website that strengthens your company's brand while ensuring ease of use and simplicity for your audience..</h5>
<br>
<h3><span class="glyphicon glyphicon-hand-right" style="color:#e6e6e6;"></span>&nbsp; Website Development</h3>
<h5>The website development starts by taking the graphical elements such as colors, fonts, layout, images, multimedia etc which defined in the design process and coding them using web industry standards languages such as PHP, HTML5, CSS3, Javascript, JQuery, Sass etc. This is only not enough for build complete websites. It's important to has a responsive website which helps to make your website easily accessible across all devices and web browswer such as: Firefox, Chrome, Safari, Internet Exploere, Opera and desktop computer, ipad, iphone with any sizes. </h5><br>
<h3><span class="glyphicon glyphicon-hand-right" style="color:#e6e6e6;"></span>&nbsp; UI / UX</h3>
<h5>Today's world idustry required to their employee to have UI / UX skills. To be honest, I am not a professional UI / UX developer but I know the essential skills which is enough for your company. I can design logos, icons and varities of graphic which reflects a company's personality, values and creativity through a combination of the best shapes, colors and fonts.</h5>
<br>
<h3><span class="glyphicon glyphicon-download" style="color:#e6e6e6;"></span>&nbsp;<a href="file/resume.pdf" target="_blank" style="text-decoration:none; color:#fb074b;">Resume</a></h3>
<h5>You can download my resume <a href="file/resume.pdf" target="_blank" style="text-decoration:none; color:#fb074b;">here</a> for more details. You can also check my cover letter and gitHub repository.</h5>
<br>

</div>
<div id="service-rightside-container">
<h3><span class="glyphicon glyphicon-search" style="color:#e6e6e6;"></span>&nbsp; SEO (Search Engine Optimisation)</h3><br>
<h3><span class="glyphicon glyphicon-lock" style="color:#e6e6e6;"></span>&nbsp; Website Security Maintenance & Updates</h3><br>
<h3><span class="glyphicon glyphicon-resize-full" style="color:#e6e6e6;"></span>&nbsp; Responsive Website Design</h3><br>
<h3><span class="glyphicon glyphicon-pencil" style="color:#e6e6e6;"></span>&nbsp; Creative / Research</h3><br>
<h3><span class="glyphicon glyphicon-pencil" style="color:#e6e6e6;"></span>&nbsp; Content Writing</h3><br>
<h3><span class="glyphicon glyphicon-cog" style="color:#e6e6e6;"></span>&nbsp; CMS Development</h3><br>
<h3><span class="glyphicon glyphicon-cog" style="color:#e6e6e6;"></span>&nbsp; cPanel / Hosting / Domain</h3><br>
<h3><span class="glyphicon glyphicon-ok" style="color:#e6e6e6;"></span>&nbsp; Customer Support</h3><br>
</div>
<!--skills content div end-->
</div>
</div>
</session>  
<!--Project session-->
<session name="project" id="project">
<div id="main-project-container">
<div id="sub-project-container">
   <h1>Project</h1>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Projects are always awasome. Here are my some latest project.</p>  
    <br>
   <div id="project-content-div">
        <div id="left-project-image"><img id="project-image" src="images/project1.png" alt="ProjectOne"></div>
        <div id="right-project-description"><h4><a href="">Portofilio-Site</a></h4><p>This is my portfolio site which I built it from scratch to finish with my own design and code. Here I have display my skills, some of my latest project, gitHub repository link, Resume, Cover Letter and also cantact form where my future employer can contact me easily.<br><span class="display-language">HTML5</span>&nbsp;&nbsp;<span class="display-language">CSS3</span>&nbsp;&nbsp;<span class="display-language">JavaScript</span>&nbsp;&nbsp;<span class="display-language">JQuery</span>&nbsp;&nbsp;<span class="display-language">PHP mail setup</span></p></div> 
   </div> 
    <br><br><br><br>
   <div id="project-content-div">
        <div id="left-project-image"><img id="project-image" src="images/project2.png" alt="ProjectOne"></div>
        <div id="right-project-description"><h4><a href="http://newshowprogram.com" target="blank">newshowprogram</a></h4><p>This is my another news show project. I try to display latest news with PHP CRUD functionality. I still working on this site because I am going to change Admin Login to to the top bar and contact form. I have used HTML5, CSS3, JavaScript, JQuery, PHP and MySQL</p></div> 
   </div> 
<br><br><br><br>
   <div id="project-content-div">
        <div id="left-project-image"><img id="project-image" src="images/project3.png" alt="ProjectOne"></div>
        <div id="right-project-description"><h4><a target="_blank" href="http://peopleshydro.com.np">peopleshydro</a></h4><p>Tweetmap is a web application that lets users view who is tweeting nearby. Using geocode data, each tweet is pinned on a map where it originated. Although currently a work in progress, it will offer the option to filter by hashtags, date, and location.</p></div> 
   </div> 
</div>
</div>
</session>  
   
<!--contact session-->
<session name="contact" id="contact">
<div id="main-contact-container">
<div id="sub-contact-container">
   <h1>contact</h1>
<div id="photo"></div>
<div id="contact-form-div">
<form action="" method="post" name="contact-form" id="contact-form">
<input type="text" name="name" placeholder="name" required>
<input type="email" name="email" placeholder="email" required>
<input type="phone" name="phone" placeholder="phone" required>
<textarea name="message" id="message" placeholder="your message goes here......" required></textarea><br><br><br>
<button name="send" value="send" id="submit">send</button>
 </form>
</div>

</div>
</div>
</session>  
    
    
    
        
    
<footer><p><a href="https://github.com/eshwor/ehworbag.git" target="_blank">GitHub</a> || <a href="file/resume.pdf" target="_blank">Resume</a> || <a href="">Cover Letter</a></p>All Rights Reserved by Ishwor - 2017</footer>  
</div><!--main container div end-->



</body>
</html>