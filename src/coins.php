<?php

    class Coin
    {

        function find_coins($input) {
            $Q = 0;
            $D = 0;
            $N = 0;
            $P = 0;
            while ($input >= 25) {
                $Q++;
                $input = $input-25;
            }
            while ($input >= 10) {
                $D++;
                $input = $input-10;
            }
            while ($input >= 5) {
                $N++;
                $input = $input-5;
            }
            while ($input >= 1) {
                $P++;
                $input = $input-1;
            }
            return 'Q'.$Q.'D'.$D.'N'.$N.'P'.$P;
        }
    }



?>
