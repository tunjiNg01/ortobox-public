<?php
function set_title($title){
    $title = ucwords( str_replace('-', ' ', $title) );
    return $title;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php
    ob_start();
    if ( isset($_GET['module']) && isset($_GET['p']) ) {
        echo set_title($_GET['module']).' - '.set_title($_GET['p']);
    }elseif ( isset($_GET['module']) ) {
        echo set_title($_GET['module']);
    }else{
        echo 'Ortor Box';
    }
    ob_flush();
    ?>
    </title>
<?php include 'header.php'; ?>
            <?php
            if( isset($_GET['module']) ){
                switch ($_GET['module']) {
                    case 'dashboard':
                        $template = 'dashboard.php';
                        break;
                    case 'projects':
                        $template = 'projects.php';
                        break;
                    case 'procurement':
                        $template = 'procurement.php';
                        break;
                    case 'sourcing':
                        $template = 'sourcing.php';
                        break;
                    case 'hr':
                             $template = 'human-resource.php';
                             break;
                    default:
                        $template = 'dashboard.php';
                        break;
                }
            }else{
                $template = 'dashboard.php';
            }
include $template;
include 'footer.php'; ?>
