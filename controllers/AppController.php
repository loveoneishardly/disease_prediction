<?php
    include_once('./config/connect.php');

    class AppController {

        public function ListSong(){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_load_list_song();");
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>