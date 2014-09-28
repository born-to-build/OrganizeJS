<?php 
require_once('../OrganizeJS.php');

use OrganizeJS\Javascript;

Javascript::init([
	'basePath'	=> 'js/',
	'cache'		=> false,
	'minify'	=> true
]);

Javascript::serve();//server on the same page


$js = Javascript::organize('homepage', [
	'foobar',
], '2.9');

$js->add('hello')->add('bar/joo');

$js->vars([
	'message'	=> date('Y-m-d H:i:s'),
	'success'	=> 'yes',
	'foo'		=> 'bar'
]);

?>
<script src="<?php echo $js->build() ?>" type="text/javascript"></script>
