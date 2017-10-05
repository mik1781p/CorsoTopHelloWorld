<?php

/**
 * Hello World
 */

/**
 * Hello World
 *
 * Hello World Block
 * @author Michele Acierno <forkmik@gmail.com>
 * @package Frontend
 * @version 0.1.0
 */
class Acierno_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * isEnabled
     *
     * Checks if the module is either active or not
     * Returns false if isnt enabled, true if it is
     * @return bool
     */
    public function isEnabled(){
        return Mage::helper('acierno_helloworld')->isEnabled();
    }

    /**
     * getMessage
     *
     * If set, this method returns the message set in the advanced
     * configuration area
     * @return string
     */
    public function getMessage(){
        return Mage::helper('acierno_helloworld')->getConfig('configuration/message');
    }
}
