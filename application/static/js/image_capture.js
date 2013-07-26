var page = require('webpage').create();
page.clipRect = { top: 0, left: 0, width: 450, height: 250 };
page.open('http://192.241.148.248/imggen/index.php/imggen/TestInput', function () {
<<<<<<< HEAD
	var title = page.evaluate(function() {
		return document.title;
	});
    page.render("../../image_captures/"+title+".png");
=======
    page.render('../../image_captures/Test3.png');
>>>>>>> 5a6cd5d6cf36073cfb66f6fe07469616b1775d03
    phantom.exit();
});
