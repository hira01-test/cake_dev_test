<?php
App::uses('UsersController', 'Controller');

/**
 * UsersController Test Case
 *
 */
class UsersControllerTest extends ControllerTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.user'
    );

    function test一足す一は二()
    {
        $this->assertEquals(2, 1 + 1);
    }

    function test2x2equal4()
    {
        $this->assertEquals(4, 2 * 2);
    }

    /**
     * testIndex method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->testAction('/users/index');
        $this->assertTextContains('Users', $this->view); // (2)
    }

    /**
     * testView method
     *
     * @return void
     */
    public function testView()
    {
    }

    /**
     * testAdd method
     *
     * @return void
     */
    public function testAdd()
    {
    }

    /**
     * testEdit method
     *
     * @return void
     */
    public function testEdit()
    {
    }

    /**
     * testDelete method
     *
     * @return void
     */
    public function testDelete()
    {
    }

}
