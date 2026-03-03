<?php get_header(); ?>

<main>
<style>
.not-found {
  text-align: center;
  padding: 300px 0 200px 0;
}
.not-found__inner {
  max-width: 600px;
  margin: 0 auto;
  padding-inline: 20px;
}
.not-found__title {
  font-size: 3rem;
  font-weight: bold;
  margin-bottom: 20px;
}
.not-found__text {
  font-size: 1.2rem;
}
.not-found__link {
  display: inline-block;
  margin-top: 60px;
  padding: 15px 50px;
  border: 1px solid #333;
  border-radius: 5px;
  transition: .3s;
}
.not-found__link:hover {
  background-color: #333;
  color: #fff;
}
@media (max-width: 767px) {
  .not-found {
  padding: 200px 0 100px 0;
}
.not-found__title {
  font-size: 2rem;
}
.not-found__text {
  font-size: 1rem;
}
}
</style>
<section class="not-found">
  <div class="not-found__inner">
    <h2 class="not-found__title">404：Not Found</h2>
    <p class="not-found__text">
      お探しのページは見つかりませんでした。<br>
      お探しのページは削除されたか、移動された可能性があります。
    </p>
    <a href="<?php echo home_url(); ?>" class="not-found__link">TOPに戻る</a>
  </div>
</section>

</main>

<?php get_footer(); ?>