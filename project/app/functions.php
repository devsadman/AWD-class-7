<?php
/**
 * Msg show
 */
function msgShow($msg,$type='danger'){
    return "<p class=\"alert alert-{$type}\">{$msg} <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}

/**
 * email check
 */
function emailCheck($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    } else{
        return false;
    }
}
/**
 * Ins E-mail
 */
function insEmail($email,array $mails){
    $array_mail=explode('@',$email);
    $last=end($array_mail);
    if(in_array($last,$mails)){
        return true;
    }else{
        return false;
    }
}

/**
 * old value check
 */
function old($name){
    if(isset($_POST[$name])){
        return $_POST[$name];
    }else{
        return "";
    }
}

/**
 * clear function
 */
function formClear(){
    echo $_POST='';
}
/**
 * phone no check
 */
function cellCheck($cell){
    if(substr($cell,0,2)=='01'||substr($cell,0,4)=='+880'||substr($cell,0,3)=='880'){
        return true;
    }else {
        return false;
    }
}

function ageCheck($age){
    if($age>=21 && $age<=30){
        return true;
    }else{
        return false;
    }
}
?>