<?php 
	$category = get_the_category(); 
	$cate = $category[0]->cat_name;
	$img = "job2.jpg";
	$title = "Coopta : Jobs";
	$description = "The Challenge Pool for Our Beloved Talents";
	$bigText = "Jobs";
	if($cate == "INSIGHTS"){
		$bigText = "Insights";
		$img = "ins.jpg";
		$title = "Coopta : Insights";	
		$description = "At Coopta, we are immersed in your market every day. We know what your people want, what motivates them and how changes in our greater market influence these individual wants and needs. We proactively stay ahead of these changes, and are constantly working to ensure that our organisation is ready and available to share our deep market knowledge with you.";
	} 
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $title;?></title>  

    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST'];?>/achive_files/screen.css">
    <link rel="stylesheet" type="text/css" href="<?php $_SERVER['HTTP_HOST'];?>/achive_files/css.css">
 
    <meta name="referrer" content="origin">
     
    <meta property="og:type" content="website"> 
    <meta property="og:description" content="">
    <meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'];?>">
	
    <meta property="og:image" content=""http://<?php echo $_SERVER['HTTP_HOST'];?>/achive_files/job1.jpg"> 
     
	
<link rel="shortcut icon" type="image/x-icon" href="http://www.coopta.com.cn/static/cc.png">
    <link rel="apple-touch-icon" href="http://www.coopta.com.cn/static/cc.png">
	<link rel="icon" type="images/png" sizes="16*16" href="http://www.coopta.com.cn/static/cc.png">
    <meta name="generator" content="Ghost 0.7">
    <link rel="alternate" type="application/rss+xml" title="COLONY" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/rss/">
     
 <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style> </head>
<body class="home-template nav-closed">

<style type="text/css">
.demoSpan1:before, .demoSpan1:after{content:''; height:20px; display:block; position:absolute; top:0; left:0; }

