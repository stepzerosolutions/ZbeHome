<?php
/**
 * Zend Backend (http://stepzero.solutions/)
 *
 * Module
 *
 * PHP version 5
 *
 * @category Module
 * @package  ZbeHome
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://stepzero.solutions
 * @link     http://stepzero.solutions
 */
namespace ZbeHome;

/**
 * Module Class
 *
 * @category Module
 * @package  ZbeCore
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://stepzero.solutions
 * @link     http://stepzero.solutions
 */
class Module
{
    /**
    * Get Module configuration
    *
    * @return array
    */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
