<?php
require_once 'SleepIQ.php';

//Initial code from: natecj - https://github.com/natecj/sleepiq-php/blob/master/index.php
//2020-12-30 - Updated to remove DB data 
//TODO:
// - Add bed picture to represent current state
// - Add update AJAX call to update position/pressure

$sleepiq_user = "you@email.com";
$sleepiq_pass = "yourPWDhere";
  
try
{
  $SleepIQ = new SleepIQ\API( $sleepiq_user, $sleepiq_pass );
  
  //$bed = array_values($SleepIQ->beds())[0];
  //$previous_isInBed = $current_isInBed = $bed->statusRight->isInBed ? true : false;
  //if ( $current_isInBed ) {
  //    echo "[".date("r")."] initially in bed<br/>\n";
  //  } else {
  //echo "[".date("r")."] initially out of bed<br/>\n";  
  //}
  
  foreach( $SleepIQ->beds() as $index => $bed )
  {
	//echo "[[index-beds]]<br/>\n";
    echo $bed."<br/>\n";
  }
  foreach( $SleepIQ->sleepers() as $index => $sleeper )
    echo $sleeper."<br/>\n";
  
}
catch( Exception $e )
{
  echo "Error: ".$e->getMessage()."\n";
}