<?php

    require_once 'src/coins.php';


    class Coin_Test extends PHPUnit_Framework_TestCase
    {

        function test_find_coin_quarters()
        {
            $input = 50;
            $test_coin = new Coin;

            $result = $test_coin->find_coins($input);

            $this->assertEquals($result, 'Q2');
        }

        function test_find_coin_dimes()
        {
            $input = 50;
            $test_coin = new Coin;

            $result = $test_coin->find_coins($input);

            $this->assertEquals($result, 'D5');
        }

    }



 ?>
