<?php
/**
 * Created by PhpStorm.
 * User: Vesela.Ferdinandova
 * Date: 5/18/2018
 * Time: 3:26 PM
 */

namespace App\Converter\Domain;


interface FileInterface
{
    public function getExtension(): string;

    public function getContent();

}