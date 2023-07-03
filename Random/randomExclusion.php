<?php
namespace Random;

class randomExclusion{

    public function randommy($start, $end, $exclude = null){
        if(($exclude != null)&&(is_array($exclude))){
            $randomVariables = array();
            for($no=$start; $no<=$end; $no++){
                if(in_array($no, $exclude) === false){
                    array_push($randomVariables, $no);
                }
            }
            $randomLength = count($randomVariables);
            if($randomLength >= 2){
                return $randomVariables[rand(0, ($randomLength-1))];
            }
            else{
                return $randomVariables[0];
            }
        }
        return rand($start, $end);
    }
}
?>