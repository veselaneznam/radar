<?php
/**
 * Created by PhpStorm.
 * User: Vesela.Ferdinandova
 * Date: 5/18/2018
 * Time: 3:05 PM
 */

namespace App\Converter\Domain;


interface Converter
{
    public function convert(Input $input) : Output;
}