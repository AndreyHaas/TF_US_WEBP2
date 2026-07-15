<?php
    function write_line($teiler, $zahl, $anzahl, $rest){
        return "Die ".$teiler." passt in die ".$zahl." ".$anzahl." x rein.<br>
                Es bleibt ein Rest von ".$rest.".<br>";
    }
    
    function Outsourced_if_else_with_param_return($i,$x){
    
        if($i < $x){
            return "Die ".$i." ist kleiner als ".$x.".";
        }
    
        $anzahl = intdiv($i, $x); //intdiv() gibt nur den ganzzahligen Anteil zurück
        $rest   = $i % $x;
    
        return write_line($x, $i, $anzahl, $rest);
    }
?>