var i = 0;
var images = [];
var time = 1000;

images[0] = '/assets/svg/task-angels-icon.svg'
images[1] = '/assets/svg/task-angels-logo.svg'
images[2] = '/assets/img/other-work/task-angels-business-card.jpg'

function changeImg() {
  document.slide.src = images[i];

  if(i < images.length - 1) {
    i++;
  } else {
    i = 0
  }

  setTimeout("changeImg()", time);
}

window.onload = changeImg;