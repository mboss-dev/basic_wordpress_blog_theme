function openSearch(){
  document.getElementById("searchopcl").style.display = "block";
}
function closeSearch(){
  document.getElementById("searchopcl").style.display = "none";
}


function mediaQuery() {
  if (mq.matches) {
    btn.style.display = "block";
  }else {
    btn.style.display = "none";
    x.style.display = "none";
  }
}

function mobileMenu(){
  if(x.style.display === "block"){
    x.style.display = "none";
  }else {
    x.style.display = "block";
  }
}

var x = document.getElementById("mbmenu");
var btn = document.getElementById("menu-toggle");
var mq = window.matchMedia("(max-width:841px)");

mediaQuery(mq)
mq.addListener(mediaQuery)


