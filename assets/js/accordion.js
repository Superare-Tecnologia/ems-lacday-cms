export const Accordions = {
    init: function () {
        this.cacheSelectors();
        this.bindEvents();
    },

    cacheSelectors: function () {
        this.accordions = document.querySelectorAll('.duvidas__accordion');
    },

    bindEvents: function () {
        this.accordions.forEach((accordion, index) => {
            accordion.addEventListener('click', () => this.Events.handlerAccordion(index));
        });
    },

    Events: {
        handlerAccordion: function (index) {
            let self = Accordions;
            let panel = self.accordions[index].nextElementSibling;

            self.accordions.forEach((accordion, i) => {
                if (i !== index) {
                    accordion.classList.remove('active');
                    accordion.nextElementSibling.style.maxHeight = null;
                }
            });

            self.accordions[index].classList.toggle('active');

            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + 'px';
            }
        }
    }
};

Accordions.init();
