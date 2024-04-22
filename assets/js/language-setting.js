window.onload = function() {
  var language;

	if (navigator.browserLanguage != null) {
		// Internet Explorer, Opera, 他
		language = navigator.browserLanguage.substr(0, 2);
	} else if(navigator.userLanguage != null) {
		// Internet Explorerの場合
		language = navigator.userLanguage.substr(0, 2);
	} else if(navigator.language != null) {
		// Chrome, Firefox, Opera, 他
		language = navigator.language.substr(0, 2);
	} else {
		// その他
		language = "en";
	}
	var language = (window.navigator.userLanguage || window.navigator.language || window.navigator.browserLanguage).substr(0,2) == "ja" ? "ja" : "en";
	setLanguage(language);
}

function setLanguage(language) {
	var element = document.getElementsByClassName("langageClass");
	for (var i = 0; i < element.length; i++) {
		if(element[i].getAttribute("lang") == language) {
			element[i].style.display = "";
		} else{
			element[i].style.display = "none";
		}
	}
}
