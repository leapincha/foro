<?php

/**
 * Created by PhpStorm.
 * User: lgorriz
 * Date: 16/12/16
 * Time: 15:08
 */

use \Illuminate\Foundation\Testing\DatabaseTransactions;

class FeatureTestCase extends TestCase
{
    use DatabaseTransactions;

    public function seeErrors(array $fields)
    {
        foreach ($fields as $name => $errors)
        {
                foreach((array) $errors as $message){
                    $this->seeInElement(
                        "#field_{$name}.has-error .help-block",
                        $message
                    );
                }
        }
    }
}