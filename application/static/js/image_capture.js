var page = require('webpage').create();
page.open('http://192.241.148.248/imggen/index.php/imggen/TestInput', function () {
	var title = page.evaluate(function() {
		return document.title;
	});
	page.clipRect = { top: 0, left: 0, width: 450, height: 250 };
    page.render("../../image_captures/"+title+".png");
    phantom.exit();
});
