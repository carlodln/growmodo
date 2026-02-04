document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.property-swiper', {
        loop: false,
        spaceBetween: 20,
        slidesPerView: 1,
        watchOverflow: false,
        pagination: {
            el: '.swiper-pagination',
            type: 'custom',
            renderCustom: function (swiper, current, total) {
                const totalItems = swiper.slides.length;
                const visibleItems = Math.min(swiper.params.slidesPerView, totalItems);

                let startItem = (current - 1) * swiper.params.slidesPerView + 1;
                let endItem = startItem + visibleItems - 1;
                if (endItem > totalItems) endItem = totalItems;


                endItem = endItem.toString().padStart(2, '0');
                const totalItemsPadded = totalItems.toString().padStart(2, '0');

                return `<span class="current">${endItem}</span> / <span class="total${endItem == totalItemsPadded ? ' last' : ''}">${totalItemsPadded}</span>`;
            }
        },
        navigation: {
            nextEl: '.custom-swiper-nav.next',
            prevEl: '.custom-swiper-nav.prev'
        },
        breakpoints: {
            856: {
                slidesPerView: 2
            },
            1441: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        }
    });
});