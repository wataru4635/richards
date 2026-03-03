<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body>
  <!---- ヘッダー ---->

  <header class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="header__logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.webp" alt="和菓子司 亀屋新左衛門"width="360" height="90">
        </a>
      </h1>
      <nav class="header__nav" id="navigation">
        <span id="slide-line"></span>
        <ul class="header__nav-items">
          <li class="header__nav-item">
            <a href="#value">
              <div class="header__nav-title">
                <p class="header__nav-jptitle">選ばれる3つの理由<br>
                  <span class="header__nav-en">VALUE</span>
                </p>
              </div>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="#lineup">
              <div class="header__nav-title">
                <p class="header__nav-jptitle">商品ラインナップ<br>
                  <span class="header__nav-en">LINE UP</span>
                </p>
              </div>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="#booth-specs">
              <div class="header__nav-title">
                <p class="header__nav-jptitle">運営仕様・出店条件<br>
                  <span class="header__nav-en">BOOTH SPECS</span>
                </p>
              </div>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="#company">
              <div class="header__nav-title">
                <p class="header__nav-jptitle">会社情報<br>
                  <span class="header__nav-en">COMPANY</span>
                </p>
              </div>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="#message">
              <div class="header__nav-title">
                <p class="header__nav-jptitle">代表メッセージ<br>
                  <span class="header__nav-en">MESSAGE</span>
                </p>
              </div>
            </a>
          </li>
        </ul>
      </nav>
      <button class="header__hamburger js-hamburger">
        <span></span>
        <span></span>
      </button>
      <div class="header__drawer js-drawer">
        <nav class="header__drawer-nav">
          <ul class="header__drawer-items">
            <li class="header__drawer-item">
              <a href="#value">
                <p class="header__drawer-text">
                  <span class="header__drawer-jp">選ばれる3つの理由</span>
                  <span class="header__drawer-en">VALUE</span>
                </p>
                <img class="arrow-black" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/arrow.png" alt="矢印のアイコン" width="36" height="36" loading="lazy">
              </a>
            </li>
            <li class="header__drawer-item">
              <a href="#lineup">
                <p class="header__drawer-text">
                  <span class="header__drawer-jp">商品ラインナップ</span>
                  <span class="header__drawer-en">LINE UP</span>
                </p>
                <img class="arrow-black" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/arrow.png" alt="矢印のアイコン" width="36" height="36" loading="lazy">
              </a>
            </li>
            <li class="header__drawer-item">
              <a href="#booth-specs">
                <p class="header__drawer-text">
                  <span class="header__drawer-jp">運営仕様・出店条件</span>
                  <span class="header__drawer-en">BOOTH SPECS</span>
                </p>
                <img class="arrow-black" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/arrow.png" alt="矢印のアイコン" width="36" height="36" loading="lazy">
              </a>
            </li>
            <li class="header__drawer-item">
              <a href="#company">
                <p class="header__drawer-text">
                  <span class="header__drawer-jp">会社情報</span>
                  <span class="header__drawer-en">COMPANY</span>
                </p>
                <img class="arrow-black" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/arrow.png" alt="矢印のアイコン" width="36" height="36" loading="lazy">
              </a>
            </li>
            <li class="header__drawer-item">
              <a href="#message">
                <p class="header__drawer-text">
                  <span class="header__drawer-jp">代表メッセージ</span>
                  <span class="header__drawer-en">MESSAGE</span>
                </p>
                <img class="arrow-black" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/arrow.png" alt="矢印のアイコン" width="36" height="36" loading="lazy">
              </a>
            </li>
          </ul>
          <div class="header__drawer-info">
            <a href="#entry" class="header__drawer-link">
              <span class="header__drawer-jplinktext">
                お問い合わせフォーム</span>
              <span class="header__drawer-enlinktext">contact form</span>
            </a>
          </div>
        </nav>
        <small class="header__drawer-copyright">Copyright&copy; TOPWORK. All Rights Reserved.</small>
      </div>
    </div>
  </header>