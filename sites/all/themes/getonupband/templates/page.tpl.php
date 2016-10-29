<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class="container">
<header class="header" role="banner">
  <div class="layout-center">
    <div class="header-top">
      <?php print render($page['header_top']); ?>
    </div>
    <div class="header-two">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div class="header__name-and-slogan">
          <?php if ($site_name): ?>
            <h1 class="header__site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div class="header__site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="header-one">
      <?php print render($page['header_one']); ?>
    </div>

    <div class="header-three">
      <?php print render($page['header_three']); ?>
    </div>
  </div>
</header>

  <div class="super-nav">
    <div class="layout-center">
      <?php print render($page['navigation']); ?>
    </div>
  </div>

  <div class="homepage-slider">
    <?php print render($page['highlighted']); ?>
  </div>

<div class="layout-center main-content">

  <div class="layout-3col layout-swap">

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
      // Decide on layout classes by checking if sidebars have content.
      $content_class = 'layout-3col__full';
      $sidebar_first_class = $sidebar_second_class = '';
      if ($sidebar_first && $sidebar_second):
        $content_class = 'layout-3col__right-content';
        $sidebar_first_class = 'layout-3col__first-left-sidebar';
        $sidebar_second_class = 'layout-3col__second-left-sidebar';
      elseif ($sidebar_second):
        $content_class = 'layout-3col__left-content';
        $sidebar_second_class = 'layout-3col__right-sidebar';
      elseif ($sidebar_first):
        $content_class = 'layout-3col__right-content';
        $sidebar_first_class = 'layout-3col__left-sidebar';
      endif;
    ?>

    <main class="<?php print $content_class; ?>" role="main">
      <?php print $breadcrumb; ?>
      <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-content">Back to top</a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content_top']); ?>
      <div class="hp-galleries">
        <?php print render($page['content']); ?>
      </div>
      <?php print render($page['content_bottom']); ?>
      <?php print $feed_icons; ?>
    </main>



    <?php if ($sidebar_first): ?>
      <aside class="<?php print $sidebar_first_class; ?>" role="complementary">
        <?php print $sidebar_first; ?>
      </aside>
    <?php endif; ?>

    <?php if ($sidebar_second): ?>
      <aside class="<?php print $sidebar_second_class; ?>" role="complementary">
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>
  </div>


</div>

<div class="footer-bg">
<!--  --><?php //dpm($page['footer']); ?>
  <div class="layout-center">
    <div class="footer-one">
      <?php print render($page['footer_one']); ?>
    </div>
    <div class="footer-two">
      <?php print render($page['footer_two']); ?>
    </div>
    <div class="footer-three">
      <?php print render($page['footer_three']); ?>
    </div>
    <div class="footer-four">
      <?php print render($page['footer_four']); ?>
    </div>
  </div>
</div>

</div>

