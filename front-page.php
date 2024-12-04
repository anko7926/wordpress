<!DOCTYPE html>
<html lang="ja">
    <?php get_header(); ?>
<!-- 上記が追記するコード -->

<section id="content">
    <div id="top-vg" class="container-fluid">
      <img src="image\top.jpg" alt="トップページ画像" />
    </div>
    <section id="content">
      <div id="content-wrap" class="container row pt-3">
        <div id="main" class="col-md-9">
          <h1 class="text-center">オンラインプログラミングスクール</h1>
          <p>自分でホームページ制作・Web集客したい方向けのオンラインスクールです。</p>
          <p>ウェブ制作コースとウェブアプリコースから選択して受講できます。</p>
          <div class="row">
            <div class="col-md-6">
              <p><img src="image\pc-wood.jpg" alt="スタンダードコース" /></p>
              <h2 class="text-center">ウェブ制作コース</h2>
              <p>ホームページ作成からキャリア支援まで一通りサポートいただきたい方向けのコース</p>
            </div>
            <div class="col-md-6">
              <p><img src="image\pc-leaf.jpg" alt="ライトコース" /></p>
              <h2 class="text-center">ウェブアプリコース</h2>
              <p>基礎は習得できてるためアプリを作りたい方向けのコース</p>
            </div>
          </div>
          <p class="text-center">お申し込みは<a href="#">こちらから</a> <br /><br /></p>
        </div>
        <div id="sidebar" class="col-md-3">
          
        </div>
      </div>
    </section>
</section>
 <!-- 下記が追記するコード -->
<?php get_footer(); ?>
    <footer>
      
 <div id="sidebar" class="col-md-3">
   <?php get_sidebar(); ?>
   <!-- 上記が追記するコード -->
 </div>
    </footer>
  </body>
</html>