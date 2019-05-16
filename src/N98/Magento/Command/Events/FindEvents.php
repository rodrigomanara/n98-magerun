<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace N98\Magento\Command\Events;

use N98\Magento\Command\Events\AbstractEventsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
/**
 * Description of FindEvents
 *
 * @author rodrigo
 */
class FindEvents extends AbstractEventsCommand {

    //put your code here

    protected function configure() {
        $this
                ->setName('dev:events:list')
                ->setDescription('Lists all magento events')
                ->addOption(
                        'format', null, InputOption::VALUE_OPTIONAL, 'Output Format. One of [' . implode(',', RendererFactory::getFormats()) . ']'
                )
        ;

        $help = <<<HELP
Lists all Magento events of current installation.
HELP;
        $this->setHelp($help);
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        
       
        
        $this->detectMagento($output, true);
        if (!$this->initMagento()) {
            return;
        }

        
        echo "rodrigo";
        
    }

}
