<?php require_once("../../values/string.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://kit.fontawesome.com/c87437453a.js" crossorigin="anonymous"></script>

  <link href="../../assets/styles/style.css" rel="stylesheet">
  <link href="../../assets/styles/chatbot/chatbot.css" rel="stylesheet">
  <script src="../../assets/js/JQuery.js"></script>
  <script src="../../assets/js/script.js"></script>
  <script src="../../assets/js/chatbot/chatbot.js"></script>

  <title>
    <?= $text_title ?>
  </title>
</head>

<body>
  <?php include_once "../../components/left-bar/left-bar.php" ?>

  <!-- MESSAGE -->
  <div class="mess-container">
    <!-- PANEL MESSAGE -->
    <div class="panel-header d-flex justify-content-between align-items-center ">
      <div class="panel-header-left">
        <h3><?= $text_title ?></h3>
        <span class="d-flex align-items-center ">
          <div class="active"></div>
          <?= $text_site ?>
        </span>
      </div>
      <a href="">
        <img src="../../assets/icons/archive-add.png" alt="">
      </a>
    </div>

    <!-- MESSAGE LIST  -->
    <div class="message-list">
      <div class="message-package">
        <img class="message-avatar" src="../../assets/icons/bot-avatar.png" alt="">
        <p class="message-content">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="message-package" style="flex-direction: row-reverse;">
        <img class="message-avatar" src="../../assets/icons/bot-avatar.png" alt="">
        <p class="message-content">Ut enim ad minim veniam</p>
      </div>
      <div class="message-package">
        <img class="message-avatar" src="../../assets/icons/bot-avatar.png" alt="">
        <p class="message-content">Ut enim ad minim veniam</p>
      </div>
      <div class="message-package">
        <div class="message-avatar"></div>
        <p class="message-content">Ut enim ad minim veniam</p>
      </div>
      <div class="message-package">
        <div class="message-avatar"></div>
        <div class="video-container">
          <iframe class="video-youtube" src="https://www.youtube-nocookie.com/embed/FN7ALfpGxiI?si=VVV6faPyfQWLjm_P" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
      <div class="message-package" style="flex-direction: row-reverse;">
        <img class="message-avatar" src="../../assets/icons/bot-avatar.png" alt="">
        <p class="message-content">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="message-end">
        <button class="rate-button">
          <img src="../../assets/icons/star.png" alt="">
          Đánh giá cuộc hội thoại
        </button>
        <button class="save-button">
          <img src="../../assets/icons/archive-add-white.png" alt="">
          Lưu cuộc hội thoại
        </button>
      </div>
    </div>

    <!-- message BOX -->
    <div class="message-box">
      <div class="message-input-area">
        <!-- <input class="message-input" type="text" placeholder="<?= $text_placeholderMessage ?>"> -->
        <textarea name="" id="message-textarea" class="message-textarea" rows="1" placeholder="<?= $text_placeholderMessage ?>"></textarea>
        <button id="send-button">
          <img src="../../assets/icons/send.png" alt="">
        </button>
      </div>
    </div>
  </div>
</body>

</html>