document.addEventListener("DOMContentLoaded",function(){let e=document.querySelectorAll(".mil-section"),t=document.querySelectorAll(".mil-dot"),i=0,n=!1;function l(e){var i;n=!0,window.scrollTo({top:e*window.innerHeight,behavior:"smooth"}),i=e,t.forEach(e=>e.classList.remove("mil-active")),t[i].classList.add("mil-active"),o(e)}function o(t){e.forEach((e,i)=>{i===t?e.classList.add("mil-active"):e.classList.remove("mil-active")})}t.forEach((e,t)=>{e.addEventListener("click",function(){n||(l(i=t),setTimeout(function(){n=!1},1200))})}),window.addEventListener("wheel",function t(o){window.innerWidth>=1200&&!n&&(o.preventDefault(),o.deltaY>0&&i<e.length-1?i++:o.deltaY<0&&i>0&&i--,l(i),setTimeout(function(){n=!1},1200))},{passive:!1}),setTimeout(function(){window.scrollTo(0,0),o(i)},100)});