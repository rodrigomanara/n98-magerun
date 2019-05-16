<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace N98\Magento\Command\Events;


use N98\Magento\Command\AbstractMagentoCommand;
/**
 * Description of AbstractEventsCommand
 *
 * @author rodrigo
 */
class AbstractEventsCommand extends AbstractMagentoCommand{
    //put your code here
    
    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getApplication()->isMagentoEnterprise();
    }
}

 
