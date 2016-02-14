<?php
/**
 * config.php
 *
 * @category SPA
 * @author Андрей Новиков <andrey@novikov.be>
 * @data 07/12/2015
 *
 */
namespace Application;

return array(
    'view' => '../Application/view/',
    'route' => function($params){
        return $params;
    },
    'pattern'=> function($param=null,  $value = 'index.phtml') {
        return ($param) ? $param . '.phtml' : $value;
    }
);
?>