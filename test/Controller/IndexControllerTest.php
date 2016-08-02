<?php
/**
 * Zend Backend (http://stepzero.solutions/)
 *
 * IndexControllerTest
 *
 * PHP version 5
 *
 * @category Module
 * @package  ZbeHome
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://stepzero.solutions
 * @link     http://stepzero.solutions
 */

namespace ZbeHomeTest\Controller;

use ZbeHome\Controller\IndexController;
use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/**
 * Index Controller Test Class
 *
 * @category Controller
 * @package  ZbeHome
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://stepzero.solutions
 * @link     http://stepzero.solutions
 */
class IndexControllerTest extends AbstractHttpControllerTestCase
{
    /**
    * Setup 
    *
    * @return void
    */
    public function setUp()
    {
        $configOverrides = [];

        $this->setApplicationConfig(ArrayUtils::merge(
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
        ));

        parent::setUp();
    }

    /**
    * Test Index Action 
    *
    * @return void
    */
    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/', 'GET');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('application');
        $this->assertControllerName(IndexController::class); // as specified in router's controller name alias
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('home');
    }

    /**
    * Test Index View 
    *
    * @return void
    */
    public function testIndexActionViewModelTemplateRenderedWithinLayout()
    {
        $this->dispatch('/', 'GET');
        $this->assertQuery('.container .jumbotron');
    }

    /**
    * Test Invalid Route
    *
    * @return void
    */
    public function testInvalidRouteDoesNotCrash()
    {
        $this->dispatch('/invalid/route', 'GET');
        $this->assertResponseStatusCode(404);
    }
    
  /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
