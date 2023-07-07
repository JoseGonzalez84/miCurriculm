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
                'companyLogo' => 'img/companies/articast.jfif',
                'fromTo' => [
                    'from' => 'Junio de 2019',
                    'to' => 'Marzo de 2023'
                ],
                'description' => 'Mi principal cometido era la resolución de bugs y desarrollo de mejoras de producto. El
principal lenguaje utilizado era PHP nativo en su versión 8.0. Seguido de JavaScript en conjunto
a jQuery y en algunas ocasiones con librería React. Cuando me centraba en la parte backend,
se trabajaba con PHP y Perl. Utilizaba tecnologías de desarrollo como Docker y GitLab. La
empresa al estar en Madrid, trabajé 100% en modalidad remota.',
                'headTechnologies' => ['PHP', 'Perl', 'JavaScript'],
                'headSkills' => ['Backend', 'Frontend', 'Maitenance', 'New features', 'Full Remote']
            ],
            [
                'title' => 'Desarrollador .NET',
                'company' => 'Everis',
                'companyLink' => 'https://es.nttdata.com/',
                'fromTo' => [
                    'from' => 'Septiembre de 2018',
                    'to' => 'Junio de 2019'
                ],
                'description' => 'Mis jefes eran poco simpaticos',
            ],
            [
                'title' => 'Picateclas Jr',
                'company' => 'Artica ST',
                'companyLink' => 'https://www.linkedin.com/company/atramentum-sl/',
                'fromTo' => [
                    'from' => 'Julio de 2017',
                    'to' => 'Septiembre de 2018'
                ],
                'description' => 'Mucho escribir pero poco producir',
            ]
        ];
    }
}
