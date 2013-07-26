var page = require('webpage').create(),
	system = require('system');

if (system.args.length === 1) {
	console.log('Pass arg when invoking script');
	phantom.exit();
}
else{
	title = system.args[1];
	console.log(title);

	page.open('http://192.241.148.248/imggen/index.php/imggen/'+title, function ( status ) {
		if (status !== 'success') {
	        console.log('Unable to load the address!');
	        phantom.exit();
    } else {
	        window.setTimeout(function () {
	        	page.clipRect = { top: 0, left: 0, width: 450, height: 250 };
		        page.render("../../image_captures/"+title+".png");
		        phantom.exit();
	        }, 200);
    	}
	});
}