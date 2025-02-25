import { register } from "swiper/element";
import { Navigation, Pagination } from "swiper/modules";

register();

const swiperEl = document.querySelector("swiper-container");

const params = {
    modules: [Navigation, Pagination],
    // inject modules styles to shadow DOM
    injectStylesUrls: [
        "path/to/navigation-element.min.css",
        "path/to/pagination-element.min.css",
    ],
};

Object.assign(swiperEl, params);

swiperEl.initialize();
