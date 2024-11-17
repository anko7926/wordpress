<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <title>オリジナルテーマ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="mystyle.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
  </head>
  <body>
  <?php get_header(); ?>
<!-- 上記が追記するコード -->

<section id="content">
...
    <header class="bg-secondary-subtle">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">オリジナルテーマ</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
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
          <section>
            <h2>ホームページ作成</h2>
            <p><img src="image\banar.jpg" alt="バナー画像" /></p>
          </section>
          <section>
            <h2>TikTok配信中</h2>
            <p><img src="image\tiktok.jpg" alt="Tiktokサンプル画像" /></p>
          </section>
        </div>
      </div>
    </section>
    ...
</section>
 <!-- 下記が追記するコード -->
<?php get_footer(); ?>
    <footer>
      <div class="container">
        <p class="text-center mb-0">Copyright © PAM All Rights Reserved.</p>
      </div>
      ...
 <div id="sidebar" class="col-md-3">
   <?php get_sidebar(); ?>
   <!-- 上記が追記するコード -->
 </div>
...
    </footer>
  </body>
</html>