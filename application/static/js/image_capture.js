var page = require('webpage').create();
page.clipRect = { top: 0, left: 0, width: 450, height: 250 };
page.open('http://192.241.148.248/imggen/index.php/imggen/TestInput', function () {
    page.render('../../image_captures/Test3.png');
    phantom.exit();
});
