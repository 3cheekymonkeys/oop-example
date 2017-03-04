<body>
<pre>
<?php
print_R($data);
?>
</pre>
<div id="preloader">
 <div id="status">
    <ul id="simpleQuote" style="text-align:center">
      <li style="text-decoration:underline;">Loading: <?php echo $data['title']; ?></li>
      <li> <?php echo $data['quote']['quote'];?> <br><span><?php echo $data['quote']['auther'] ;?></span></li>
    </ul>
  </div>
</div>


<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
                <li><a href="home">Home</a></li>
                <?php foreach ($data['topMenu'] as $topMenu) : ?>
                <li><a href="article/view/<?php echo $topMenu['urls'];?>"><?php echo $topMenu['title'];?></a></li>
                <?php endforeach; ?>
            </ul>
          </div>
          <div class="header_top_right">
            <p><?php echo date("l, F d, Y"); ?> - <span id="time"> </span> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="/home" class="logo"><img src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME.'/assets/images/'.$data['image'];?>" alt=""></a></div>
          <div class="add_banner" style="max-width:728px;width:auto">


          </div>
        </div>
      </div>
    </div>
  </header>


  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li><a href="/home"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <?php foreach($data['mainMenu'] as $menu) : ?> 
          <li><a href="<?php echo $menu['link'];?>"><?php echo $menu['title'];?></a></li>
          <?php endforeach; ?>
          <li><a href="/blogs/contact">Contact Us</a></li>
        </ul> 
      </div>
    </nav>
  </section>


  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Trending News</span>
          <ul id="ticker01" class="news_sticker">
            <?php foreach ($data['trending'] as $trend) : ?>
            <li><a href="article/view/<?php echo $trend['urls']; ?>"><img src="<?php echo $trend['images'];?>" alt="<?php echo $trend['title'];?>"><?php echo $trend['title'];?></a></li>
            <?php endforeach ?>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="https://www.facebook.com/nc.web.services"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <?php foreach ($data['featured'] as $feature) : ?>

            <div class="single_iteam"> <a href="article/view/<?php echo $feature['urls']; ?>"> 
              <div class="imageTextOver">
              <img style="max-width:100%;max-height:100%;" src="<?php echo $feature['images'];?>" alt=" echo <?php echo $feature['title'];?>">
              <hover><span>News From: <?php echo $feature['xrefrencelink']; ?></span></hover>
              </div>
            </a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="article/view/<?php echo $feature['urls']; ?>"><?php echo $feature['title']; ?></a></h2>
                  <p> <?php echo substr(strip_tags($feature['introtext']),0,147).'...';?></p>
              </div>
            </div>
          <?php endforeach ?>


        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <ul class="latest_postnav">
              <?php foreach($data['latest'] as $latest) : ?>
              <li>
                <div class="media"> <a href="article/view/<?php echo $latest['urls']; ?>" class="media-left"> <img alt="<?php echo $latest['title']; ?>" src="<?php echo $latest['images']; ?>"> </a>
                  <div class="media-body"> <a href="article/view/<?php echo $latest['urls']; ?>" class="catg_title"><?php echo $latest['title']; ?></a> </div>
                </div>
              </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span><?php echo key($data);?></span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                $count = $query->rowCount();
                if ($count == 1) {
                $news = $query->fetch();
                ?>
                <li>
                  <figure class="bsbig_fig"> <a href="article/<?fg echo $news['urls']; ?>" class="featured_img"> <img alt="<?fg echo $news['title']; ?>" src="<?fg echo $news['images']; ?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="article/<?fg echo $news['urls']; ?>"><?fg echo $news['title']; ?></a> </figcaption>
                    <p><?fg echo substr(strip_tags($news['introtext']),0,197).'...'; ?></p>
                  </figure>
                </li>
                php } else { ?>
                <li>
                  <figure class="bsbig_fig"> <a href="article/<?fg echo $news['urls']; ?>" class="featured_img"> <img alt="<?fg echo $news['title']; ?>" src="images/featured_img1.jpg"> <span class="overlay"></span> </a>
                    <figcaption> <a href="article/<?fg echo $news['urls']; ?>">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
               php } ?>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                
                $count = $query->rowCount();
                if ($count > 1) {
                    $newsItems = $query->fetchAll();
                    foreach ($newsItems as $news) {  ?>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="<?fg echo $news['images']; ?>"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> <?fg echo $news['title']; ?></a> </div>
                  </div>
                </li>
                <hp } } else { ?>

                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
                p } ?>
              </ul>
            </div>
          </div>

          <div class="single_post_content">
            <h2><span> echo $item['3']['title']; ?></span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                    
                // get the latest article
                $count = $query->rowCount();
                if ($count == 1) {
                $news = $query->fetch();
                ?>
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="article/<?fg echo $news['urls']; ?>"> <img src="<?fg echo $news['images'];?>" alt="<?fg echo $news['title']; ?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="article/<?fg echo $news['urls']; ?>"><?fg echo $news['title']; ?></a> </figcaption>
                    <p><?fg echo substr(strip_tags($news['introtext']),0,197).'...'; ?></p>
                  </figure>
                </li>
                 } else { ?>
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="article/<?fg echo $news['urls']; ?>"> <img src="images/featured_img1.jpg" alt="<?fg echo $news['title']; ?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="article/<?fg echo $news['urls']; ?>">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
                hp } ?>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
               <
               $count = $query->rowCount();
                if ($count > 1) {
                    $newsItems = $query->fetchAll();
                    foreach ($newsItems as $news) {  ?>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="<?fg echo $news['images']; ?>"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> <?fg echo $news['title']; ?></a> </div>
                  </div>
                </li>
                < }} else { ?>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="article/<?fg echo $news['urls']; ?>" class="media-left"> <img alt="<?fg echo $news['title']; ?>" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="article/<?fg echo $news['urls']; ?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
                hp } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <?php foreach($data['popular'] as $popular) : ?>
              <li>
                <div class="media wow fadeInDown"> <a href="article/views/<?php echo $popular['urls']; ?>" class="media-left"> <img alt="<?php echo $popular['title']; ?>" src="<?php echo $popular['images']; ?>"> </a>
                  <div class="media-body"> <a href="article/views/<?php echo $popular['urls']; ?>" class="catg_title"> <?php echo $popular['title']; ?></a> </div>
                </div>
              </li>
              <?php endforeach ?>
            </ul>
          </div>

          include("sponser.php");?>
        </aside>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Advert</span></h2>
          </div>

          include("advert.php"); ?>

        </aside>
      </div>
    </div>
  </section>



