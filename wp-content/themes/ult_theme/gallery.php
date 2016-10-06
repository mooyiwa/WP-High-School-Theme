<?php
get_header();
/* template name: Gallery */
?>

  <body class="page">

      <div class="top">
<div class="container">
   <div class="row home_main">
       <div class="span4 logo">
           <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></a>
       </div>
 <div class="span8 nav">
<div class="navbar">
  <div class="navbar-inner">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
<ul class="nav nav-tabs landing">
<?php wp_list_pages('title_li='); ?>
    <?php //wp_nav_menu( array( 'theme_location' => 'Primary Menu' ) ); ?>
</ul>
 
    </div>
  </div>
</div>
        </div>
    
      </div>
  
        </div>
    </div>
      
      
        <div class="space">
          <div class="container">
              <div class="row">
                  <div class="span12 space"></div>
              </div>
          </div>
      </div><!--space-->
      
      <div class="mid">
          <div class="container mid">
              <div class="row">
                  <div class="span12 l">
          <?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h2 style="padding: 10px"><?php the_title(); ?></h2>
          <?php the_content(); ?>
                              
	  <?php endwhile; endif; ?>
                  </div>
         
              </div>
          </div>
      </div><!--mid-->
  
      
      <div class="lspace">
          <div class="container">
              <div class="row">
                  <div class="span12 lspace"></div>
              </div>
          </div>
      </div><!--lspace-->
      
      
      <div class="footer">
    <?php get_footer(); ?>
      </div><!--footer-->

      
    <script type="text/javascript">
        $(document).ready(function(){
        $(".collapse").collapse({
            toggle: false
        });
        });
    </script>
  
             
  </body>
</html>