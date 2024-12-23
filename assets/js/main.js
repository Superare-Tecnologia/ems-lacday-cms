import { Navbar } from './navbar';
import { Video } from './video';

const defaultScripts = {
  Navbar,
  Video,
};

const Main = {
  init: function () {
    this.collectScripts();
    this.cacheSelectors();
    this.initScripts();
  },
  collectScripts: function () {
    this.scripts = document.querySelectorAll("[data-script]");
  },
  cacheSelectors: function () {
  },
  initScripts: function () {
    if (!this.scripts || this.scripts.length === 0) return;
    const rawScripts = [...this.scripts].map((script) =>
      script.getAttribute("data-script")
    );
    const scripts = [...new Set(rawScripts)];
    scripts.forEach((script) => {
      defaultScripts[script].init();
    });
  },
};

document.addEventListener("DOMContentLoaded", function () {
  Main.init();
});
