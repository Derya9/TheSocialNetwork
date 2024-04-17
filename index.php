<?php

require_once ("./logic/functions.php");
require_once ("./data/constants.php");

$personsOlderThanThirty = getOlderPersons($persons, 30);

print_r($personsOlderThanThirty);