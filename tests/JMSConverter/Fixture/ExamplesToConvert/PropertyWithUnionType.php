<?php


namespace Test\Ecotone\JMSConverter\Fixture\ExamplesToConvert;


class PropertyWithUnionType
{
    /**
     * @var array|string[]
     */
    private $data;

    /**
     * PropertyWithUnionType constructor.
     * @param array|string[] $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
}