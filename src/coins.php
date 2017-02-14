<?php

    class Coin
    {

        function find_coins($input) {
            $Q = 0;
            $D = 0;
            while ($input >= 25) {
                $Q++;
                $input = $input-25;
            }
            while ($input <= 10) {
                $D++;
                $input = $input-10;
            }
            return 'Q'.$Q.'D'.$D;
        }
    }



?>
