<?php

    $payment = 1560.86;
    $valueAjustment = 0;
    
        function ajustPayment($payment, &$val3125ueAjustment){
            $valueAjustment = 422.58;
            return ($payment + $valueAjustment);
        }

        $finalValue = ajustPayment($payment, $valueAjustment);

        echo "o valor ajustado é de: <strong>R$ {$finalValue}</strong>, com o aumento de: <strong>R$ {$valueAjustment}</strong>";