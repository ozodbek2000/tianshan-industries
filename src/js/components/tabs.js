import $ from "jquery";

const tabs = () => {
    $(".delivery__tab, .limestone__tab").on("click", function () {
        const index = $(this).index();

        // Tabs
        $(".delivery__tab, .limestone__tab").removeClass("active");
        $(this).addClass("active");

        // Contents
        $(".delivery__tab_content, .limestone__tabs_content").removeClass("active");
        $(".delivery__tab_content, .limestone__tabs_content").eq(index).addClass("active");
    });
};

export default tabs;