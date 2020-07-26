<?php


namespace Test\Ecotone\JMSConverter\Fixture\Configuration\Status;

use Ecotone\Messaging\Annotation\Converter;
use Ecotone\Messaging\Annotation\ConverterClass;

class StatusConverter
{
    /**
     * @Converter()
     */
    public function convertFrom(Status $status): string
    {
        return $status->getType();
    }

    /**
     * @Converter()
     */
    public function convertTo(string $status): Status
    {
        return new Status($status);
    }
}