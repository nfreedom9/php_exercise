<?php
$patterns = array('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/', '/^\s*{(\w+)}\s*=/');
$replace = array('\3/\4/\1\2', '$\1 =');
// $startDate = 5/27/1999

echo var_dump($patterns);
echo var_dump($replace);

echo preg_replace($patterns, $replace, '{startDate} = 1999-5-27');

echo "<br />";

echo preg_replace(
	array('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/', '/^\s*{(\w+)}\s*=/'),
	array('$3/$4/$1$2', '$$1 = '),
	'{startDate} = 1999-5-27'
);

echo "<br />";

echo preg_replace(
	array( '/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/', '/^\s*{(\w+)}\s*=/' ),
	array( '\$1: $1 / \$2: $2 / \$3: $3 - \$4: $4', '\$1: $1 ////// '),
	'{startDate} = 1999-5-27'
);

?>