const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');
        const close = document.querySelector('#close');

        burger.addEventListener('click', () => {
            menu.classList.remove('hidden');
            menu.classList.remove('slide-exit');
            menu.classList.add('slide-enter');
        });

        close.addEventListener('click', () => {
            menu.classList.remove('slide-enter');
            menu.classList.add('slide-exit');
        });
    