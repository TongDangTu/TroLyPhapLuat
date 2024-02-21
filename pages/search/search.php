<?php require_once("../../values/string.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://kit.fontawesome.com/c87437453a.js" crossorigin="anonymous"></script>

  <link href="../../assets/styles/style.css" rel="stylesheet">
  <link href="../../assets/styles/search/search.css" rel="stylesheet">
  <script src="../../assets/js/JQuery.js"></script>
  <script src="../../assets/js/script.js"></script>

  <title>
    <?= $text_title ?>
  </title>
</head>

<body>
  <!-- LEFT BAR -->
  <?php require("../../components/left-bar/left-bar.php") ?>

  <div class="layout-container">
    <div class="container">
      <div class="branch">
        <a href="" class="logo">TroLyPhapLuat<span>.ai</span></a>
        <p class="slogan">
          <?= $text_slogan ?>
        </p>
      </div>

      <!-- SEARCH -->
      <div class="search">
        <div class="search-bar d-flex justify-content-between" id="search-bar">
          <div class="d-flex w-100 align-items-center ">
            <!-- <i class="fa-solid fa-magnifying-glass fa-magnifying-glass-edit d-flex align-items-center "></i> -->
            <img src="../../assets/icons/search-normal.png" alt="">
            <input type="text" name="" id="searchInput" class="search-input" placeholder="<?= $text_placeholderSearch ?>">
          </div>
          <button type="button" class="btn-search" id="btn-search">
            Tìm kiếm
          </button>
        </div>
        <div class="search-results" id="search-results">
          <div class="category">
            <h4 class="category-head">- Thủ tục</h4>
            <p class="category-detail"><i class="fa-solid fa-pager fa-pager-edit category-detail-icon"></i> Cấp Giấy chứng
              nhận đăng ký hoạt động lần đầu cho tổ chức khoa học và công nghệ</p>
            <p class="category-detail"><i class="fa-solid fa-pager fa-pager-edit category-detail-icon"></i> Thay đổi, bổ
              sung nội dung Giấy chứng nhận đăng ký hoạt động của tổ chức KHCN</p>
            <p class="category-detail"><i class="fa-solid fa-pager fa-pager-edit category-detail-icon"></i> Cấp giấy phép
              lao động cho chuyên gia khoa học công nghệ làm việc tại Việt Nam</p>
          </div>
          <div class="category">
            <h4 class="category-head">- Văn bản</h4>
            <div class="category-detail">
              <p><i class="fa-regular fa-folder-closed fa-folder-closed-edit category-detail-icon"></i> Nghị định về doanh
                nghiệp khoa học và công nghệ</p>
              <div class="row category-detail-more">
                <div class="category-detail-more-item col-md-3">
                  <span class="category-detail-more-header">Số: </span>13/2019/NĐ-CP
                </div>
                <div class="category-detail-more-item col-md-3">
                  <span class="category-detail-more-header">Ngày ban hành: </span>01/02/2019
                </div>
                <div class="category-detail-more-item col-md-3">
                  <span class="category-detail-more-header">Cơ quan ban hành: </span>Chính phủ
                </div>
                <div class="category-detail-more-item col-md-3">
                  <span class="category-detail-more-header">Trạng thái: </span>Còn hiệu lực
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <span class="number-of-result">Tìm thấy 24 kết quả</span>
            <a href="" class="all-result">
              <?= $text_allResult ?>
            </a>
          </div>
        </div>
      </div>

      <!-- CONTENT -->
      <div class="content row ms-0 me-0 mt-5 d-flex justify-content-around ">
        <div class="col-6 col-sm-4 d-flex justify-content-start justify-content-sm-start p-0">
          <div class="content-item text-center d-flex align-items-center justify-content-center">
            <div>
              <div>
                <img src="../../assets/icons/building.png" alt="">
              </div>
              <div>
                <p class="content-item-title">Doanh nghiệp</p>
              </div>
              <div>
                <p class="content-item-quantity">3782 thông tin</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 d-flex justify-content-end justify-content-sm-center p-0">
          <div class="content-item text-center d-flex align-items-center justify-content-center">
            <div>
              <div>
                <img src="../../assets/icons/people.png" alt="">
              </div>
              <div>
                <p class="content-item-title">Người lao động</p>
              </div>
              <div>
                <p class="content-item-quantity">589 thông tin</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 d-flex justify-content-start justify-content-sm-end p-0">
          <div class="content-item text-center d-flex align-items-center justify-content-center">
            <div>
              <div>
                <img src="../../assets/icons/bank.png" alt="">
              </div>
              <div>
                <p class="content-item-title">Cơ quan chính phủ</p>
              </div>
              <div>
                <p class="content-item-quantity">2076 thông tin</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 d-flex justify-content-end justify-content-sm-start p-0">
          <div class="content-item text-center d-flex align-items-center justify-content-center">
            <div>
              <div>
                <img src="../../assets/icons/folder-open.png" alt="">
              </div>
              <div>
                <p class="content-item-title">Văn bản pháp luật</p>
              </div>
              <div>
                <p class="content-item-quantity">2426 thông tin</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 d-flex justify-content-start justify-content-sm-center p-0">
          <div class="content-item text-center d-flex align-items-center justify-content-center">
            <div>
              <div>
                <img src="../../assets/icons/layer.png" alt="">
              </div>
              <div>
                <p class="content-item-title">Thủ tục hành chính</p>
              </div>
              <div>
                <p class="content-item-quantity">267 thông tin</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 d-flex justify-content-end justify-content-sm-end p-0">
          <div class="content-item text-center d-flex align-items-center justify-content-center">
            <div>
              <div>
                <img src="../../assets/icons/document-text.png" alt="">
              </div>
              <div>
                <p class="content-item-title">Hướng dẫn thực hiện</p>
              </div>
              <div>
                <p class="content-item-quantity">2095 thông tin</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>