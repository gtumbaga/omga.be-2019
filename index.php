<?php include_once('./includes/_functions.inc.php'); ?>
<?php include_once('./includes/_sitelist.inc.php'); ?>
<?php include_once('./includes/_icons.inc.php'); ?>
<!doctype html>
<html lang="en" amp>
<head>
  <meta charset="utf-8">
  <link rel="canonical" href="<?php print my_server_url(); ?>" />
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <meta name="description" content="The web development portfolio of Gabriel Tumbaga, full stack web developer.">
  
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  <style amp-custom>
    <?php include_once('./css/reset.css'); ?>
    <?php include_once('./css/normalize.css'); ?>
    <?php include_once('./css/style.css'); ?>
    <?php include_once('./css/responsive.css'); ?>
  </style>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <title>Gabriel Tumbaga - Full Stack Web Developer</title>
</head>
<body>
  <header>
    <div style="" id="bg-cover"></div>
    <div class="top-bar">
      <div class="brand">
        <div class="name">Gabriel Tumbaga</div>
        <div class="desc">Full Stack Web Developer</div>
      </div>
      <div class="nav-holder">
        <label id="btn-main-nav-toggle" for="menu-toggler">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-3x"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg>
        </label>
        <input type="checkbox" id="menu-toggler" name="menu-toggler">
        <nav id="site-navigation">
          <ul id="nav">
            <li><a rel="noopener" href="#hero">Home</a></li>
            <li><a rel="noopener" href="#work">Work</a></li>
            <li><a rel="noopener" href="#info">Info</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>
    <div id="hero">
      <h1>Full Stack Web Developer</h1>
      <h2>LAMP Stack, MEAN Stack, MERN Stack</h2>
      <a href="#info" class="btn" rel="noopener">Contact Me!</a>
    </div>
    <div id="work">
      <h2 class="section-title">My Work</h2>
      <?php // THE PODS LOOP -------------------------------------------------------------------------------------------------- ?>
      <?php foreach($siteList as $sitekey => $sitedata): ?>
        <div class="pod constrain">
          <div class="screens">
          <div class="device laptop"><div class="inner"><amp-img alt="<?php print $sitedata['title']; ?>" src="/img/sites/<?php echo $sitekey; ?>_hidpi.jpg" width="480" height="300" layout="responsive"></amp-img></div></div>
            <div class="device tablet"><div class="inner"><amp-img alt="<?php print $sitedata['title']; ?>" src="/img/sites/<?php echo $sitekey; ?>_ipad.jpg" width="180" height="240" layout="responsive"></amp-img></div></div>
            <div class="device smartphone"><div class="inner"><amp-img alt="<?php print $sitedata['title']; ?>" src="/img/sites/<?php echo $sitekey; ?>_iphone.jpg" width="84" height="149" layout="responsive"></amp-img></div></div>
          </div>
          <div class="data">
          <h3><a rel="noopener" href="<?php echo $sitedata['url']; ?>" target="_blank"><?php print $sitedata['title']; ?></a></h3>
          <h4 class="rule"><?php print $sitedata['description']; ?></h4>
          <div class="button-holder">
            <a class="btn small" rel="noopener" href="<?php echo $sitedata['url']; ?>" target="_blank">
             <?php echo $iconList['ex-link']; ?> Visit Site
            </a>
          </div>
          <p><?php echo $sitedata['mywork']; ?></p>
          </div>
          <ul class="skills">
            <?php foreach ($sitedata['skills'] as $madskillzbro): ?>
              <li><?php print $madskillzbro; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
       <div class="constrain"><hr /></div>
      <?php endforeach; ?>
      <?php // END THE PODS LOOP -------------------------------------------------------------------------------------------------- ?>



      <?php if (0===1): ?>
      <div class="pod constrain">
        <div class="screens">
          <div class="device laptop"><div class="inner">480x240</div></div>
          <div class="device tablet"><div class="inner">180x220</div></div>
          <div class="device smartphone"><div class="inner">84x128</div></div>
        </div>
        <div class="data">
          <h3>omga.be</h3>
          <p>This is my website portfolio.</p>
          <ul class="skills">
            <li>AMP</li>
            <li>Responsive</li>
            <li>CSS Grid</li>
          </ul>
        </div>
      </div>
      <div class="constrain"><hr /></div>
      <?php endif; ?>
      <br/><br/><br/>
    </div>
    <div class="bg-other" id="info">
      <h2 class="section-title">My Info</h2>
      <div class="info-inner constrain">
        <h6>Gabriel Tumbaga</h6>
        <div class="info-row">
          <label>email:</label>
          <?php echo $iconList['email']; ?> <a href="mailto:gatumbaga@yahoo.com">gatumbaga@yahoo.com</a>
        </div>
        <div class="info-row">
          <label>mobile:</label>
          <?php echo $iconList['phone']; ?> <a href="tel://9252910111">925.291.0111</a>
        </div>
        <div class="info-row">
          <label>resume:</label>
          <ul>
            <li><a href="/files/gabrieltumbaga-resume.pdf" target="_blank"><?php echo $iconList['file-pdf']; ?> gabrieltumbaga-resume.pdf</a></li>
            <li><a href="/files/gabrieltumbaga-resume.txt" target="_blank"><?php echo $iconList['file-txt']; ?> gabrieltumbaga-resume.txt</a></li>
          </ul>
        </div>
        <div class="info-row">
          <label>other links:</label>
          <ul>
            <li><a href="https://github.com/gtumbaga" target="_blank"><?php echo $iconList['ex-link']; ?> View my GitHub profile</a></li>
            <li><a href="https://www.linkedin.com/in/gtumbaga/" target="_blank"><?php echo $iconList['ex-link']; ?> View my LinkedIn profile</a></li>
          </ul>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="constrain">
      &copy; Copyright 2019 Gabriel Tumbaga
    </div>
  </footer>
</body>
</html>
