<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Framework\Session;

class SessionTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function test_session_start_at_new_Session()
    {
        $session = new Session;
        $session->start();

        $this->assertEquals(session_status(),PHP_SESSION_ACTIVE);
    }

    /**
     *
     * @return void
     */
    public function test_session_data_put_key_test_value_six()
    {
        $session = new Session;
        $session->start();

        $session->put('test', 6);

        $this->assertEquals($_SESSION['test'],6);
    }

    /**
     *
     * @return void
     */
    public function test_session_data_get_key_test_value_six()
    {
        $session = new Session;
        $session->start();

        $session->put('test', 6);

        $this->assertEquals($_SESSION['test'],$session->get('test', 6));
    }


    /**
     *
     * @return void
     */
    public function test_session_abort()
    {
        $session = new Session;
        $session->start();

        $session->abort();

        $this->assertEquals(session_status(),PHP_SESSION_NONE);
    }
}
