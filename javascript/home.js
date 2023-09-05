let video = document.getElementById("banner-video");

window.addEventListener("resize", function() {
  resizeVideo();
});

function resizeVideo() {
  let videoRatio = video.videoWidth / video.videoHeight;
  let windowRatio = window.innerWidth / window.innerHeight;

  if (windowRatio < videoRatio) {
    // window is narrower
    video.style.width = "100%";
    video.style.height = "auto";
  } else {
    // video is narrower
    video.style.width = "auto";
    video.style.height = "100%";
  }
}

resizeVideo(); // call the function once on page load