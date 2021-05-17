<?php

namespace App\Http\Controllers;


use App\Libraries\View;
use App\Models\BioModel;
use App\Models\EducationModel;
use App\Models\LanguagesModel;
use App\Models\SkillsModel;
use App\Models\ToolsModel;

class ResumeController 
{

    public function index()
    {

        $biomodel = new Biomodel;
        $skillsmodel = new SkillsModel;
        $educationmodel = new EducationModel;
        $toolsmodel = new ToolsModel;
        $languagesmodel = new LanguagesModel;

        return View::render('resume.view',
        [
            "bio"    => $biomodel->getBio(),
            "skills" => $skillsmodel->getSkills(),
            "education" => $educationmodel->getEducation(),
            "tools" => $toolsmodel->getTools(),
            "languages" => $languagesmodel->getLanguages(),
        ]);


        // $biomodel = new BioModel;
        //     // echo "<pre>"; var_dump($biomodel->getBio());

        //     return View::render('resume.view', [
        //         "bio" => $biomodel->getBio(),
        // ]);


        // $skillsmodel = new SkillsModel;
        
        //     return View::render('resume.view', [
        //         "skills" => $skillsmodel->getSkills(),
        // ]);
    }

    
}

