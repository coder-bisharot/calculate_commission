<?php


function calculate_commission($tuition_fee) {
  return ($tuition_fee >= 20000) ? ($tuition_fee * 0.25) : 
         (($tuition_fee >= 10000) ? ($tuition_fee * 0.20) : 
         (($tuition_fee >= 7000) ? ($tuition_fee * 0.15) : 
         (($tuition_fee < 7000) ? "The Invalid Data" : 0)));
}
echo calculate_commission(7000);