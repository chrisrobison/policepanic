#!/usr/bin/php
<?php
    array_shift($argv);
    
    $cnt = 1;

    while ($file = array_shift($argv)) {
        $newname = sprintf("badguy_%02d.png", $cnt);
        ++$cnt;
        $exec = `mv $file $newname`;
        print $exec;
print $newname . "\n";
    }
?>
