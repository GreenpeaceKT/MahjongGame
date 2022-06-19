<?php
declare(strict_types=1);

namespace space\greenpeacekt\pluginname\mahjong;

class Hai {
  
  public $KINDS = [
  'SUPAI'=>['manzu','pinzu','souzu'],
  'JIPAI'=>['sufonpai','sangenpai']
  ];
  
  public $SUUPAI_VALUE = [1,2,3,4,5];
  public $SUFONPAI_VALUE = [1,2,3,4];
  public $SANGENPAI_VALUE = [1,2,3];
  
  public $MENTSU_KINDS = ['順子','刻子'];
  
  public array $kind;
  public int $value;
  
  public function __construct($kind,$value){
    $this->kind = $kind;
    $this->value = $value;
  }
  
  public function getSortKey(){
    switch ($this->kind) {
      case $this->KINDS->SUUPAI[0]:
        return (int)'1'+ (string)$this->value;
        
      case $this->KINDS->SUUPAI[1]:
        return (int)'2'+ (string)$this->value;
        
      case $this->KINDS->SUUPAI[2]:
        return (int)'3'+ (string)$this->value;
        
      case $this->KINDS->JIPAI[0]:
        return (int)'4'+ (string)$this->value;
        
      case $this->KINDS->JIPAI[1]:
        return (int)'5'+ (string)$this->value;

      default:
        return
        break;
    }
  }
  public function equals($hai){
    return $hai->kind == $this->kind && $hai->value == $this->value
  }
}



