<?php


function getOlderPersons($persons, $ageLimit) 
{ 
    $olderPersons = [];
    foreach($persons as $person) 
    {
        $personAge = $person->getAge();
        if($personAge > $ageLimit) 
        {
            $olderPersons[] = $person;
        }
    }
    return $olderPersons;

}