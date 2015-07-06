<?php

namespace Hgtan\Bundle\HelloGraylogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Monolog\Logger;
use Gelf\Publisher;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $logger = new Logger('Graylog2');

        $gelfHandler = $this->get('monolog.gelf_handler');
        $logger->pushHandler($gelfHandler);

        $logger->warning('Test warning message');
        $logger->error('Test error message');
        $logger->info('Test info message');
        $logger->debug('Test debug message');

        return $this->render('HgtanHelloGraylogBundle:Default:index.html.twig', array('name' => $name));
    }
}
