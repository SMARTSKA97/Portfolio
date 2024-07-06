var system = require('system');
var page = require('webpage').create();

var url = system.args[1];
var output = system.args[2];

page.open(url, function(status) {
    if (status === 'success') {
        page.viewportSize = { width: 1280, height: 720 }; // Set viewport size as needed
        page.render(output);
        phantom.exit();
    } else {
        console.log('Unable to load the URL');
        phantom.exit(1);
    }
});
