$(document).ready(function () {
	counting();
	showImage(slideIndex);
	autoSlide();
});


var slideIndex = 1;

function plusIndex(n) {
	showImage(slideIndex += n);
}

function currentSlide(n) {
	showImage(slideIndex = n);
}

function showImage(n) {
	var slide = document.getElementsByClassName("slides");
	var dots = document.getElementsByClassName("dot");

	if (n > slide.length) { slideIndex = 1 };
	if (n < 1) { slideIndex = slide.length };

	for (var i = 0; i < slide.length; i++) {
		slide[i].style.display = "none";
	}

	slide[slideIndex - 1].style.display = "block";

	for (var i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}

	dots[slideIndex - 1].className += " active";
}

function autoSlide() {
	var slide = document.getElementsByClassName("slides");
	var dots = document.getElementsByClassName("dot");

	for (var i = 0; i < slide.length; i++) {
		slide[i].style.display = "none";
	}

	if (slideIndex > slide.length) { slideIndex = 1 }
	slide[slideIndex - 1].style.display = "block";

	for (var i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}

	dots[slideIndex - 1].className += " active";
	slideIndex++;
	setTimeout(autoSlide, 5000);
}


jQuery(function ($) {
	//restart scroll
	$.scrollTo(0);
	$('.scrollup').click(function () { $.scrollTo($('body'), 1000); });
}
);

//pokaż podczas przewijania
$(window).scroll(function () {
	if ($(this).scrollTop() > 100) $(".scrollup").fadeIn("slow");
	else $('.scrollup').fadeOut("slow");
}
);

//powiekszanie obrazka

$('[data-fancybox="preview"]').fancybox({
  thumbs : {
    autoStart : true
  }
}
);

//czas i data

function counting() {
	var today = new Date();

	var day = today.getDate();
	var month = today.getMonth() + 1;
	var year = today.getFullYear();

	var hour = today.getHours();
	if (hour < 10) hour = "0" + hour;

	var minute = today.getMinutes();
	if (minute < 10) minute = "0" + minute;

	var second = today.getSeconds();
	if (second < 10) second = "0" + second;

	document.getElementById("time").innerHTML =
		day + "." + month + "." + year + " | " + hour + ":" + minute + ":" + second;


	setTimeout("counting()", 1000);
}

