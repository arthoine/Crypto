<?php
$output=null;
$retval=null;
exec('php symfony/bin/console app:create', $output, $retval);
echo "Returned with status $retval and output:\n";
echo 'php bin/console app:create';
print_r($output);
?>

