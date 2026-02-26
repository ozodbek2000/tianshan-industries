import $ from "jquery";

const toggle = () => {
    $(".header__burger").click(function (event) {
        $(this).toggleClass("active");

        if ($(this).hasClass("active")) {
            $(".header__menu").addClass("active");
        } else {
            $(".header__menu").removeClass("active");
            $(".header__nav_item-inner").removeClass("active");
        }
    });

    $(".header__nav_item-inner > h3").click(function (event) {
        $(".header__nav_item-inner").removeClass("active");
        $(".header__menu").toggleClass("active");
    });

    $("#production").click(function (event) {
        $(".header__nav_item-inner").toggleClass("active");
        $(".header__menu").removeClass("active");
    });
    $(".cases__slide").click(function (event) {
        $(".cases__slide").not(this).removeClass("active");
        $(this).toggleClass("active");
    });

    $(".submit").click(function (event) {
        $(".popup").toggleClass("active");
        $("body").toggleClass("lock");
    });

    $(".close, .overlay").click(function (event) {
        $(".popup").removeClass("active");
        $("body").removeClass("lock");
    });
    $(".accordeon").click(function (event) {
        $(".accordeon").not(this).removeClass("active");
        $(this).toggleClass("active");
    });
};

export default toggle;
