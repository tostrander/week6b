<?php
/* week6/model/data-layer.php */

function getDesserts()
{
    $desserts = array('chocolate'=>'Chocolate Mousse',
        'vanilla'=>'Vanilla Custard',
        'strawberry'=>'Strawberry Shortcake');
    return $desserts;
}

function getColors()
{
    return array("red", "blue", "yellow");
}