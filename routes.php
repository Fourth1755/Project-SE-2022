<?php
    $controllers =array('pages'=>['home','error'],
    'anime'=>['index','newAnime','addAnime','search','updateForm','update'],
    'announce'=>['index']);
    function call($controller,$action){
        //echo "routes to".$controller."-".$action."<br>";
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": $controller = new PagesController();
                        break;
            case "anime": require_once("models/animeModels.php");
                            require_once("models/studioModels.php");
                            $controller = new AnimeController();
                        break;
            case "announce": $controller = new AnnounceController();
                        break;
        }
        $controller->{$action}();
    }
    if(array_key_exists($controller,$controllers)){
        if(in_array($action,$controllers[$controller])){
            call($controller,$action);
        }
        else{
            call('pages','error');
        }   
    } 
    else{
        call('pages','error');
    }
?>