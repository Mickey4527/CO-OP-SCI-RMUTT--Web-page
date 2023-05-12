window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header-navbar").style.fontSize = "14px";
    document.getElementById("header-logo").style.width = "80px";
	 document.getElementById("header-logo").style.height = "45px";
  } else {
    document.getElementById("header-navbar").style.fontSize = "16px";
	 document.getElementById("header-logo").style.width = "120px";
	 document.getElementById("header-logo").style.height = "70px";
  }
}