<?php
declare(strict_types=1);

function dbug($value)
{
    echo '<pre style="background-color:darkgreen;color:orange;font-weight:bold;overflow: auto;padding: 1rem;font-family:monospace;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

function dd($value)
{
    dbug($value);
    die('Script php arrété !!!');
}