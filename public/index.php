<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>
   <!--  <link href="https://www.crystalbit.com/tbs/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet"> 
<style>
  #hp a{
  margin:10px 0 0 20px;
  /* font-size:1.4em; */
  background-color:inherit;
  color:#f0f2f4;
  letter-spacing:-1px;
  font-weight:normal;
  
  font-family: 'Reenie Beanie', cursive;
  color:orange;
  /* text-shadow: 2px 2px 0px rgba(0,0,0,0.2), 4px 4px 8px rgba(0,0,0,0.2);  */

  }
</style>
    <link href="stylesheets/super.css" rel="stylesheet">
<link href="stylesheets/styles.css" rel="stylesheet">


<style type="text/css">
body{
  background-color: #000;
}
.container{
  background-color:#2B3E50;
  opacity:81%;
}




[class*="col-"] {
  padding-top: 15px;
  padding-bottom: 15px;
  //background-color: #344B60;
  color:#D8C7B6; /* #9F7956; */
  //background-color: rgba(86,61,124,.15);
  border: 0px solid #111;
  //border: 1px solid rgba(86,61,124,.2);
}

code, pre {
  margin:0;
  padding:0;
  border:0;
  //padding:2px;
  background-color: transparent;
  color:#D8C7B6;
  font-weight: 400;
}


#nav {

  border-top:0px ridge #FA9A50;   
  border-bottom:0px solid #000;

  background:#FFF;


}


ul {
list-style:none;
}


#nav  ul {
  
  list-style:none;
  
}
.nav-footer { margin:0; }
.nav-footer ul { margin:0 0 0 0; }
#nav li {
  opacity:0.8;
  height:50px;
  display:block;
  float:left;
  
}

#nav a {
  font-size:14px;
  font-weight: bold;
  padding:20px;
  line-height:50px;
  color:#000;
  text-decoration:none;
}
#nav li:hover {
//width:100&#37;  
//background-color:#FFC59F;
//color:magenta;
  
}

#nv {
background-color:#293E6F;
}

ul#nv li {
  min-height:30px;
  cursor:pointer;
  text-align: center;
  font-size:24px;
  line-height: 30px;
  display: inline;
  padding: 10px 0px;
  z-index:999; border-top:0px solid yellow; margin:0; z-index:-1; 
  }
  
  #nv > li a:link {   min-height:25px;line-height: 30px;min-height:30px;cursor:pointer;border-top:0px solid magenta;
  background-color:transparent; color:#FBD3B5; margin:0px; padding: 10px 30px; z-index:-1; }
  #nv > li a:visited { min-height:25px; line-height: 30px;cursor:pointer;color:#FBD3B5; border-top:0px solid magenta;
  background-color:transparent; margin:0px; padding: 10px 30px;z-index:-1; }
  #nv > li a:hover { min-height:25px;line-height: 30px;cursor:pointer;color:#FA9A50; border-top:0px solid #58b2fa;
  background-color:transparent; opacity:1; margin:0px; padding: 10px 30px; margin:0; z-index:-1; }
  #nv > li a:active { min-height:25px;line-height: 30px;cursor:pointer;border-top:0px solid cyan;
  background-color:transparent; color:#FBD3B5; margin:0px; padding: 10px 30px; margin:0; z-index:-1; }
  



#hp {
float:left;padding:0;margin:10px auto auto 15px;height:34px;line-height:40px;font-weight:bold;  color:#FA9A50;
      font: 28pt fantasy, cursive, Serif;
}

.rt {
  text-align: right;
}

 /* 
h4 {
  margin-top: 25px;
}
.row {
  margin-bottom: 20px;
}
.row .row {
  margin-top: 10px;
  margin-bottom: 0;
}


p {
  margin:0;
  padding:0;
  -webkit-margin-before: 0; -webkit-margin-after: 0;
}

hr {
  margin-top: 40px;
  margin-bottom: 40px; } */
#sol{
  
overflow:auto;
min-height:349px; /* min-width: 1170px; */
  z-index:999;background-image:url('/images/sol.jpg'); margin:auto 0px; margin-top: 0;
  
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
<div class="container">
  <div class="row">

    <div class="navbar navbar-default" style="margin-bottom:0; ">
  <ul class="nav navbar-nav">
    <li class="active"><a href="sindex.php?p=index">Home</a></li>
    <!-- <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    </div> -->
  </ul>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sun <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="sindex.php?p=sunrise">Sunrise</a></li>
          <li><a href="sindex.php?p=sunset">Sunset</a></li>
          <li><a href="sindex.php?p=solartransit">Solar Transit</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Today <b class="caret"></b></a>
        <ul class="dropdown-menu"><!-- 
          <li><a href="sindex.php?p=todaysnews">NYT What You Need To Know</a></li>
        -->  <li><a href="sindex.php?p=weather">Weather</a></li>
          
        </ul>
      </li>

     


      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="sindex.php?p=cats">Categories</a></li>
          <li><a href="sindex.php?p=tags">Tags</a></li>
          <li><a href="sindex.php?p=archive">Archives</a></li>
        </ul>
      </li> 

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pics <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="sindex.php?p=pics">Cool</a></li>
           <li><a href="sindex.php?p=pics">Various NYC</a></li>
           <li><a hregf="sindex.php?p=mruns">Morning Runs</a></li>
        </ul>
      </li>




       <li><a href="sindex.php?p=otherplaces">Other Places</a></li>
    </ul>
    <!-- <form class="navbar-form navbar-left">
      <input type="text" class="form-control col-lg-8" placeholder="Search">
    </form> -->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sindex.php?p=contact">Contact</a></li>
     <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="sindex.php?p=about">About</a></li>
          <li><a href="sindex.php?p=yourclient">Your Client</a></li>
          
        </ul>
      </li>

      
     
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <b class="caret"></b></a>
        <ul class="dropdown-menu">
           <li><a href="sindex.php?p=register">Create Account</a></li>
           <li><a href="sindex.php?p=fpass">Forgot Password</a></li>
         
           <li><a href="sindex.php?p=login">Login</a></li>
                </ul>
      </li>
    </ul>
  </div>
