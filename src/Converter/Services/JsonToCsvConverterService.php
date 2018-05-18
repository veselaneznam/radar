<?php
/**
 * Created by PhpStorm.
 * User: Vesela.Ferdinandova
 * Date: 5/18/2018
 * Time: 3:23 PM
 */

namespace App\Services;

use App\Controller\JsonToCsvConverterInterface;
use App\Converter\Infrastructure\JsonConverter;

class JsonToCsvConverterService implements JsonToCsvConverterInterface
{
    /**
     * @var JsonConverter
     */
    private $converter;

    /**
     * JsonToCsvConverterService constructor.
     * @param JsonConverter $converter
     */
    public function __construct(JsonConverter $converter)
    {
        $this->converter = $converter;
    }
}