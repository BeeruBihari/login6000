<?php
ini_set("memory_limit", "1024M");
ini_set('max_execution_time', '300');
/* ini_set('display_errors', '1');
  ini_set('log_errors', '1');
  error_reporting(E_ALL); */

error_reporting(0);

function createDir($dirName) {

    if (!empty($dirName)) {
        $UpDir = FAPathupload . "/";
        if (!is_dir($UpDir)) {
            mkdir($UpDir); //create the directory
            chmod($UpDir, 0777); //make it writable
        }
        $cacheDir = FAPathupload . "/cache";
        if (!is_dir($cacheDir)) {
            mkdir($cacheDir); //create the directory
            chmod($cacheDir, 0777); //make it writable
        }

        $path = FAPathupload . "/" . $dirName . "/";
        if (!is_dir($path)) {
            mkdir($path, 0777);
            chmod($path, 0777);
        }
    }
}

function closest_value($arrNums, $lookFor) {
    $distances = array();

    foreach ($arrNums as $key => $num) {
        $distances [$key] = abs($lookFor - $num);
    }

    return $arrNums [array_search(min($distances), $distances)];
}

function Sendmessage($mobile_member, $message) {
    $to = $mobile_member;

    $message = urlencode($message);

$response= file_get_contents('http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobile_member . '&message=' . $message . '&sender=gorsys&route=B');

//     $ch = curl_init('http://sms.bulksmsserviceproviders.com/api/send_http.php?username=gorsys&password=9610003839&mobiles=' . $mobile_member . '&message=' . $message . '&sender=gorsys&route=B');
//  //exit('http://103.231.43.248:8181/API/WebSMS/Http/v1.0a/index.php?username=1armora&password=armora@1&sender=armora&to=903371118,9825236260&message=' . $message . '&reqid=1&format={json|text}&route_id=TRANS&23');

//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//     $response = curl_exec($ch);

//     curl_close($ch);



    // Process your response here
     echo $response;



    // Process your response here
    
}


function flash( $name = '', $message = '', $class )
{
    //We can only do something if the name isn't empty
    if( !empty( $name ) )
    {
        //No message, create it
        if( !empty( $message ) && empty( $_SESSION[$name] ) )
        {
            if( !empty( $_SESSION[$name] ) )
            {
                unset( $_SESSION[$name] );
            }
            if( !empty( $_SESSION[$name.'_class'] ) )
            {
                unset( $_SESSION[$name.'_class'] );
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        }
        //Message exists, display it
        elseif( !empty( $_SESSION[$name] ) && empty( $message ) )
        {
            $class = !empty( $_SESSION[$name.'_class'] ) ? $_SESSION[$name.'_class'] : 'success';
            echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}



function UploadFileSingle($Files, $DestPath, $extra = '') {

    $FileName = '';
    $Lastpos = strrpos($Files ['name'], '.');

    $FileExtension = strtolower(substr($Files['name'], $Lastpos, strlen($Files['name'])));

    $ValidExtensionArr = array(".jpg", ".jpeg", ".png", ".gif", ".ods", ".xls");

    if (in_array(strtolower($FileExtension), $ValidExtensionArr)) {

        if (!empty($extra)) {
            $FileName = time() . "_" . $extra . $FileExtension;
        } else {
            $FileName = time() . $FileExtension;
        } if (move_uploaded_file($Files ['tmp_name'], $DestPath . $FileName)) {
            return $FileName;
        } else {


            return false;
        }
    } else {
        return false;
    }
}

/* * ****************************************** */

// FUNCTION TO GET FILE TYPE/EXTENSION -------
/* * ****************************************** */
function GetContentType($file_extension) {
    switch (strtolower($file_extension)) {

        case "pdf": $ctype = "PDF";
            break;
        case "sql": $ctype = "SQL";
            break;
        case "exe": $ctype = "EXE";
            break;
        case "zip": $ctype = "ZIP";
            break;
        case "doc":
        case "odt":
        case "docx":$ctype = "WORD";
            break;
        case "xlsx":
        case "xls":$ctype = "EXCEL";
            break;
        case "ppt": $ctype = "POWER POINT";
            break;
        case "gif": $ctype = "IMAGE/GIF";
            break;
        case "png": $ctype = "IMAGE/PNG";
            break;
        case "jpeg":
        case "jpg": $ctype = "IMAGE/JPG";
            break;
        case "mp3": $ctype = "AUDIO/MPEG";
            break;
        case "wav": $ctype = "AUDIO/X-WAV";
            break;
        case "mpeg":
        case "mpg":
        case "mpe": $ctype = "VIDEO/MPEG";
            break;
        case "mov": $ctype = "VIDEO/QUICKTIME";
            break;
        case "avi": $ctype = "VIDEO/X-MSVIDEO";
            break;
        case "php": $ctype = "PHP";
            break;
        case "htm":
        case "html": $ctype = "HTML";
            break;
        case "txt": $ctype = "TEXT";
            break;
        default: $ctype = "UNKNOWN";
    }
    return $ctype;
}

function day_format($date) {
    if ($date != "") {
        $format = explode(" ", $date);

        if ($format)
            $format = $format[0];

        list($year, $month, $day) = explode("-", $format);
        $day = date("M d, Y", mktime(0, 0, 0, $month, $day, $year));
    }

    return $day;
}

// FUNCTION TO UPLOAD FILE OF SPECIFIED EXT. ---
function UploadFile($Files, $DestPath, $extra = '') {
    $FileName = '';
    $Lastpos = strrpos($Files['name'], '.');
    $FileExtension = strtolower(substr($Files['name'], $Lastpos, strlen($Files['name'])));
    $ValidExtensionArr = array(".jpg", ".jpeg", ".png", ".gif");

    if (in_array(strtolower($FileExtension), $ValidExtensionArr)) {
        if (!empty($extra)) {
            $FileName = time() . "_" . $extra . $FileExtension;
        } else {
            $FileName = time() . $FileExtension;
        }
        if (move_uploaded_file($Files['tmp_name'], $DestPath . $FileName)) {
            return $FileName;
        } else
            return false;
    } else {
        return false;
    }
}


function UploadFile_adhaar($Files, $DestPath, $extra = '') {
    $FileName = '';
    $Lastpos = strrpos($Files['name'], '.');
    $FileExtension = strtolower(substr($Files['name'], $Lastpos, strlen($Files['name'])));
    $ValidExtensionArr = array(".jpg", ".jpeg", ".png", ".gif");

    if (in_array(strtolower($FileExtension), $ValidExtensionArr)) {
        if (!empty($extra)) {
            $FileName = 'adhaar_'.time() . "_" . $extra . $FileExtension;
        } else {
            $FileName = 'adhaar_'.time() . $FileExtension;
        }

        $info = getimagesize($Files['tmp_name']);
        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($Files['tmp_name']);

        elseif ($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($Files['tmp_name']);

        elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($Files['tmp_name']);




        if (imagejpeg($image, $DestPath . $FileName, 10)) {
            return $FileName;
        } else
            return false;
    } else {
        return false;
    }
}

function UploadFile_pan($Files, $DestPath, $extra = '') {
    $FileName = '';
    $Lastpos = strrpos($Files['name'], '.');
    $FileExtension = strtolower(substr($Files['name'], $Lastpos, strlen($Files['name'])));
    $ValidExtensionArr = array(".jpg", ".jpeg", ".png", ".gif");

    if (in_array(strtolower($FileExtension), $ValidExtensionArr)) {
        if (!empty($extra)) {
            $FileName = 'pan_'.time() . "_" . $extra . $FileExtension;
        } else {
            $FileName = 'pan_'.time() . $FileExtension;
        }

        $info = getimagesize($Files['tmp_name']);
        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($Files['tmp_name']);

        elseif ($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($Files['tmp_name']);

        elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($Files['tmp_name']);




        if (imagejpeg($image, $DestPath . $FileName, 10)) {
            return $FileName;
        } else
            return false;
    } else {
        return false;
    }
}



function clearInput($val, $Default = "") {
    if (!empty($val)) {
        $tmp = trim($val);
        if (function_exists('mysql_real_escape_string')) {
            $tmp = mysql_real_escape_string($tmp);
        } elseif (function_exists('mysql_escape_string')) {
            $tmp = mysql_escape_string($tmp);
        } else {
            $tmp = addslashes($tmp);
        }
        return $tmp;
    } else {
        return NULL;
    }
}

function showMessageClient() {
    $msg = "";
    if (isset($_SESSION['success_msg_client']) && !empty($_SESSION['success_msg_client'])) {
        $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                      ' . $_SESSION['success_msg_client'] . '

                </div>';
        unset($_SESSION['success_msg_client']);
    } elseif (isset($_SESSION['error_msg_client']) && !empty($_SESSION['error_msg_client'])) {
        $msg = ' <div class="alert alert-error">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>

                    ' . $_SESSION['error_msg_client'] . '
                 </div>';
        unset($_SESSION['error_msg_client']);
    }
    echo $msg;
}

function showMessage($id) {
    $msg = "";
    if (isset($_SESSION['success_msg']) && !empty($_SESSION['success_msg']) && $_SESSION['']) {
        $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                      ' . $_SESSION['success_msg'] . '
                </div>';
        unset($_SESSION['success_msg']);
    } elseif (isset($_SESSION['error_msg']) && !empty($_SESSION['error_msg'])) {
        $msg = ' <div class="alert alert-error">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                    ' . $_SESSION['error_msg'] . '
                 </div>';
        unset($_SESSION['error_msg']);
    }
    echo $msg;
}

function showMessage1() {
    $msg = "";
}

/*
 * @is_empty = function to check if variable is empty or not
 * @value = value to be checked
 * 
 * @return = true if value is empty, false otherwise
 */

function is_empty($value) {
    if (is_array($value)) {
        if (sizeof($value) > 0) {
            return false;
        } else {
            return true;
        }
    } else {
        if (($value != '') && (strtolower($value) != 'null') && (strlen(trim($value)) > 0) && !empty($value)) {
            return false;
        } else {
            return true;
        }
    }
}

function ImageResize($Path, $Width, $Hight, $crop_image = TRUE, $uploadsPath) {
//    $zc = ($crop_image == FALSE) ? 1 : 0;
    $zc = 0;
    if (!is_empty($Path)) {
        $as_images = explode("/", $Path);
        $ImageExtension = strstr(end($as_images), '.');

        if (!is_empty($ImageExtension)) {
            if (file_exists($uploadsPath)) {
                $image_path = HTTP_SERVER . 'helper/resize.php?img=' . $Path . '&amp;width=' . $Width . '&amp;h=' . $Hight . '&zc=' . $zc;
            } else {
                $image_path = HTTP_SERVER . 'helper/resize.php?img=' . HTTP_SERVER . 'helper/no_image.jpg' . '&amp;width=' . $Width . '&amp;h=' . $Hight . '&zc=' . $zc;
            }
        } else {
            $image_path = HTTP_SERVER . 'helper/resize.php?img=' . HTTP_SERVER . 'helper/no_image.jpg' . '&amp;width=' . $Width . '&amp;h=' . $Hight . '&zc=' . $zc;
        }
    } else {
        $image_path = HTTP_SERVER . 'helper/resize.php?img=' . HTTP_SERVER . 'helper/no_image.jpg' . '&amp;width=' . $Width . '&amp;h=' . $Hight . '&zc=' . $zc;
    }
    return $image_path;
}

function FileSizeConvert($bytes) {
    $bytes = floatval($bytes);

    $arBytes = array(
        0 => array(
            "UNIT" => "TB",
            "VALUE" => pow(1024, 4)
        ),
        1 => array(
            "UNIT" => "GB",
            "VALUE" => pow(1024, 3)
        ),
        2 => array(
            "UNIT" => "MB",
            "VALUE" => pow(1024, 2)
        ),
        3 => array(
            "UNIT" => "KB",
            "VALUE" => 1024
        ),
        4 => array(
            "UNIT" => "B",
            "VALUE" => 1
        ),
    );



    foreach ($arBytes as $arItem) {
        if ($bytes >= $arItem["VALUE"]) {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", ",", strval(round($result, 2))) . " " . $arItem["UNIT"];
            break;
        }
    }
    return $result;
}

function formatSizeUnits($bytes) {
    if ($bytes >= 1073741824) {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        $bytes = $bytes . ' bytes';
    } elseif ($bytes == 1) {
        $bytes = $bytes . ' byte';
    } else {
        $bytes = '0 bytes';
    }

    return $bytes;
}

// when record is not found in admin side that time use below function
function AddNewRecordText($link, $name) {
    if (!is_empty($link) && !is_empty($name)) {
        return '<div>Click <a title="' . $name . '" href="' . $link . '">here</a> to add new ' . strtolower($name) . '.</div>';
    }
    return false;
}
?>
