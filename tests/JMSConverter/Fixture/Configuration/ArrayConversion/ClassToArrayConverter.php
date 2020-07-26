<?php


namespace Test\Ecotone\JMSConverter\Fixture\Configuration\ArrayConversion;

use Ecotone\Messaging\Annotation\Converter;
use Ecotone\Messaging\Annotation\ConverterClass;
use stdClass;

class ClassToArrayConverter
{
    /**
     * @Converter()
     */
    public function convertFrom(array $data): stdClass
    {
        $stdClass = new stdClass();
        $stdClass->data = $data['data'];

        return $stdClass;
    }

    /**
     * @Converter()
     */
    public function convertTo(stdClass $class): array
    {
        return [
            "data" => $class->data
        ];
    }
}