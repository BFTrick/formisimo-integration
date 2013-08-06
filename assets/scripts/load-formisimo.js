// this script loads the formisimo script

// we put this JS in it's own file so the form id variable `foid_` can be sent via PHP
// it should look something like this: `var foid_ = "123456789"`;
var fo = document.createElement('script'); fo.type = 'text/javascript';
fo.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'f.formisimo.com/tk.js';
var fs = document.getElementsByTagName('script')[0]; fs.parentNode.insertBefore(fo, fs);