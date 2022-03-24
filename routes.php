<?php
    $controllers =array('pages'=>['home','error','login'],
    'login'=>['index','login','logout'],
    'profile'=>['index',"profile2"],
    'announce'=>['index','addAnnounce'],
    'company'=>['index','newCompany','addCompany','viewCompany','indexcompanyDetail','updatecompanyDetailPage1','updatecompanyDetailPage2','updatecompanyDetailPage3'],
    'uploadreport'=>['index'],
    'internshiphistory'=>['index','detailInternshiphistory'],
    'petition'=>['index','newPetition','addPetition','indexSummaryPetition','approvePetition','approveView','approveApprove','approveReject','searchPetition','SortDate','searchApprove'],
    'document'=>['IndexdownloadRequestInternship','IndexdownloadDocument','IndexuploadDocument']);
    function call($controller,$action){
        //echo "routes to".$controller."-".$action."<br>";
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": 
                        $controller = new PagesController();
                        break;
            case "profile" : 
                        require_once("models/requestformModels.php");
                        require_once("models/accountModel.php");
                        $controller =new ProfileController();
                        break;
            case "announce": 
                        $controller = new AnnounceController();
                        break;
            case "company": 
                        require_once("models/companyModel.php");
                        $controller = new CompanyController();
                        break; 
            case "uploadreport": 
                        $controller = new UploadreportController();
                        break; 
            case "internshiphistory": 
                        $controller = new InternshiphistoryController();
                        break;
            case "petition":
                        require_once("models/companyModel.php");
                        require_once("models/requestformModels.php");
                        require_once("models/accountModel.php");
                        $controller = new PetitionController();
                        break;  
            case "document":
                        $controller = new DocumentController();
                        break;     
            case "login":
                        require_once("models/accountModel.php");
                        $controller =new LoginController();   
        
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