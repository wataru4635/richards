"use strict";

// jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

// });

/* ===============================================
# ヘッダー、ハンバーガーメニュー
=============================================== */
document.addEventListener("DOMContentLoaded", function () {
  // 定数
  var OPEN_CLASS = "is-open";

  // DOMの取得
  var hamburger = document.querySelector(".js-hamburger");
  var drawer = document.querySelector(".js-drawer");
  var header = document.querySelector(".js-header"); // ヘッダー要素を取得
  var mediaQuery = window.matchMedia("(min-width: 768px)");

  // ドロワーメニューを開く
  function openDrawer() {
    document.body.classList.add(OPEN_CLASS);
    drawer.classList.add(OPEN_CLASS);
    hamburger.classList.add(OPEN_CLASS);
    if (header) header.classList.add(OPEN_CLASS); // js-headerにもクラスを追加
  }

  // ドロワーメニューを閉じる
  function closeDrawer() {
    if (!document.body.classList.contains(OPEN_CLASS)) return;
    document.body.classList.remove(OPEN_CLASS);
    drawer.classList.remove(OPEN_CLASS);
    hamburger.classList.remove(OPEN_CLASS);
    if (header) header.classList.remove(OPEN_CLASS); // js-headerのクラスを削除
  }

  // ハンバーガーメニューのクリックイベント
  function toggleDrawer(event) {
    event.preventDefault();
    document.body.classList.toggle(OPEN_CLASS);
    drawer.classList.toggle(OPEN_CLASS);
    hamburger.classList.toggle(OPEN_CLASS);
    if (header) header.classList.toggle(OPEN_CLASS); // js-headerのクラスをトグル
  }

  hamburger.addEventListener("click", toggleDrawer);

  // ドロワーメニュー内のリンクをクリックしたら閉じる（イベントデリゲーション）
  drawer.addEventListener("click", function (event) {
    if (event.target.matches("a[href]")) {
      setTimeout(closeDrawer, 100); // 遷移後に閉じる
    }
  });

  // リサイズイベントの最適化
  var resizeTimeout;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(function () {
      if (mediaQuery.matches) {
        closeDrawer();
      }
    }, 150);
  });

  // メディアクエリ変更時の対応
  mediaQuery.addEventListener("change", function () {
    if (mediaQuery.matches) {
      closeDrawer();
    }
  });
});

/* ===============================================
# メインビジュアル：スライド
=============================================== */

var mv_swiper = new Swiper(".js-mv-swiper", {
  loop: true,
  speed: 2000,
  effect: "fade",
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  }
});

/* ===============================================
# 施工事例：スライド
=============================================== */

var slider = new Swiper('.js-lineup-swiper', {
  loop: true,
  speed: 6000,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
    disableOnInteraction: false
  },
  slidesPerView: 1.8,
  // モバイルデフォルト
  breakpoints: {
    // 576px以上の場合
    576: {
      slidesPerView: 2
    },
    // 768px以上の場合
    768: {
      slidesPerView: 3
    },
    // 1024px以上の場合
    1500: {
      slidesPerView: 4
    }
  }
});

/* ===============================================
# ヘッダーメニュー：アンダーライン
=============================================== */

document.addEventListener("DOMContentLoaded", function () {
  var nav = document.getElementById("navigation");
  var slideLine = document.getElementById("slide-line");

  // Underline transition
  var navItems = nav.querySelectorAll("li");
  navItems.forEach(function (item) {
    item.addEventListener("mouseenter", function () {
      slideLine.style.width = item.offsetWidth + "px";
      slideLine.style.left = item.offsetLeft + "px";
    });
    item.addEventListener("mouseleave", function () {
      slideLine.style.width = "0";
    });
  });
});

/* ===============================================
# パララックス
=============================================== */

var rellax = new Rellax('.rellax', {
  center: true,
  breakpoints: [576, 768, 1201] // スマホ, タブレット, デスクトップ
});

/* ===============================================
# お問い合わせボタン（contact-btn）
=============================================== */

document.addEventListener("DOMContentLoaded", function () {
  var contactBtn = document.querySelector(".contact-btn");
  var contactSection = document.querySelector("#contact");
  var footer = document.querySelector(".footer");
  var scrollThreshold = 300; // 300px スクロールで表示
  var isContactVisible = false;
  var isFooterVisible = false;
  if (!contactBtn || !contactSection || !footer) return;

  // スクロールでis-activeを付与・削除
  var handleScroll = function handleScroll() {
    if (isContactVisible || isFooterVisible) {
      contactBtn.classList.remove("is-active");
    } else if (window.scrollY > scrollThreshold) {
      contactBtn.classList.add("is-active");
    } else {
      contactBtn.classList.remove("is-active");
    }
  };

  // Intersection Observer でお問い合わせセクションとフッターを監視
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.target === contactSection) {
        isContactVisible = entry.isIntersecting;
      } else if (entry.target === footer) {
        isFooterVisible = entry.isIntersecting;
      }
    });
    handleScroll();
  }, {
    root: null,
    threshold: 0.1
  });
  observer.observe(contactSection);
  observer.observe(footer);
  window.addEventListener("scroll", handleScroll);
});