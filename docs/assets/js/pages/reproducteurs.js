document.querySelectorAll('[data-repro-showcase]').forEach((showcase) => {
    const panels = Array.from(showcase.querySelectorAll('[data-repro-panel]'));
    const thumbs = Array.from(showcase.querySelectorAll('[data-repro-thumb]'));
    const prevButton = showcase.querySelector('[data-repro-prev]');
    const nextButton = showcase.querySelector('[data-repro-next]');

    if (!panels.length || !thumbs.length) return;

    let currentIndex = 0;
    let startX = 0;
    let endX = 0;

    function centerActiveThumb() {
        const activeThumb = thumbs[currentIndex];
        const thumbsWrapper = activeThumb?.parentElement;

        if (!activeThumb || !thumbsWrapper) return;

        const wrapperWidth = thumbsWrapper.clientWidth;
        const thumbLeft = activeThumb.offsetLeft;
        const thumbWidth = activeThumb.clientWidth;

        const scrollTarget = thumbLeft - (wrapperWidth / 2) + (thumbWidth / 2);

        thumbsWrapper.scrollTo({
            left: scrollTarget,
            behavior: 'smooth'
        });
    }

    function showPanel(index) {
        if (index < 0) index = panels.length - 1;
        if (index >= panels.length) index = 0;

        currentIndex = index;

        panels.forEach((panel, panelIndex) => {
            panel.classList.toggle('is-active', panelIndex === currentIndex);
            panel.setAttribute('aria-hidden', panelIndex === currentIndex ? 'false' : 'true');
        });

        thumbs.forEach((thumb, thumbIndex) => {
            thumb.classList.toggle('is-active', thumbIndex === currentIndex);
            thumb.setAttribute('aria-current', thumbIndex === currentIndex ? 'true' : 'false');
        });

        centerActiveThumb();
    }

    thumbs.forEach((thumb) => {
        thumb.addEventListener('click', () => {
            const index = Number(thumb.dataset.index);
            showPanel(index);
        });
    });

    if (prevButton) {
        prevButton.addEventListener('click', () => {
            showPanel(currentIndex - 1);
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            showPanel(currentIndex + 1);
        });
    }

    showcase.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
            showPanel(currentIndex - 1);
        }

        if (event.key === 'ArrowRight') {
            showPanel(currentIndex + 1);
        }
    });

    showcase.addEventListener('touchstart', (event) => {
        startX = event.touches[0].clientX;
    }, { passive: true });

    showcase.addEventListener('touchmove', (event) => {
        endX = event.touches[0].clientX;
    }, { passive: true });

    showcase.addEventListener('touchend', () => {
        const distance = startX - endX;

        if (Math.abs(distance) < 50) return;

        if (distance > 0) {
            showPanel(currentIndex + 1);
        } else {
            showPanel(currentIndex - 1);
        }

        startX = 0;
        endX = 0;
    });

    showPanel(0);
});
