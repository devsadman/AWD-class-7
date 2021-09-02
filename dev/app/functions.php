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
 * file upload
 * 
 */
function move($files,$path='/') {
    
    $file_name=time().'_'.rand().'_'.$files['name'];
    $file_tmp=$files['tmp_name'];
    $file_size=$files['size'];
    move_uploaded_file($file_tmp,$path.$file_name);
    return $file_name;
}

?>