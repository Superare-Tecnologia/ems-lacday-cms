
import { Navbar } from './navbar'


const defaultScripts = {
  Navbar,
}

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
    this.video = document.querySelector(".section__video-content")
      ? document.querySelector(".section__video-content")
      : null;

    if (this.video != null) {
      this.Events.video();
    }
  },
  initScripts: function () {
    // Default initialization
    if (!this.scripts || this.scripts.length === 0) return;
    const rawScripts = [...this.scripts].map((script) =>
      script.getAttribute("data-script")
    );
    const scripts = [...new Set(rawScripts)];
    scripts.forEach((script) => {
      defaultScripts[script].init();
    });
  },
  Events: {
    video: function () {
      const self = Main;
      const elem = self.video;

      const urlVideo = elem
        .querySelector(".video-iframe")
        .getAttribute("data-src");
      const typeVideo = elem
        .querySelector(".video-iframe")
        .getAttribute("data-type");

      // Play video
      elem
        .querySelector(".section__video--play")
        .addEventListener("click", () => {
          elem.querySelector(".box-video").classList.add("active");
          elem.querySelector(".section__video--play").style.display = "none";

          if (typeVideo == "iframe") {
            let video = `<iframe src="" frameborder="0" allow="autoplay"></iframe>`;
            elem.querySelector(".video-iframe").innerHTML = video;
            elem.querySelector(
              ".video-iframe iframe"
            ).src = `${urlVideo}?autoplay=1`;
          }

          if (typeVideo == "upload") {
            let video = `
              <video width="100%" height="auto" preload="none" controls="" controlslist="nodownload">
                <source src="${urlVideo}" type="video/mp4">
              </video>`;
            elem.querySelector(".video-iframe").innerHTML = video;
            elem.querySelector(".video-iframe video").play();
          }
        });
    },
  },
};
document.addEventListener("DOMContentLoaded", function () {
  Main.init();
});
