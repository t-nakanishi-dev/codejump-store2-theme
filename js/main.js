$(function () {
  $(".toggle_btn").on("click", function () {
    // #headerに「open」クラスが存在する場合
    if ($("#header").hasClass("open")) {
      // openクラスを削除（メニューを閉じる）
      $("#header").removeClass("open");

      // #headerにopenクラスが存在しない場合
    } else {
      // openクラスを追加（メニューを開く）
      $("#header").addClass("open");
    }
  });

  // メニューが表示されている時に、暗い背景（画面全体）をクリックした場合
  $("#mask").on("click", function () {
    // 背景をクリックされた時も、openクラスを削除してメニューを閉じたい
    $("#header").removeClass("open");
  });
});
