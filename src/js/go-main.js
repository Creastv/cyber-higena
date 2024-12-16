
// HEader fixed

const togglerNav = document.querySelector(".js-navbar__toggler");
const nav = document.querySelector(".js-navbar__navigation");
let navFlag = false;

togglerNav.addEventListener("click", () => {
  if (navFlag == false) {
    nav.classList.add("active");
    togglerNav.classList.add("active");
    // document.querySelector("body").style.overflow = "hidden";
    navFlag = true;
  } else {
    nav.classList.remove("active");
    togglerNav.classList.remove("active");
    // document.querySelector("body").style.overflow = "inherit";
    navFlag = false;
  }
});

// sticy nabvbar
document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.querySelector(".js-header");
  const body = document.body;
  let navbarOffsetTop = navbar.offsetTop;

  function onScroll() {
    if (window.pageYOffset >= navbarOffsetTop) {
      navbar.classList.add("fixed");
      body.style.paddingTop = navbarOffsetTop + "px";

    } else {
      navbar.classList.remove("fixed");
      body.style.paddingTop = "0px";
    }
  }

  function onResize() {
    navbarOffsetTop = navbar.offsetTop;
    onScroll(); 
  }

  window.addEventListener("scroll", onScroll);
  window.addEventListener("resize", onResize);
});


  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });

setTimeout(
 function() {
    //get the images
    let images = document.querySelectorAll("img"); 
     
    //loop through all images
    for (let i = 0; i < images.length; i++) {
        //add alt text if missing (but title is present)
        if (!images[i].alt) {
            images[i].alt = 'test';
		 images[i].setAttribute('alt', 'Aktywna Szkoła');
        }
    }
}, 1000);

