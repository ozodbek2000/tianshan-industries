import $ from "jquery";

const tabs = () => {
    $(".delivery__tab").on("click", function () {
        const index = $(this).index();

        // Tabs
        $(".delivery__tab").removeClass("active");
        $(this).addClass("active");

        // Contents
        $(".delivery__tab_content").removeClass("active");
        $(".delivery__tab_content").eq(index).addClass("active");
    });
};

export default tabs;