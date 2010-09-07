<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<!-- *****************************************************
Template Version 1.05 - 05/06/09

SF State Web Template Read Me

Use of this template constitutes an agreement to follow the SF State Web Template Guidelines at
http://www.sfsu.edu/template and to meet California Government Code 11135, implementing Section 508 legislation at http://www.sfsu.edu/~dprc/access/  before publishing pages to the Web.

1. Template overview: http://www.sfsu.edu/template/
2. Accessibility Review: http://www.sfsu.edu/access/webaccess/
***************************************************** -->

<head>
<?php if (!empty($site_slogan)): ?>
<meta name="description" content="<?php print $site_slogan; ?>" />
<?php endif; ?>
<meta name="robots" content="noindex,nofollow" />
<meta name="googlebot" content="nosnippet,noodp,noarchive,noimageindex" />
<meta name="viewport" content="width=900" />
<?php print $head; ?>
<title><?php print $head_title; ?> - San Francisco State University</title>
<?php #if ($sitetitle): ?>        
<?php #print $sitetitle; ?>
<?php #endif; ?>

<?php print $styles; ?>

</head>

<body class="<?php print $body_classes; ?>">

  <div id="page"><div id="page-inner">
  
<?php #if ($headerstripe): ?>        
<?php #print $headerstripe; ?>
<?php #endif; ?>

<!-- o utility -->
	<div id="utilitystripe"><ul class="skiplinks"><li><a class="skip" href="#main">Skip to main content</a></li><li><a class="skip" href="#nav">Skip to local site navigation</a></li><li><a class="skip" href="#sidebar">Skip to sidebar</a></li></ul><div id="utilitybox"><ul><li id="sfsutype"><a href="http://www.sfsu.edu/">San Francisco State University</a></li><li><a href="http://www.sfsu.edu/">Home</a></li><li><a href="http://www.sfsu.edu/login.htm">Login</a></li><li><a href="http://www.sfsu.edu/calendar/">Calendar</a></li><li><a href="http://www.sfsu.edu/atoz/">A&ndash;Z Index</a></li><li><a
	href="http://www.sfsu.edu/search.htm">Search Tools</a></li>	<li><form action="http://google.sfsu.edu/search" method="get" title="Search SF State">
		      						<div>
		      							<span class="readernote"><label for="search">Search SF State</label></span>
		      							<input class="searchbox" type="text" id="search" name="q" size="12" maxlength="50" value="" />
		      							<input class="searchbutton" type="image" src="<?php print base_path() . path_to_theme() ?>/images/searchbutton.png" alt="Search SF State" />
		      						</div> 
		      					</form>

		      				</li>
	</ul></div></div><!-- x utility -->

<!-- o site -->
<div id="sitestripe"><div id="sitebox"><h2><?php if ($site_name): ?>
            <?php if ($title): ?>
              
                <a class="site" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <?php print $site_name; ?>
                </a>
            <?php else: ?>
                <a class="site" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <?php print $site_name; ?>
                </a>
            <?php endif; ?>
          <?php endif; ?> <!--<a class="parent" href="http://www.sfsu.edu/">Parent Site</a>--></h2></div></div>

<?php #if ($sitestripe): ?>        
<?php #print $sitestripe; ?>
<?php #endif; ?><!-- x site -->

<?php if ($imagestripe): ?>        
<?php print $imagestripe; ?>
<?php endif; ?><!-- x image -->

<!-- o content --><div id="contentstripe"><div id="contentbox">
<!-- o nav -->
<div id="nav">

<?php #if ($left): ?>
<div id="content-left">        
<?php #print $left; ?>
</div> <!-- /#content-left -->
<?php #endif; ?>

          <?php if ($nav): ?>
            <?php print $nav; ?>
          <?php endif; ?>

          <?php #if ($primary_links): ?>
            <div id="primary" class="clear-block">
              <?php #print theme('links', $primary_links); ?>
            </div> <!-- /primary -->
          <?php #endif; ?>

<?php #if ($navbar): ?>
          <?php #print $navbar; ?>
<?php #endif; ?>

<?php #if ($navbar): ?>
<div id="content-navbar">        
<?php #print $navbar; ?>
</div> <!-- /#content-navbar -->
<?php #endif; ?>

<?php #if ($left): ?>
        <div id="sidebar-left"><div id="sidebar-left-inner" class="region region-left">
          <?php #print $left; ?>
        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
      <?php #endif; ?>

</div>
<!-- x nav -->

<!-- o sidebar -->
<div id="sidebar">

<?php if ($sidebar): ?>
<?php print $sidebar; ?>
<?php endif; ?>

<?php #if ($secondary_links): ?>
            <div id="secondary" class="clear-block">
              <?php #print theme('links', $secondary_links); ?>
            </div> <!-- /#secondary -->
          <?php #endif; ?>
          
          
            <?php #if ($right): ?>
        <div id="sidebar-right"><div id="sidebar-right-inner" class="region region-right">
          <?php #print $right; ?>
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
      <?php #endif; ?>
          
</div>
<!-- x sidebar -->

<!-- o main -->
<div id="main">

<?php if (/*$breadcrumb or */$title or $tabs or $help or $messages): ?>

<div id="content-header">
<?php #print $breadcrumb; ?>
<?php if ($title): ?>
  <h1 class="title"><?php print $title; ?></h1>
<?php endif; ?>
<?php if ($tabs): ?>
  <div class="tabs"><?php print $tabs; ?></div>
<?php endif; ?>
<?php print $help; ?>
<?php if ($messages): ?>
  <div class="messages"><?php print $messages; ?></div>
<?php endif; ?>

</div> <!-- /#content-header -->
<?php endif; ?>

<?php if ($content_top): ?>
<div id="content-top">        
<?php print $content_top; ?>
</div> <!-- /#content-top -->
<?php endif; ?>

<div id="content-area">
<?php print $content; ?>
</div> <!-- /#content-area -->

<?php if ($content_bottom): ?>
<div id="content-bottom">
<?php print $content_bottom; ?>
</div> <!-- /#content-bottom -->
<?php endif; ?>

<?php #if ($closure_region): ?>
    <div id="closure-blocks" class="region region-closure"><?php #print $closure_region; ?></div>
  <?php #endif; ?></div>

<!-- javascript -->
<script type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/includes/global.js"></script>
<?php print $scripts; ?>

</div></div><!-- x main -->

<div class="clearfloat"></div>

<!-- x content -->

<!-- o footer --><div id="footerstripe"><div id="footerbox"><a href="http://www.sfsu.edu"><img src="<?php print base_path() . path_to_theme() ?>/images/logo.png" alt="SF State Home" width="165" height="50" /></a><ul><li class="first"><a href="http://www.sfsu.edu/">SF State Home</a></li><li><a 
href="http://www.sfsu.edu/emailref.htm">Contact</a></li><li>1600 Holloway Avenue . San Francisco . CA 94132 . Tel (415) 338-1111</li></ul></div></div><!-- x footer -->

<?php #if ($footerstripe): ?>        
<?php #print $footerstripe; ?>
<?php #endif; ?>

<div class="clearfloat"></div>

  <!--</div></div>-->
<div id="footer"><?php print $footer; ?>
        <?php if (!empty($footer)): print $footer; endif; ?></div>

<?php print $closure; ?></body>

</html>