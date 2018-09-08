<?php

use models\Test;

class TestController
{
    public function actionIndex()
    {
        $message = Test::simpleMessage();

        require_once(ROOT . '/views/test/index.php');

        return true;
    }
}