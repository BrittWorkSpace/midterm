<?php


function checkIfEmpty($variable)
{
    if($variable != ""){
        return "";//
    } else {
        return "Name can not be blank";
    }
}

function checkArrayEmpty($array)
{
    if(!isset($array)){
        return "Must select at least one checkbox";
    }
    return "";
}

/**
 * Checks an error array has no set values if so no errors exist
 * @param $data error array
 * @return bool true:no errors, false:errors exist
 */
function checkErrArray($data)
{
    foreach ($data as $key => $value) {
        if($value!="") {
            return false;
        }
    }
    return true;
}

?>