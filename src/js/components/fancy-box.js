import { Fancybox } from "@fancyapps/ui/dist/fancybox/";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

const fancybox = () => {
    // Wrap each image in an anchor tag with data-fancybox attribute
    const slides = document.querySelectorAll(".production__certificates_image div");

    slides.forEach((slide) => {
        const img = slide.querySelector("img");
        if (!img) return;

        const anchor = document.createElement("a");
        anchor.href = img.src;
        anchor.setAttribute("data-fancybox", "certificates");
        anchor.setAttribute("data-caption", img.alt);

        img.parentNode.insertBefore(anchor, img);
        anchor.appendChild(img);
    });

    Fancybox.bind("[data-fancybox='certificates']", {
        animated: true,
        showClass: "fancybox-zoomIn",
        hideClass: "fancybox-zoomOut",
    });
};

export default fancybox;