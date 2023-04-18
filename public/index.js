
        const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');

        burger.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
        const isClickInsideMenu = menu.contains(event.target);
        const isClickOnBurger = event.target.closest('#burger');

        if (!isClickInsideMenu && !isClickOnBurger) {
            menu.classList.add('hidden');
        }
        });
    