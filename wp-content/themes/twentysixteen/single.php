<?php 
	$category = get_the_category(); 
	$cate = $category[0]->cat_name;
	$img = "job2.jpg";
	$title = "Coopta : Jobs";
	$description = "The Challenge Pool for Our Beloved Talents";
	$catLink = "http://www.coopta.com.cn/category/jobs/";
	$bigText = "Jobs";
	if($cate == "INSIGHTS"){
		$bigText = "Insights";
		$img = "ins.jpg";
		$title = "Coopta : Insights";	
		$description = "At Coopta, we are immersed in your market every day. We know what your people want, what motivates them and how changes in our greater market influence these individual wants and needs. We proactively stay ahead of these changes, and are constantly working to ensure that our organisation is ready and available to share our deep market knowledge with you.";
		$catLink = "http://www.coopta.com.cn/category/insights/";
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
    <link rel="alternate" type="application/rss+xml"   href="http://<?php echo $_SERVER['HTTP_HOST'];?>/rss/">
      <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style> </head>
<body class="home-template nav-closed">

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
         
        <div class="w-clearfix linksblock">  
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
    <div class="vertical">
        <div class="main-header-content inner">
            <h1 class="page-title"><?php echo $bigText;?></h1>
            <h2 class="page-description"><?php echo $description;?></h2>
        </div>
    </div>
    <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
</header>

<main id="content" class="content" role="main">

    <div class="extra-pagination inner">
    <nav class="pagination" role="navigation">
    <span class="page-number">Page 1 of 1</span>
</nav>

</div>

<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();
 
?>
<style type="text/css">
	.post-excerpt p {
    font-size: 0.9em;
    line-height: 2.7em;
    margin: 0;
}
.post {
    border-bottom: 1px solid #ebf2f6;
    margin: 4rem auto;
    max-width: 80%;;
    padding-bottom: 4rem;
    position: relative;
    width: 80%;
    word-wrap: break-word;
}
	</style>
	
<article class="post">
    <header class="post-header">
        <h2 class="post-title"><a href="#"><?php the_title(); ?></a></h2>
    </header>
    <section class="post-excerpt">
	
    <?php the_content(); ?>
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
		

<div style=" width:100px; margin:0 auto; text-align: center;"><a href="<?php echo $catLink;?>#content" style=" text-decoration:none;font-size: 16px;"><< BACK</a></div>

 

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