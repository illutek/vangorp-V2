function easy_background(n,o){var e=document.createElement("div");e.innerHTML=" ",e.classList.add("easy_slider"),document.body.insertBefore(e,document.body.firstChild),o.slide.forEach(function(e,t){var n;e&&(document.querySelector(".easy_slider").innerHTML+=(n=e)?"<img src='"+n+"'>":"",void 0!==o.delay[t]&&typeof o.delay[t]&&0!=o.delay[t]||(o.delay[t]=3e3))}),document.querySelector(".easy_slider").style.display="none",document.querySelector(n).style.backgroundSize="cover",document.querySelector(n).style.backgroundRepeat="no-repeat",document.querySelector(n).style.backgroundPosition="center center",setTimeout(function(){void 0===o.transition_timing&&(o.transition_timing="ease-in"),void 0===o.transition_duration&&(o.transition_duration=500);var e="all "+o.transition_duration+"ms "+o.transition_timing;document.querySelector(n).style.WebkitTransition=e,document.querySelector(n).style.MozTransition=e,document.querySelector(n).style.MsTransition=e,document.querySelector(n).style.OTransition=e,document.querySelector(n).style.transition=e},100);var r=1,c=0;function t(){o.slide.forEach(function(e,t){1<r?(setTimeout(function(){document.querySelector(n).style.backgroundImage="url('"+e+"')"},c),c+=o.delay[t]):(r++,c=o.delay[t],document.querySelector(n).style.backgroundImage="url('"+e+"')")})}t(),setInterval(function(){t()},o.delay.length)}!function(){"use strict";var e=document.querySelector(".js-open-contact"),t=document.querySelector(".js-close-contact"),n=document.querySelector(".r-contact-overlay");e.addEventListener("click",function(){n.classList.toggle("r-contact-overlay--visible")}),t.addEventListener("click",function(){n.classList.remove("r-contact-overlay--visible")})}(),function(){"use strict";var e=document.querySelector(".cookie__alert"),t=document.querySelector(".cookie__accept");e&&(e.offsetHeight,function(e){for(var t=e+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var r=n[o];" "===r.charAt(0);)r=r.substring(1);if(0===r.indexOf(t))return r.substring(t.length,r.length)}return""}("acceptCookies")||e.classList.add("show"),t.addEventListener("click",function(){!function(e,t,n){var o=new Date;o.setTime(o.getTime()+24*n*60*60*1e3);var r="expires="+o.toUTCString();document.cookie=e+"="+t+";"+r+";path=/"}("acceptCookies",!0,365),e.classList.remove("show"),window.dispatchEvent(new Event("cookieAlertAccept"))}))}(),function(e,t,n){var o,r=e.getElementsByTagName(t)[0];e.getElementById(n)||((o=e.createElement(t)).id=n,o.src="//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.5&appId=187777724664360",r.parentNode.insertBefore(o,r))}(document,"script","facebook-jssdk"),function(){"use strict";var e=document.querySelector(".c-hamburger-btn"),t=document.querySelector(".js-close-menu"),n=document.querySelector(".r-menu-overlay");document.querySelector(".r-menu-overlay");e.addEventListener("click",function(){n.classList.toggle("r-menu-overlay--visible")}),t.addEventListener("click",function(){n.classList.remove("r-menu-overlay--visible")})}();