</div>
<!-- 
<div class="alert alert-dismissable alert-success" style="margin-bottom:0;">
<button type="button" class="close" data-dismiss="alert">×</button>

You are logged in
<strong>Hello</strong> visitor from < ?php echo $_SERVER['REMOTE_ADDR']; ? >

</div>
-->
<div id="sol" style="">
  <div style="margin:auto 0px;">
    <div id="hp"><a href="sindex.php?p=index">James's Home Page</a>
    </div>
    <div style="clear:both;">
    </div>
  </div>
</div>
<!-- 
<div class="alert alert-dismissable alert-info" style="margin-bottom:0;">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Welcome!</strong> Please <a href="sindex.php?p=register" class="alert-link">register</a> for my website.
</div> -->


<!-- <div class="alert alert-success" role="alert">...</div>
<div class="alert alert-info" role="alert">...</div>
<div class="alert alert-warning" role="alert">...</div> 
<div class="alert alert-danger" role="alert">...</div>-->

<!-- Left (Main) -->
<div class="col-md-8" style="min-height:1000px;">
<div class="panel panel-default">
  <div class="rt panel-heading">
    <div style="float:left">A Newest Post
    </div> 
<?php //<su>pst</sup>
    $date = new DateTime('2000-01-01');
echo $date->format('l | M jS Y | g:i a T');
  ?></div>
  <div class="panel-body">
<p class="post">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labor m.</p>


 <blockquote class="ludwig">
   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  </blockquote>

<p class="post"> 

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>


    <hr />
 Categories: <br />
    Tags: <br />
  </div>
</div>


     








 <!-- /row -->
    </div>


<div class="col-md-4">


<div class="bs-component">
<div class="panel panel-default">
<div class="panel-heading">Recent Posts
</div>
<div class="panel-body"><ul style="text-indent:0; margin:0;padding:0;">
  <li>A newest post</li>
    <li>A newer post</li>
      <li>A new post</li>
    </ul>
<br />
</div>
</div> 
</div>

<div class="bs-component">
<div class="panel panel-default">
<div class="panel-heading">Tags
</div>
<div class="panel-body">
<ul style="text-indent:0; margin:0;padding:0;">
    <li>dfssfd</li>
     <li>dfssfd</li>
      <li>dfssfd</li>
       <li>dfssfd</li>
        <li>dfssfd</li>
         <li>dfssfd</li>
</ul><br />
</div>
</div> 
</div>

<div class="bs-component">
<div class="panel panel-default">
<div class="panel-heading">Categories
</div>
<div class="panel-body">
<ul style="text-indent:0; margin:0;padding:0;">
   <li>dfssfd</li>
    <li>dfssfd</li>
     <li>dfssfd</li>
      <li>dfssfd</li>
       <li>dfssfd</li>
    </ul><br />
</div>
</div> 
</div>

<div class="bs-component">
<div class="panel panel-default">
<div class="panel-heading">Archives
</div>
<div class="panel-body">
<ul style="text-indent:0; margin:0;padding:0;">
   
<li>December 2012</li><li>November 2012</li><li>October 2012</li><li>September 2012</li><li>August 2012</li><li>July 2012</li><li>June 2012</li><li>May 2012</li><li>April 2012</li><li>March 2012</li><li>February 2012</li><li>January 2012</li><li>December 2013</li><li>November 2013</li><li>October 2013</li><li>September 2013</li><li>August 2013</li><li>July 2013</li><li>June 2013</li><li>May 2013</li><li>April 2013</li><li>March 2013</li><li>February 2013</li><li>January 2013</li>

</ul></div>
</div> 
</div>


Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>

<br />
<br />
<br /> 






<div class="col-md-12" style="border-bottom:1px solid #4e5d6c; min-width:100%;">
    <div class="bs-component">
    <ul class="pagination pagination-sm">
    <li class="disabled"><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
    </ul>
    </div>
</div>



	<div style="">

	<div class="col-md-4">Coded in the <img src="./images/usa.png"></img> U.S.A. using vim and <a href="https://www.sublimetext.com/">SublimeText</a><br /><br /><br /><br />  
	</div>
	<div class="col-md-4">© <?php echo date('Y'); ?> James <br /><br /><br /><br />
	</div>
	<div class="col-md-4"><a href="https://validator.w3.org/check?uri=https%3A%2F%2Fwww.crystalbit.com%2Fsindex.php&charset=%28detect+automatically%29&doctype=Inline&group=0">HTML 5</a> rendered in: 0.03 microseconds<br /><br /><br /><br />
	</div> 
	</div>


    <!-- /row -->
    </div>






      <!-- /row -->
    </div>




























</div> <!-- /row -->
</div> <!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>





