var page = require('webpage').create();
page.clipRect = { top: 0, left: 0, width: 450, height: 250 };
page.open('http://192.241.148.248/imggen/index.php/imggen/TestInput', function () {
<<<<<<< HEAD
    page.render('../../image_captures/test2.png');
=======
    page.render('../../image_captures/Test4.png');
>>>>>>> 84cda492087a7c6cc2359648871a219841347896
    phantom.exit();
});
