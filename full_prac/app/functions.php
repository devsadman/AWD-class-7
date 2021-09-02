<?php
/**
 * error msg
 */
function errorMsg($msg,$type='danger'){
    return "<p class=\"alert alert-{$type}\">{$msg} <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}

/**
 * email check
 */
function emailCheck($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    }
}
/**
 * ins email check
 */
function insEmail($email, array $mails){
    $array_email=explode('@',$email);
    $last=end($array_email);
    if(in_array($last,$mails)){
        return true;
    }else {
        return false;
    }
}

/**
 * age validation
 */
function age($age){
    if ($age>=18 && $age<=30){
        return true;
    } else{
        return false;
    }
}

/**
 * cell validation
 */
function cellValidation($cell){
    if(substr($cell,0,4)=='+880'||substr($cell,0,3)=='880'||substr($cell,0,2)=='01'){
        return true;
    }else{
        return false;
    }
}
/**
 * old value store
 */
function old($name){
    if(isset($_POST[$name])){
        return "$_POST[$name]";
    }else{
        return "";
    }
}
?>