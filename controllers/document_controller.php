<?php
     class DocumentController{
        public function IndexdownloadRequestInternship(){

            require_once("./view/document/index_downloadRequestInternship.php");
        }

        public function IndexdownloadDocument(){
            require_once("./view/document/index_downloadDocument.php");
        }
        public function IndexuploadDocument(){
            require_once("./view/document/index_uploadDocument.php");
        }
    }
?>