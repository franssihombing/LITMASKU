var myNav = document.getElementById("nav");
var elements = document.querySelectorAll('li a');

window.onscroll = function() {
  "use strict";
  if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200) {
        document.getElementById("nav").style.background="#fff";
        document.getElementById("nav").style.boxShadow="rgb(130 130 130) 1px 1px 20px 0";
        elements.forEach(el => el.style.color = '#0f0f0f');
        document.getElementById("logolitmas").src="/assets/img/logo_dark.png";
        document.getElementById("search").src="/assets/img/search_dark.png";

  } else {
        document.getElementById("nav").style.background="transparent";
        document.getElementById("nav").style.boxShadow="none";
        elements.forEach(el => el.style.color = '#fff');
        document.getElementById("logolitmas").src="/assets/img/logo_light.png";
        document.getElementById("search").src="/assets/img/search_light.png";
  }
};
