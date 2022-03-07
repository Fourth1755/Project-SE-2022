<?php
    $controllers =array('pages'=>['home','error','login'],
    'anime'=>['index','newAnime','addAnime','search','updateForm','update'],
    'profile'=>['index'],
    'announce'=>['index','addAnnounce'],
    'company'=>['index'],
    'uploadreport'=>['index'],
    'internshiphistory'=>['index'],
    'petition'=>['index','newpetition','addpetition']);
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
            case "profile" : $controller =new ProfileController();
                        break;
            case "announce": $controller = new AnnounceController();
                        break;
            case "company": $controller = new CompanyController();
                        break; 
            case "uploadreport": $controller = new UploadreportController();
                        break; 
            case "internshiphistory": $controller = new InternshiphistoryController();
                        break;
            case "petition":
                            require_once("models/requestformModels.php");
                            $controller = new PetitionController();
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