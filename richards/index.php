<?php get_header(); ?>

<main>

  <!---------  メインビジュアル  --------->

  <section class="mv">
    <div class="mv__inner">
      <div class="mv__text-wrap">
        <picture class="mv__title-picture">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-title_sp.svg" media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-title.svg" alt="空間に、華やぎと活気、そして品格を。" class="mv__title-img" width="267" height="165" loading="eager">
        </picture>
        <p class="mv__lead">伝統が紡ぐ確かな集客と、<br class="u-mobile">施設の格を損なわない上質な店舗設営。</p>
      </div>
      <div class="mv__overlay" aria-hidden="true"></div>
      <div class="scrolldown"><span>scroll</span></div>
      <div class="mv__swiper swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-img">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv01_sp.webp" media="(max-width: 767px)" type="image/webp" width="1440" height="810">
                <img class="" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv01.webp" alt="和菓子職人が餅を伸ばしている様子、店頭で和菓子を販売するスタッフと陳列された和菓子、みたらし団子やあんこ団子を用意する手元と笑顔の客の様子。" width="1440" height="810" loading="lazy">
              </picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv02_sp.webp" media="(max-width: 767px)" type="image/webp" width="1440" height="810">
                <img class="" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv02.webp" alt="和菓子店の販売ブースで和装の職人が和菓子を並べて販売し、数人のスーツ姿の客が列に並んでいる様子。右上には色とりどりの団子が並んだ皿、右下には3種類の串団子（黒ごま、あんこ、みたらし）が盛り付けられている。" width="1440" height="810" loading="lazy">
              </picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv01_sp.webp" media="(max-width: 767px)" type="image/webp" width="1440" height="810">
                <img class="" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv01.webp" alt="和菓子職人が餅を伸ばしている様子、店頭で和菓子を販売するスタッフと陳列された和菓子、みたらし団子やあんこ団子を用意する手元と笑顔の客の様子。" width="1440" height="810" loading="lazy">
              </picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-img">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv02_sp.webp" media="(max-width: 767px)" type="image/webp" width="1440" height="810">
                <img class="" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv02.webp" alt="和菓子店の販売ブースで和装の職人が和菓子を並べて販売し、数人のスーツ姿の客が列に並んでいる様子。右上には色とりどりの団子が並んだ皿、右下には3種類の串団子（黒ごま、あんこ、みたらし）が盛り付けられている。" width="1440" height="810" loading="lazy">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!---------  ３つの強み  --------->

  <section class="value" id="value">
    <div class="value__inner">
      <hgroup class="section-title value__title">
        <p class="section-title-en">value</p>
        <h2 class="section-title-jp">選ばれる3つの理由</h2>
      </hgroup>
      <ul class="value__items">
        <li class="value__item">
          <div class="value__item-bg-img-wrap value__item-bg-img-wrap--left">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value-bg01.webp" class="value__item-bg-img rellax" data-rellax-speed="-3" data-rellax-mobile-speed="-2" data-rellax-xs-speed="-2" alt="工場の様子の背景画像" width="1170" height="510" loading="lazy">
          </div>
          <div class="value__item-content">
            <div class="value__item-content-left">
              <div class="value__item-number rellax" data-rellax-speed="0">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value-number01.svg" class="value__item-number-img" alt="01" width="146" height="144" loading="lazy">
              </div>
              <div class="value__item-text-wrap rellax" data-rellax-speed="2" data-rellax-mobile-speed="1" data-rellax-xs-speed="1">
                <h3 class="value__item-title">日常の場に、特別な体験と賑わいを。</h3>
                <p class="value__item-text">
                  イオンモール、マルイ、JR西日本・JR四国グループ各社様など、全国の大手商業施設で培った豊富な開催実績を誇ります。開催地の客層や季節の動向を緻密に分析し、みたらし団子や大福といった高付加価値な商品ラインナップを最適化。職人品質の和菓子が持つ圧倒的なシズル感と集客力で、日常の買い物を特別な体験へと変え、館内全体の回遊性向上とテナント価値の最大化に大きく貢献いたします。
                </p>
              </div>
            </div>
            <div class="value__item-img-wrap rellax" data-rellax-speed="1.5" data-rellax-mobile-speed="0.7" data-rellax-xs-speed="0.7">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value01.webp" class="value__item-img" alt="工場内の大型ステンレス製スライドドア。天井には配線やダクトが設置され、床にはレールが敷かれている様子。" width="485" height="646" loading="lazy">
            </div>
          </div>
        </li>
        <li class="value__item">
          <div class="value__item-bg-img-wrap value__item-bg-img-wrap--reverse">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value-bg02.webp" class="value__item-bg-img rellax" data-rellax-speed="-3" data-rellax-mobile-speed="-2" data-rellax-xs-speed="-2" alt="作業着を着た男性ドライバーがトラックを運転している様子の背景画像" width="1170" height="510" loading="lazy">
          </div>
          <div class="value__item-content value__item-content--reverse">
            <div class="value__item-content-left">
              <div class="value__item-number value__item-number--reverse value__item-number--02  rellax" data-rellax-speed="0">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value-number02.svg" class="value__item-number-img" alt="01" width="146" height="144" loading="lazy">
              </div>
              <div class="value__item-text-wrap value__item-text-wrap--reverse rellax" data-rellax-speed="2" data-rellax-mobile-speed="1" data-rellax-xs-speed="1">
                <h3 class="value__item-title">熟練の職人が生み出す「本物の味」へのこだわり</h3>
                <p class="value__item-text">
                  当社では、商業施設内の安全性を最優先に考え、火気使用や現場調理を一切行わない独自の運営体制を確立しています。現場調理を排除しながらも最高の品質を届けるため、熟練の職人が専用の工房にて、厳選された素材を最も美味しい状態で仕上げてから現地へ搬入。徹底した衛生・温度管理により、催事会場でも専門店と変わらぬ「深い味わい」と「美しい照り・質感」を完全に再現いたします。火気厳禁の区画や什器制約がある場所でも安心して導入いただけると同時に、確かな本物の味が顧客の満足度を高め、施設のリピーター獲得に大きく貢献いたします。
                </p>
              </div>
            </div>
            <div class="value__item-img-wrap rellax" data-rellax-speed="1.5" data-rellax-mobile-speed="0.7" data-rellax-xs-speed="0.7">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value02.webp" class="value__item-img" alt="作業着を着た男性ドライバーがトラックを運転している様子" width="485" height="646" loading="lazy">
            </div>
          </div>
        </li>
        <li class="value__item">
          <div class="value__item-bg-img-wrap value__item-bg-img-wrap--left">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value-bg03.webp" class="value__item-bg-img rellax" data-rellax-speed="-3" data-rellax-mobile-speed="-2" data-rellax-xs-speed="-2" alt="青空の下、スーツを着た男性が勢いよくジャンプしている様子の背景画像" width="1170" height="510" loading="lazy">
          </div>
          <div class="value__item-content">
            <div class="value__item-content-left">
              <div class="value__item-number value__item-number--03 rellax" data-rellax-speed="0">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value-number03.svg" class="value__item-number-img" alt="01" width="146" height="144" loading="lazy">
              </div>
              <div class="value__item-text-wrap rellax" data-rellax-speed="2" data-rellax-mobile-speed="1" data-rellax-xs-speed="1">
                <h3 class="value__item-title">施設価値を高める空間演出と接客品質</h3>
                <p class="value__item-text">
                  催事スペースを単なる販売場所ではなく、施設全体の魅力を引き立てる「特別な空間」へと昇華させます。簡易的なワゴンは使用せず、施設のモダンな内装や雰囲気に調和する、上質な木目調の和風什器を厳選。さらに、行灯や季節の装飾を織り交ぜることで、視覚的にも「和の情緒」を感じられる空間を演出いたします。現場に立つスタッフは職人の魂を象徴する清潔な割烹着を着用し、丁寧かつ活気あふれる接客を徹底。品格ある店構えと心温まるおもてなしにより、商業空間に新たな賑わいと上質な彩りを添え、館全体のブランド価値向上に寄与いたします。
                </p>
              </div>
            </div>
            <div class="value__item-img-wrap rellax" data-rellax-speed="1.5" data-rellax-mobile-speed="0.7" data-rellax-xs-speed="0.7">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/value03.webp" class="value__item-img" alt="青空の下、スーツを着た男性が勢いよくジャンプしている様子" width="485" height="646" loading="lazy">
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!---------  商品ラインナップ  --------->

  <section class="lineup" id="lineup">
    <div class="lineup__inner">
      <hgroup class="section-title lineup__title">
        <p class="section-title-en">lineup</p>
        <h2 class="section-title-jp">商品ラインナップ</h2>
      </hgroup>
      <div class="lineup__intro">
        <ul class="lineup__category-list">
          <li class="lineup__category-item">黒豆塩大福（つぶ、こし）</li>
          <li class="lineup__category-item">串団子（ずんだ、よもぎつぶ、みたらし、3色団子、白団子つぶ）</li>
          <li class="lineup__category-item">おちょぼ小餅（みたらし、ごまみたらし、よもぎみたらし）</li>
        </ul>
        <div class="lineup__desc">
          <p class="lineup__desc-text">催事会場で圧倒的な集客を誇る「亀屋新左衛門」のフルラインナップです。<br>秘伝のタレが絡む串団子から、中から蜜がとろけ出す「おちょぼ小餅」まで、五感を刺激する和菓子の競演をお楽しみください。<br>日本三大もち米「滋賀羽二重餅」を贅沢に使用し、粘りと甘みが強い職人品質の味を追求しました。<br>開催地の客層や季節に合わせ、日常を特別な体験へと変える最適なラインナップで、館内の賑わいを創出します。
          </p>
        </div>
      </div>
      <div class="swiper lineup__swiper js-lineup-swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lineup01.webp" alt="白、よもぎ、黒ごま、うぐいすの4種類の餡入り焼きまんじゅうが皿に綺麗に並んでいる様子" width="419" height="342" loading="lazy"></li>
          <li class="swiper-slide"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lineup02.webp" alt="醤油だれがかかった焼き団子の断面" width="419" height="342" loading="lazy"></li>
          <li class="swiper-slide"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lineup03.webp" alt="あんことみたらし団子が盛られた串団子の盛り合わせ" width="419" height="342" loading="lazy"></li>
          <li class="swiper-slide"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lineup04.webp" alt="黒ごまあん入りの和菓子の断面" width="419" height="342" loading="lazy"></li>
        </ul>
      </div>
    </div>
  </section>

  <!---------  運営仕様・出店条件  --------->

  <section class="booth-specs" id="booth-specs">
    <div class="booth-specs__inner">
      <div class="booth-specs__content">
        <hgroup class="section-title booth-specs__title section-title--small">
          <p class="section-title-en">BOOTH SPECS</p>
          <h2 class="section-title-jp">運営仕様・出店条件</h2>
        </hgroup>
        <p class="booth-specs__lead">「亀屋新左衛門」の催事運営は、施設の防災・安全基準に配慮しつつ、短時間で圧倒的なシズル感を生む空間を作り上げます。</p>
        <div class="booth-specs__block">
          <h3 class="booth-specs__block-title">■ 基本設備構成</h3>
          <p class="booth-specs__block-lead">販売規模に合わせて、最適な什器セットを持ち込みます。</p>
          <ul class="booth-specs__list">
            <li class="booth-specs__item">・販売什器： 6尺販売台（2〜3台）</li>
            <li class="booth-specs__item">・ショーケース： クリンリョーケース 6尺（2〜3台）</li>
            <li class="booth-specs__item">・保管用： 6尺冷凍庫（1台）</li>
          </ul>
        </div>
        <div class="booth-specs__block">
          <h3 class="booth-specs__block-title">■ 出店スペース目安</h3>
          <p class="booth-specs__block-lead">催事スペースや通路の広さに応じて柔軟にレイアウト可能です。</p>
          <ul class="booth-specs__list">
            <li class="booth-specs__item">・必要最小面積： 幅 3.8m × 奥行 2.0m 〜</li>
            <li class="booth-specs__item booth-specs__item--note">※催事区画の形状に合わせて、L字型や対面型など最適な配置をご提案します。</li>
          </ul>
        </div>
        <div class="booth-specs__block">
          <h3 class="booth-specs__block-title">■ 設営・撤収ワークフロー</h3>
          <p class="booth-specs__block-lead">館の営業時間外や入れ替え時間に合わせ、迅速かつ確実に作業を行います。</p>
          <ul class="booth-specs__list">
            <li class="booth-specs__item">・搬入・設営： 約2時間</li>
            <li class="booth-specs__item">・撤収・搬出： 約2時間</li>
            <li class="booth-specs__item booth-specs__item--note">※火気を使用しないため、防災面での申請もスムーズです。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!---------  会社概要  --------->

  <section class="company" id="company">
    <div class="company__inner inner">
      <hgroup class="section-title company__title section-title--small">
        <p class="section-title-en">company</p>
        <h2 class="section-title-jp">会社概要</h2>
      </hgroup>
      <div class="company__content">
        <dl class="company__list company__list--left">
          <div class="company__item">
            <dt class="company__term">社名</dt>
            <dd class="company__desc">株式会社リチャーズカンパニー</dd>
          </div>
          <div class="company__item">
            <dt class="company__term">所在地</dt>
            <dd class="company__desc">〒274-0077 千葉県船橋市薬円台5-35-1</dd>
          </div>
          <div class="company__item">
            <dt class="company__term">代表</dt>
            <dd class="company__desc">代表取締役　ザハロヴァ　ナタリヤ</dd>
          </div>
          <div class="company__item">
            <dt class="company__term">連絡先</dt>
            <dd class="company__desc">TEL047-400-5910　FAX047-427-9488</dd>
          </div>
        </dl>
        <dl class="company__list company__list--right">
          <div class="company__item">
            <dt class="company__term">設立</dt>
            <dd class="company__desc">2008年9月</dd>
          </div>
          <div class="company__item">
            <dt class="company__term">運営内容</dt>
            <dd class="company__desc">催事、イベント企画</dd>
          </div>
          <div class="company__item">
            <dt class="company__term">主要取引先</dt>
            <dd class="company__desc">
              イオンモール株式会社 / イオンタウン株式会社<br>
              株式会社マルイ / 株式会社カインズ<br>
              JR四国ステーション開発株式会社<br>
              JR西日本グループ株式会社和歌山ステーションビルディング
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </section>

  <!---------  代表メッセージ  --------->

  <section class="message" id="message">
    <div class="message__inner inner">
      <hgroup class="section-title message__title section-title--small">
        <p class="section-title-en">MESSAGE</p>
        <h2 class="section-title-jp">代表メッセージ</h2>
      </hgroup>
      <div class="message__content">
        <div class="message__text-wrap">
          <p class="message__text">日本という国が育んできた「和菓子」という文化には、単なる甘味を超えた、人の心を癒やし、場を華やかに彩る不思議な力が宿っています。私は、この素晴らしい伝統文化に魅了され、その魅力を一人でも多くの方へ、そして現代のライフスタイルに寄り添う形で届けたいという一心で、株式会社リチャーズカンパニーを歩ませてまいりました。</p>
          <p class="message__text">私たちの使命は、ただお菓子を販売することではありません。催事という一期一会の機会を通じて、商業施設という公共の場に「和の情緒」と「活気ある賑わい」を創出すること。そして、施設を訪れるお客様の日常に、小さな幸せと感動を添えることです。</p>
          <p class="message__text">運営においては、食の安全と信頼を第一に掲げております。現場での火気使用を排除した徹底した安全管理と、熟練の職人が工房で仕上げる妥協なき味の両立。これらは、大切な施設をお貸しいただくパートナー企業様への、私たちなりの誠実さの証です。</p>
          <p class="message__text">古き良き伝統を重んじながらも、時代の変化を恐れず、常に「選ばれる価値」を追求し続ける。私たち「亀屋新左衛門」は、食を通じて人と場所を繋ぎ、商業施設の価値を共に高めていく真のパートナーであり続けることをお約束いたします。</p>
          <p class="message__name">代表取締役　ザハロヴァナタリヤ</p>
        </div>
      </div>
    </div>
  </section>

  <!---------  エントリーフォーム  --------->

  <section class="contact" id="contact">
    <div class="contact__inner inner">
      <hgroup class="section-title contact__title section-title--white">
        <p class="section-title-en">contact form</p>
        <h2 class="section-title-jp">お問い合わせフォーム</h2>
      </hgroup>
      <div class="contact__form-wrap">
        <p class="contact__form-text">必要情報を入力いただき、「送信する」ボタンを押してください。</p>
        <?php echo do_shortcode('[contact-form-7 id="8ad0500" title="お問い合わせフォーム"]'); ?>
        <p class="contact__form-thanks">改めて、ご連絡させていただきます。</p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>