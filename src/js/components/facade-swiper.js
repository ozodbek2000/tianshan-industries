import $ from "jquery";
import Swiper from "swiper/bundle";

const facadeSwiper = () => {
    $(document).ready(function () {
        let isFirstSwipe = true;

        const swiper = new Swiper(".facade__swiper, .gallery__swiper", {
            slidesPerView: 1.2,
            spaceBetween: 20,
            loop: false,
            keyboard: { enabled: true },
            speed: 800,
            pagination: {
                el: ".facade__pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".facade__navigation_next",
                prevEl: ".facade__navigation_prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
            on: {
                slideChange: function () {
                    if (window.innerWidth <= 768) {
                        return;
                    }

                    if (isFirstSwipe) {
                        isFirstSwipe = false;
                        return;
                    }

                    const currentIndex = this.activeIndex;
                    const previousIndex = this.previousIndex;
                    const slides = this.slides;

                    // Определяем направление свайпа
                    const isNext =
                        currentIndex > previousIndex ||
                        (previousIndex === slides.length - 1 &&
                            currentIndex === 0);

                    if (isNext) {
                        // Свайп вперед: копируем из 3-го слайда во 2-й
                        const nextSlide = slides[currentIndex + 1];
                        const skipSlide = slides[currentIndex + 2];

                        if (nextSlide && skipSlide) {
                            const skipImg = skipSlide.querySelector("img");
                            const nextImg = nextSlide.querySelector("img");

                            if (skipImg && nextImg) {
                                nextImg.style.transition = "opacity 0.4s ease";
                                nextImg.style.opacity = "0";

                                setTimeout(() => {
                                    nextImg.src = skipImg.src;
                                    nextImg.alt = skipImg.alt;
                                    nextImg.style.opacity = "1";
                                }, 200);
                            }
                        }
                    } else {
                        // Свайп назад: восстанавливаем оригинальный src из data-src
                        // только если есть слайды слева (currentIndex > 0)
                        if (currentIndex === 0) {
                            // Мы в самом начале — восстанавливаем все видимые слайды из data-src
                            const visibleSlides = [
                                slides[0],
                                slides[1],
                                slides[2],
                            ];

                            visibleSlides.forEach((slide) => {
                                if (!slide) return;
                                const img = slide.querySelector("img");
                                if (img && img.dataset.originalSrc) {
                                    img.style.transition = "opacity 0.4s ease";
                                    img.style.opacity = "0";

                                    setTimeout(() => {
                                        img.src = img.dataset.originalSrc;
                                        img.alt =
                                            img.dataset.originalAlt || img.alt;
                                        img.style.opacity = "1";
                                    }, 200);
                                }
                            });

                            return;
                        }

                        // Обычный свайп назад: копируем из 2-го слайда в 3-й
                        const secondSlide = slides[currentIndex + 1];
                        const thirdSlide = slides[currentIndex + 2];

                        if (secondSlide && thirdSlide) {
                            const secondImg = secondSlide.querySelector("img");
                            const thirdImg = thirdSlide.querySelector("img");

                            if (secondImg && thirdImg) {
                                thirdImg.style.transition = "opacity 0.4s ease";
                                thirdImg.style.opacity = "0";

                                setTimeout(() => {
                                    thirdImg.src = secondImg.src;
                                    thirdImg.alt = secondImg.alt;
                                    thirdImg.style.opacity = "1";
                                }, 200);
                            }
                        }
                    }
                },
                init: function () {
                    if (window.innerWidth <= 768) {
                        return;
                    }

                    const currentIndex = this.activeIndex;
                    const slides = this.slides;

                    // Сохраняем оригинальные src у всех слайдов
                    slides.forEach((slide) => {
                        const img = slide.querySelector("img");
                        if (img && !img.dataset.originalSrc) {
                            img.dataset.originalSrc = img.src;
                            img.dataset.originalAlt = img.alt;
                        }
                    });

                    const nextSlide = slides[currentIndex + 1];
                    const skipSlide = slides[currentIndex + 2];

                    if (nextSlide && skipSlide) {
                        const skipImg = skipSlide.querySelector("img");
                        const nextImg = nextSlide.querySelector("img");

                        if (skipImg && nextImg) {
                            nextImg.src = skipImg.src;
                            nextImg.alt = skipImg.alt;
                        }
                    }
                },
            },
        });

        const rentSwiper = new Swiper(".rent__swiper", {
            slidesPerView: "3.3",
            spaceBetween: 20,
            loop: false,
            keyboard: { enabled: true },
            speed: 800,
            pagination: {
                el: ".rent__pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".rent__navigation_next",
                prevEl: ".rent__navigation_prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: "1.2",
                },
                768: {
                    slidesPerView: "1.4",
                },
                1024: {
                    slidesPerView: "4.05",
                },
            },
        });

        const serviceSwiper = new Swiper(".service__swiper", {
            slidesPerView: "auto",
            direction: "vertical",
            mousewheel: false,
            speed: 600,
            effect: "slide",
            allowTouchMove: true,
            resistance: true,
            resistanceRatio: 0.85,
            breakpoints: {
                767: {
                    slidesPerView: "1",
                    spaceBetween: 10,
                },
            },
        });

        const $serviceSection = $(".service__swiper");
        let lastScrollTime = 0;
        const scrollDelay = 150;
        let swiperDisabled = false;
        let touchStartY = 0;
        let isAnimating = false;
        let accumulatedDelta = 0;
        const deltaThreshold = 40;

        function isMobile() {
            return window.innerWidth < 767;
        }

        function isMouseOverService(e) {
            const rect = $serviceSection[0].getBoundingClientRect();
            return (
                e.clientY >= rect.top &&
                e.clientY <= rect.bottom &&
                e.clientX >= rect.left &&
                e.clientX <= rect.right
            );
        }

        function isTouchOverService(touch) {
            const rect = $serviceSection[0].getBoundingClientRect();
            return (
                touch.clientY >= rect.top &&
                touch.clientY <= rect.bottom &&
                touch.clientX >= rect.left &&
                touch.clientX <= rect.right
            );
        }

        function isSectionFullyCovered() {
            const rect = $serviceSection[0].getBoundingClientRect();
            const windowHeight = $(window).height();
            return rect.top >= 0 && rect.bottom <= windowHeight;
        }

        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        const resetAccumulatedDelta = debounce(() => {
            accumulatedDelta = 0;
        }, 200);

        function easeOutCubic(t) {
            return 1 - Math.pow(1 - t, 3);
        }

        document.addEventListener(
            "wheel",
            function (e) {
                if (!isMouseOverService(e) || !isSectionFullyCovered()) {
                    accumulatedDelta = 0;
                    return;
                }

                if (isAnimating) {
                    e.preventDefault();
                    return;
                }

                const currentTime = Date.now();

                const momentum = Math.min(Math.abs(e.deltaY) / 100, 1);
                accumulatedDelta += e.deltaY * (0.5 + momentum * 0.5);
                resetAccumulatedDelta();

                const scrollingDown = accumulatedDelta > deltaThreshold;
                const scrollingUp = accumulatedDelta < -deltaThreshold;

                if (scrollingDown) {
                    if (serviceSwiper.isEnd) {
                        accumulatedDelta = 0;
                        return;
                    }

                    if (currentTime - lastScrollTime < scrollDelay) {
                        e.preventDefault();
                        return;
                    }

                    e.preventDefault();
                    isAnimating = true;
                    lastScrollTime = currentTime;
                    accumulatedDelta = 0;

                    serviceSwiper.slideNext();

                    setTimeout(() => {
                        isAnimating = false;
                    }, 600);
                }

                if (scrollingUp) {
                    if (serviceSwiper.isBeginning) {
                        accumulatedDelta = 0;
                        return;
                    }

                    if (currentTime - lastScrollTime < scrollDelay) {
                        e.preventDefault();
                        return;
                    }

                    e.preventDefault();
                    isAnimating = true;
                    lastScrollTime = currentTime;
                    accumulatedDelta = 0;

                    serviceSwiper.slidePrev();

                    setTimeout(() => {
                        isAnimating = false;
                    }, 600);
                }

                if (Math.abs(accumulatedDelta) > 0) {
                    e.preventDefault();
                }
            },
            { passive: false }
        );

        let lastTouchTime = 0;
        const touchDelay = 100;

        document.addEventListener(
            "touchstart",
            function (e) {
                if (!isMobile()) return;
                touchStartY = e.touches[0].clientY;
                isAnimating = false;
            },
            { passive: true }
        );

        document.addEventListener(
            "touchmove",
            function (e) {
                if (!isMobile()) return;

                if (swiperDisabled) {
                    return;
                }

                const touch = e.touches[0];

                if (!isTouchOverService(touch) || !isSectionFullyCovered()) {
                    return;
                }

                if (isAnimating) {
                    e.preventDefault();
                    return;
                }

                const touchEndY = touch.clientY;
                const touchDiff = touchStartY - touchEndY;
                const scrollingDown = touchDiff > 50;
                const scrollingUp = touchDiff < -50;

                const currentTime = Date.now();

                if (scrollingDown) {
                    if (serviceSwiper.isEnd) {
                        swiperDisabled = true;
                        return;
                    }

                    if (currentTime - lastTouchTime < touchDelay) {
                        e.preventDefault();
                        return;
                    }

                    e.preventDefault();
                    isAnimating = true;
                    lastTouchTime = currentTime;

                    serviceSwiper.slideNext();
                    touchStartY = touchEndY;

                    setTimeout(() => {
                        isAnimating = false;
                    }, 600);
                }

                if (scrollingUp) {
                    if (serviceSwiper.isBeginning) {
                        return;
                    }

                    if (currentTime - lastTouchTime < touchDelay) {
                        e.preventDefault();
                        return;
                    }

                    e.preventDefault();
                    isAnimating = true;
                    lastTouchTime = currentTime;

                    serviceSwiper.slidePrev();
                    touchStartY = touchEndY;

                    setTimeout(() => {
                        isAnimating = false;
                    }, 600);
                }

                if (Math.abs(touchDiff) > 15) {
                    e.preventDefault();
                }
            },
            { passive: false }
        );

        window.addEventListener("resize", function () {
            if (!isMobile()) {
                swiperDisabled = false;
            }
            accumulatedDelta = 0;
            isAnimating = false;
        });
    });
};

export default facadeSwiper;