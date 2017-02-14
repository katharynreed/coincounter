<?php

    require_once 'src/coins.php';


    class Coin_Test extends PHPUnit_Framework_TestCase
    {

        function test_find_coin_quarters()
        {
            $input = 50;
            $test_coin = new Coin;

            $result = $test_coin->find_coins($input);

            $this->assertEquals($result, 'Q2D0N0P0');
        }

        function test_find_coin_dimes()
        {
            $input = 60;
            $test_coin = new Coin;

            $result = $test_coin->find_coins($input);

            $this->assertEquals($result, 'Q2D1N0P0');
        }
        function test_find_coin_nickels()
        {
            $input = 65;
            $test_coin = new Coin;

            $result = $test_coin->find_coins($input);

            $this->assertEquals($result, 'Q2D1N1P0');
        }
        function test_find_coin_pennies()
        {
            $input = 69;
            $test_coin = new Coin;

            $result = $test_coin->find_coins($input);

            $this->assertEquals($result, 'Q2D1N1P4');
        }
    }



 ?>
