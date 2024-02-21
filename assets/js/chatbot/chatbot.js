$(document).ready(() => {
  $('#message-textarea').on('input', function() {
    // console.log($('textarea').val());
    $('#message-textarea').css("height", `auto`);
    $('#message-textarea').css("height", `${this.scrollHeight}px`);
  });
})