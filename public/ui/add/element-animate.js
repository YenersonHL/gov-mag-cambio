function elementAnimate() {
    const elViewport = document.getElementById('viewportObserver');

    const obs = elViewport.querySelectorAll('[data-animate]');

    const action = (entrances, observer) => {
        entrances.forEach((entrance) => {
            if (entrance.isIntersecting) {
                const el = entrance.target;
                const data = el.dataset.animate;
                el.classList.add(data);
            }
        });
    };

    const myObserver = new IntersectionObserver(action, {
        root: null,
        rootMargin: '0px 0px -10% 0px',
        threshold: 0.5,
    });

    obs.forEach((element) => {
        myObserver.observe(element);
    });

}