<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1925421851050773';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  <!-- Navigation-->
  <?php require_once "./views/layouts/content/navbar_content.php"; ?>
    <div class="content-wrapper ">
          <!-- Breadcrumbs-->
        <ol class="breadcrumb print ">
          <li class="breadcrumb-item ">
            <a href=".">Trang quản lý</a>
          </li>
          <li class="breadcrumb-item active"><?=$title?></li>
        </ol>
        <div class="container-fluid">
            <?php require_once "$view"; ?>
        </div>
    </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  <?php require_once "./views/layouts/content/footer_content.php"; ?>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <?php require_once "./views/layouts/content/logout_modal.php"; ?>