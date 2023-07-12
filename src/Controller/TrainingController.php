<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainingController extends AbstractController
{
    #[Route('/training', name: 'app_training')]
    public function index(): Response
    {
        return $this->render('training/education.html.twig', [
            'section_title' => 'Formación en TI',
            'section_subtitle' => 'Todos mis logros académicos relacionados con TI.',
            'studies_list' => $this->getTraining(),
        ]);
    }

    private function getTraining(): array
    {
        return [
            [
                'degree' => 'FPGS',
                'level' => 'Técnico Superior',
                'title' => 'Desarrollo de Aplicaciones Multiplataforma',
                'college' => [
                    'name' => 'IES Mare Nostrum',
                    'location' => 'Alicante',
                    'link' => 'https://portal.edu.gva.es/iesmarenostrum/es/centro-va-es/',
                    'logo' => 'img/companies/iesmarenostrum.png'
                ],
                'fromTo' => [
                    'finished' => false,
                    'from' => '2020',
                    'to' => '2021'
                ],
                'rating' => '',
                'data' => '',
                'headTechnologies' => ['Unity', 'Kotlin', 'Navision', 'JAVA'],
                'headSkills' => ['Clean code', 'IDE Usage', 'Services', 'Design Patterns']
            ],
            [
                'degree' => 'FPGS',
                'level' => 'Técnico Superior',
                'title' => 'Desarrollo de Aplicaciones Web',
                'college' => [
                    'name' => 'IES Mare Nostrum',
                    'location' => 'Alicante',
                    'link' => 'https://portal.edu.gva.es/iesmarenostrum/es/centro-va-es/',
                    'logo' => 'img/companies/iesmarenostrum.png'
                ],
                'fromTo' => [
                    'finished' => true,
                    'from' => '2016',
                    'to' => '2018'
                ],
                'rating' => '7.7',
                'data' => '',
                'headTechnologies' => ['.NET Framework', 'SQL Server', 'JavaScript', 'CSS3'],
                'headSkills' => ['Clean code', 'IDE Usage', 'Code maitenance', 'Design Patterns', 'Testing']
            ],
            [
                'degree' => 'FPGM',
                'level' => 'Técnico',
                'title' => 'Explotación de Sistemas Informáticos',
                'college' => [
                    'name' => 'IES Juan de la Cierva',
                    'location' => 'Madrid',
                    'link' => 'https://site.educa.madrid.org/ies.juandelacierva.madrid/',
                    'logo' => 'img/companies/iesjuandelacierva.png'
                ],
                'fromTo' => [
                    'finished' => true,
                    'from' => '2005',
                    'to' => '2007'
                ],
                'rating' => '7.8',
                'data' => '',
                'headTechnologies' => ['Debian', 'Ensamblador', 'Shell Scripting', 'Redes Cisco'],
                'headSkills' => ['Server Maitenance', 'Helpdesk', 'Networking']
            ],

            [
                'degree' => 'Curso',
                'level' => '',
                'title' => 'Programación con PHP 5.3',
                'college' => [
                    'name' => 'Universidad Politécnica',
                    'location' => 'Madrid',
                    'link' => 'https://www.upm.es/',
                    'logo' => 'img/companies/upm.gif'
                ],
                'fromTo' => [
                    'finished' => true,
                    'from' => 'Octubre 2010',
                    'to' => 'Noviembre 2010'
                ],
                'rating' => 'Aprobado',
                'data' => '150 horas. Desarrollo de aplicaciones PHP con manejo de datos en MySQL y ficheros XML'
            ],
        ];
    }
}
