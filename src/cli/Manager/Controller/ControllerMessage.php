<?php
namespace Mora\Core\cli\Manager\Controller;

use Mora\Core\cli\Console\Output;
use Mora\Core\cli\Console\CliStrings;

class ControllerMessage{
    public static function create_success($name,$actions){
        if(empty($actions)){
            Output::printSuccess(CliStrings::get("controller_create_succes",["name"=>$name]));
        }else{
            Output::printSuccess(CliStrings::get("controller_action_create",["name"=>$name,"actions"=>implode(",",$actions)]));
        }
    }
    public static function delete_success($name){
        Output::printSuccess(CliStrings::get("controller_delete_succes",["name"=>$name]));
    }
    public static function rename_success($old,$new){
        
    }
    public static function add_actions_success($actions){
        
    }
    public static function controller_not_found($name){
        Output::printError(CliStrings::get("controller_not_found",["name"=>$name]));
    }
    
}