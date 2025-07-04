import "./bootstrap";
import LocomotiveScroll from "locomotive-scroll";

window.addEventListener("load", function () {
    const scrollContainer = document.querySelector("[data-scroll-container]");

    if (scrollContainer) {
        const scroll = new LocomotiveScroll({
            el: scrollContainer,
            smooth: true,
        });

        setTimeout(() => {
            scroll.update();
        }, 1000);
    }
});
