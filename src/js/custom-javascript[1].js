// Add your JS customizations here
const footer = document.querySelector("footer.site-footer::before"),
      top = document.querySelector(".home-hero::after"),
      curWidth = getWidth();

function getWidth(){
  return window.innerWidth;
}

if(curWidth > 1920){
  footer.style.borderLeftWidth = curWidth;
  top.style.borderLeftWidth = curWidth;
}
