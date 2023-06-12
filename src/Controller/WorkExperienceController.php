<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkExperienceController extends AbstractController
{
    #[Route('/work/experience', name: 'app_work_experience')]
    public function index(): Response
    {
        return $this->render(
            'experience/work.html.twig',
            [
                'section_title' => 'Experiencia Laboral',
                'section_subtitle' => 'Aqui se detalla toda mi vida profesional.',
                'experience_list' => $this->getExperiences(),
                'chartDataPoints' => '[{"label"=>"Chrome", "y"=>64.02}, {"label"=>"Firefox", "y"=>12.55}]',
                'charTitle' => 'Navegadores',
                'chartSubtitle' => 'Fechas',
            ]
        );
    }

    private function getExperiences() : array {
        return [
            [
                'title' => 'Desarrollador fullstack',
                'company' => 'Artica ST',
                'companyLink' => 'https://pandorafms.com/es/',
                'fromTo' => '2019/2023',
                'description' => 'Pues hacía un poco el mono',
            ],
            [
                'title' => 'Desarrollador .NET',
                'company' => 'Everis',
                'companyLink' => 'https://es.nttdata.com/',
                'fromTo' => '2018/2019',
                'description' => 'Mis jefes eran poco simpaticos',
            ],
            [
                'title' => 'Picateclas Jr',
                'company' => 'Artica ST',
                'companyLink' => 'https://www.linkedin.com/company/atramentum-sl/',
                'fromTo' => '2017/2018',
                'description' => 'Mucho escribir pero poco producir',
            ]
        ];
    }
}
