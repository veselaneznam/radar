<?php
/**
 * Created by PhpStorm.
 * User: Vesela.Ferdinandova
 * Date: 5/18/2018
 * Time: 3:10 PM
 */

namespace App\Converter\Domain;


interface Output
{
    public function addHeader();

    public function addRows();
}