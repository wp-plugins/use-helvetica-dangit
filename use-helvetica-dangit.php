<?php
/*
Plugin Name: Use Helvetica Dangit
Plugin URI: http://somadesign.ca/
Description: This plugin is pointless as of WP 3.2.1. The scourge or Arial has been removed. Deactivate me.
Author: Soma Design
Author URI: http://somadesign.ca/
Version: 1.0.1
Network: true
*/
/*
Copyright (c) Soma Design. http://somadesign.ca/

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

// Returning early because this plugin is useless now.
// Code below left for posterity, such as it is.
return;
add_action( 'admin_head', 'use_helvetica_dangit' );
function use_helvetica_dangit() { ?>
<style type="text/css"> body, td, textarea, input, select {
	font-family: 'Helvetica Neue', 'Helvetica Neue LT Std', 'Helvetica LT Std', Helvetica, sans-serif; } </style>
<?php
}	