<?php

    function kelulusan($_nilai){
        if($_nilai > 55){
            return 'LULUS';
        } elseif ($_nilai < 56) {
            return 'TIDAK LULUS';
        } else{
            return 'TIDAK VALID';
        }
    }


    function grade($_nilai){
        if($_nilai <= 35 ){
            return 'E';
        }
    }


?>