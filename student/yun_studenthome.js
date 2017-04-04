$(".bar").click(function () {
    $(".bar_page").show();
    $(".bar1_1_page").hide();
    $(".bar1_2_page").hide();
});
$("#bar1_1").click(function () {
    $(".bar1_1_page").show();
    $(".bar1_2_page").hide();
    $(".bar_page").hide();
});
$("#bar1_2").click(function () {
    $(".bar_page").hide();
    $(".bar1_1_page").hide();
    $(".bar1_2_page").show();
});
$(".bar").click(function () {
    $(".sonBar1 p").slideUp("1500");
    $(".sonBar2 p").slideUp("1500");
    $(".sonBar3 p").slideUp("1500");
});
$(".bar1").click(function () {
    $(".sonBar1 p").slideToggle("1500");
    $(".sonBar2 p").slideUp("1500");
    $(".sonBar3 p").slideUp("1500");
});
$(".bar2").click(function () {
    $(".sonBar1 p").slideUp("1500");
    $(".sonBar2 p").slideToggle("1500");
    $(".sonBar3 p").slideUp("1500");
});
$(".bar3").click(function () {
    $(".sonBar1 p").slideUp("1500");
    $(".sonBar2 p").slideUp("1500");
    $(".sonBar3 p").slideToggle("1500");
});
