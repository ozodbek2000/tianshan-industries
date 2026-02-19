import $ from "jquery";

$(document).ready(function () {
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
});