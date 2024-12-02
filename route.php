<?php
    session_start();
    include_once('controllers/AppController.php');

    if(isset($_GET['check'])) {
        $check_session = 0;
		if(!isset($_SESSION["sansang"])){
            $check_session = "";
        } else {
            if($_SESSION["sansang"] != "1"){
                $check_session = $_SESSION["sansang"];
            }
        }

        ob_start();

        switch ($_GET['check']) {
            case "_home":
                include("pages/index.php");
            break;
            default:
                include("pages/ferror.php");
            break;
        }
        echo ob_get_clean();
    }

    if(isset($_POST['for'])) {
        switch ($_POST['for']) {
            case "_isLoadListSong":
                $res = (new AppController())->ListSong();
                echo json_encode($res);
            break;
            default:
                echo "Chức năng không tồn tại";
        }
    }

    if(isset($_GET['for'])) {
        switch ($_GET['for']) {
            case "":
            break;
            default:
                echo "Chức năng không tồn tại";
            break;
        }
    }

    if(isset($_GET['page'])) {
        
        if(!isset($_SESSION["sansang"])){
                header("Location: route?check=_home");
        } else {
            if($_SESSION["sansang"] != "1"){
                header("Location: route?check=_home");
            }
        }
        
        ob_start();

        switch ($_GET['page']) {
            case "_home":
                include("pages/index.php");
            break;
            default:
                include("pages/ferror.php");
            break;
        }
        echo ob_get_clean();
    }
?>