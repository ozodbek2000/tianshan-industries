import $ from "jquery";
import toggle from "./components/toggle";
import swiper from "./components/swiper";
import tabs from "./components/tabs";
import fancybox from "./components/fancy-box";

$(document).ready(function () {
    toggle();
    swiper();
    tabs();
    fancybox()
});
