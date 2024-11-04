<?php
/**
 * Debug function
 * _d($var);
 */
function _d($var,$caller=null)
{
    if(!isset($caller)){
        $caller = debug_backtrace(1)[0];
    }
    echo '<code>Line: '.$caller['line'].'<br>';
    echo 'File: '.$caller['file'].'</code>';
    echo '<pre>';
    yii\helpers\VarDumper::dump($var, 10, true);
    echo '</pre>';
}

/**
 * Debug function with die() after
 * _dd($var);
 */
function _dd($var)
{
    $caller = debug_backtrace(1)[0];
    _d($var,$caller);
    die();
}