.demoSpan1:before{width:20px; border:3px #333 solid; border-radius:100%;-webkit-border-radius:100%;-moz-border-radius:100%;}

.demoSpan1:after{width:7px; background:#333; transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg); top:17px; left:24px;}
</style>

    <div class="nav">
    <h3 class="nav-title">Menu</h3>
    <a href="#" class="nav-close">
        <span class="hidden">Close</span>
    </a>
    <ul>
            <li class="nav-home nav-current" role="presentation"><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>">Home</a></li>
    </ul>
    <a class="subscribe-button icon-feed" href="http://<?php echo $_SERVER['HTTP_HOST'];?>">Subscribe</a>
</div>
<span class="nav-cover"></span>


    <div class="site-wrapper">


<header class="main-header " style="background-image: url(http://<?php echo $_SERVER['HTTP_HOST'];?>/achive_files/<?php echo $img;?>)">
<style type="text/css">
.nav2 {
    background-color: #fff;
    height: 70px;
    left: 0;
    padding-left: 5%;
    padding-right: 5%;
    position: fixed;
    right: 0;
    text-align: center;
    text-shadow: none;
    top: 0;
	z-index: 999; 
   }
   
.logoimage {
   display: inline-block;
    float: left;
    height: 53px;
    margin-top: 7px;
    text-align: center;
    text-shadow: none;
}
.link {
    color: #ff942a;
    float: right;
    font-weight: 400;
    margin-left: 3%;
    margin-right: 0;
    padding-bottom: 25px;
    padding-top: 25px;
    text-decoration: none;
    text-shadow: none;
    text-transform: uppercase;
	 font-size: 14px;
	 font-family: Arial,sans-serif;
}

@media (max-width: 479px) {

	.contactus{ display:none;}
	.logoimage {
		display: inline-block;
		float: left;
		text-align: center;
		text-shadow: none;
		height: 43px;
		padding: 10px 0 0 0;
	}
}
</style>
<div class="nav2">
<a href="http://www.coopta.com.cn">
        <img class="logoimage" src="http://www.coopta.com.cn/static/cclogo.png"></a>
        <div class='changelogdiv'>
        </div>
         
        <div class="w-clearfix linksblock"  style=" width:60%;float:right;" >  
		<a href="mailto:candidates@coopta.com.cn?subject=Internet%20says%20hi!" class="link forum contactus"  > 
            CONTACT US
          </a>
          <a class="link forum" href="http://www.coopta.com.cn/about_us.html" target="_blank">
            ABOUT US
          </a>
	  
          <a class="link blog" href="http://www.coopta.com.cn/category/insights/" target="_blank">
            INSIGHTS
          </a>
          <a class="link jobs" href="http://www.coopta.com.cn/category/jobs/" target="_blank"> 
            JOBS
          </a>
        </div>
      </div>
	  
    <!--<nav class="main-nav overlay clearfix">
        <a class="blog-logo" href="http://<?php echo $_SERVER['HTTP_HOST'];?>"><img src="<?php $_SERVER['HTTP_HOST'];?>/static/cclogo2.png" alt="COLONY"></a>
            <a class="menu-button icon-menu" href="http://<?php echo $_SERVER['HTTP_HOST'];?>"><span class="word">Home</span></a>
    </nav>-->
    <div class="vertical">
        <div class="main-header-content inner">
            <h1 class="page-title"><?php echo $bigText;?></h1>
            <h2 class="page-description"><?php echo $description;?></h2>
        </div>
    </div>
    <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
</header>

<main id="content" class="content" role="main" style=" position:relative ;"> 

    <div class="extra-pagination inner">
    <nav class="pagination" role="navigation">
    <span class="page-number">Page 1 of 1</span>
</nav>



</div>

<!--<div style=" float: right; display: inline-block; margin-left: 61px; position: absolute;">

<ul id="navmenu"> 
<li><a href="#">Categorys</a>
<ul> 
<li><a href="#">Corporate IT</a></li>
<li><a href="#">HR</a></li>
<li><a href="#">Legal</a></li>
<li><a href="#">Supply Chain</a></li>
<li><a href="#">Finance</a></li>
<li><a href="#">Business Development / Sales</a></li>
<li><a href="#">Marketing</a></li>
<li><a href="#">PR</a></li>
<li><a href="#">e-Commerce</a></li>
<li><a href="#">Investment</a></li>
<li><a href="#">Strategy / Market Intelligence</a></li>
<li><a href="#">Others</a></li>
</ul>
</li>
   
</ul>
</div>-->

<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();
 
?>
<article class="post">
    <header class="post-header">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>#content"><?php the_title(); ?></a></h2>
    </header>
    <section class="post-excerpt">
    <?php the_content(__('(more…)')); ?>
    </section>
    <footer class="post-meta">
        <img class="author-thumb" src="http://1.gravatar.com/avatar/1bfc640b42dab1d16a71b764dba6971b?s=32&r=g&forcedefault=1" alt="Jack du Rose" nopin="nopin">
        <!--<a href="#"><?php the_author();?></a>-->
        
        <time class="post-date" datetime="2015-10-07"><?php echo $post->post_date_gmt;?></time> 
    </footer>
	
	


</article>
<?php
	endwhile; 
?>
		



<nav class="pagination" role="navigation">

	<?php 
	the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', '' ),
				'next_text'          => __( 'Next page', '' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );
	?>
</nav>





<style type="text/css">
<!--
@import"dhtml-horiz.css";
-->
 
 
/*CSS Code for Menu Begin:*/
/* Root = Horizontal, Secondary = Vertical */
ul#navmenu {
margin: 0;
border: 0 none;
padding: 0;
width: 500px; /*For KHTML*/
list-style: none;
height: 24px;
}
ul#navmenu li {
margin: 0;
border: 0 none;
padding: 0;
float: left; /*For Gecko*/
display: inline;
list-style: none;
position: relative;
height: 24px;
}
ul#navmenu ul {
margin: 0;
border: 0 none;
padding: 0;
width: 190px;
list-style: none;
display: block;
position: absolute;
top: 24px;
left: 0;
}
ul#navmenu ul li {
float: none; /*For Gecko*/
display: block !important;
display: inline; /*For IE*/
}
/* Root Menu */
ul#navmenu a {
border: 1px solid #FFF;
border-right-color: #CCC;
border-bottom-color: #CCC;
padding: 0 6px;
float: none !important; /*For Opera*/
float: left; /*For IE*/
display: block;
background: #EEE;
color: #666;
font: bold 10px/22px Verdana, Arial, Helvetica, sans-serif;
text-decoration: none;
height: auto !important;
height: 1%; /*For IE*/
}
/* Root Menu Hover Persistence */
ul#navmenu a:hover,
ul#navmenu li:hover a,
ul#navmenu li.iehover a {
background: #CCC;
color: #FFF;
}
/* 2nd Menu */
ul#navmenu li:hover li a,
ul#navmenu li.iehover li a {
float: none;
background: #EEE;
color: #666;
}
/* 2nd Menu Hover Persistence */
ul#navmenu li:hover li a:hover,
ul#navmenu li:hover li:hover a,
ul#navmenu li.iehover li a:hover,
ul#navmenu li.iehover li.iehover a {
background: #CCC;
color: #FFF;
}
/* 3rd Menu */
ul#navmenu li:hover li:hover li a,
ul#navmenu li.iehover li.iehover li a {
background: #EEE;
color: #666;
}
/* 3rd Menu Hover Persistence */
ul#navmenu li:hover li:hover li a:hover,
ul#navmenu li:hover li:hover li:hover a,
ul#navmenu li.iehover li.iehover li a:hover,
ul#navmenu li.iehover li.iehover li.iehover a {
background: #CCC;
color: #FFF;
}
/* 4th Menu */
ul#navmenu li:hover li:hover li:hover li a,
ul#navmenu li.iehover li.iehover li.iehover li a {
background: #EEE;
color: #666;
}
/* 4th Menu Hover */
ul#navmenu li:hover li:hover li:hover li a:hover,
ul#navmenu li.iehover li.iehover li.iehover li a:hover {
background: #CCC;
color: #FFF;
}
ul#navmenu ul ul,
ul#navmenu ul ul ul {
display: none;
position: absolute;
top: 0;
left: 160px;
}
/* Do Not Move - Must Come Before display:block for Gecko */
ul#navmenu li:hover ul ul,
ul#navmenu li:hover ul ul ul,
ul#navmenu li.iehover ul ul,
ul#navmenu li.iehover ul ul ul {
display: none;
}
ul#navmenu li:hover ul,
ul#navmenu ul li:hover ul,
ul#navmenu ul ul li:hover ul,
ul#navmenu li.iehover ul,
ul#navmenu ul li.iehover ul,
ul#navmenu ul ul li.iehover ul {
display: block;
}
</style>



</main>
<style type="text/css">
.screen-reader-text{display:none}
</style>

        <footer class="site-footer clearfix">
            <section class="copyright"><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>">Coopta</a> © 2020</section>
        </footer>

    </div>

    <!-- You can safely delete this line if your theme does not require jQuery --> 
 
    <script type="text/javascript" src="<?php $_SERVER['HTTP_HOST'];?>/achive_files/jquery.js"></script> 

 

<img src="<?php $_SERVER['HTTP_HOST'];?>/achive_files/view.gif" alt="" style="display:none" hidden="">


</body></html>