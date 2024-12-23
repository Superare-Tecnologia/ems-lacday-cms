export const Video = {
    init: function () {
      this.cacheSelectors();
      this.bindEvents();
    },
  
    cacheSelectors: function () {
      this.videos = document.querySelectorAll(".box-video");
      this.popupVideo = document.querySelector(".popup-video");
      this.popupClose = this.popupVideo ? this.popupVideo.querySelector(".close") : null;
    },
  
    bindEvents: function () {
      if (this.videos && this.videos.length > 0) {
        this.videos.forEach((video) => {
          const playButton = video.querySelector(".play");
          if (!playButton) return;
  
          playButton.addEventListener("click", () => this.Events.playVideo(video));
        });
      }
  
      if (this.popupClose) {
        this.popupClose.addEventListener("click", this.Events.closePopup.bind(this));
      }
    },
  
    Events: {
      playVideo: function (video) {
        const selfVideo = Video;
        const urlVideo = video.querySelector(".play").getAttribute("data-src");
        const typeVideo = video.querySelector(".play").getAttribute("data-type");
  
        if (typeVideo === "iframe") {
          const iframe = `<iframe src="${urlVideo}?autoplay=1" frameborder="0" allow="autoplay"></iframe>`;
          selfVideo.popupVideo.querySelector(".video").innerHTML = iframe;
        }
  
        if (typeVideo === "upload") {
          const htmlVideo = `
            <video width="100%" height="auto" preload="none" controls="" controlslist="nodownload">
              <source src="${urlVideo}" type="video/mp4">
            </video>`;
          selfVideo.popupVideo.querySelector(".video").innerHTML = htmlVideo;
          selfVideo.popupVideo.querySelector(".video video").play();
        }
  
        selfVideo.popupVideo.style.opacity = "1";
        selfVideo.popupVideo.classList.add("show");
  
        setTimeout(() => {
          selfVideo.popupVideo.classList.add("active");
        }, 100);
      },
  
      closePopup: function () {
        const selfVideo = Video;
        selfVideo.popupVideo.querySelector(".video").innerHTML = "";
        selfVideo.popupVideo.style.opacity = "0";
        selfVideo.popupVideo.classList.remove("active");
  
        setTimeout(() => {
          selfVideo.popupVideo.classList.remove("show");
        }, 300);
      },
    },
  };

  
  Video.init();