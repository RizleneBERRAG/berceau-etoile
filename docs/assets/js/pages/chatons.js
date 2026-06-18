document.querySelectorAll('[data-mobile-carousel]').forEach((carousel) => {
    const track = carousel.querySelector('.mobile-carousel__track');
    const prevButton = carousel.querySelector('.mobile-carousel__arrow--prev');
    const nextButton = carousel.querySelector('.mobile-carousel__arrow--next');
    const dotsWrapper = carousel.querySelector('.mobile-carousel__dots');

    if (!track || !prevButton || !nextButton || !dotsWrapper) return;

    const items = Array.from(track.children);

    if (items.length <= 1) {
        prevButton.style.display = 'none';
        nextButton.style.display = 'none';
        dotsWrapper.style.display = 'none';
        return;
    }

    let currentIndex = 0;

    const dots = items.map((_, index) => {
        const dot = document.createElement('button');

        dot.type = 'button';
        dot.className = 'mobile-carousel__dot';
        dot.setAttribute('aria-label', `Aller à l’élément ${index + 1}`);

        dot.addEventListener('click', () => {
            scrollToItem(index);
        });

        dotsWrapper.appendChild(dot);

        return dot;
    });

    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('is-active', index === currentIndex);
        });
    }

    function getClosestIndex() {
        const trackCenter = track.scrollLeft + track.clientWidth / 2;

        let closestIndex = 0;
        let closestDistance = Infinity;

        items.forEach((item, index) => {
            const itemCenter = item.offsetLeft + item.clientWidth / 2;
            const distance = Math.abs(trackCenter - itemCenter);

            if (distance < closestDistance) {
                closestDistance = distance;
                closestIndex = index;
            }
        });

        return closestIndex;
    }

    function scrollToItem(index) {
        if (index < 0) index = items.length - 1;
        if (index >= items.length) index = 0;

        currentIndex = index;

        const item = items[currentIndex];
        const scrollLeft = item.offsetLeft - (track.clientWidth - item.clientWidth) / 2;

        track.scrollTo({
            left: scrollLeft,
            behavior: 'smooth'
        });

        updateDots();
    }

    prevButton.addEventListener('click', () => {
        scrollToItem(currentIndex - 1);
    });

    nextButton.addEventListener('click', () => {
        scrollToItem(currentIndex + 1);
    });

    let scrollTimeout;

    track.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);

        scrollTimeout = setTimeout(() => {
            currentIndex = getClosestIndex();
            updateDots();
        }, 80);
    });

    window.addEventListener('resize', () => {
        scrollToItem(currentIndex);
    });

    updateDots();
});
