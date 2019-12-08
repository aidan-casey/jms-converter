<?php


namespace Test\Ecotone\JMSConverter\Fixture\ExamplesToConvert;


class CollectionProperty
{
    /**
     * @var PropertyWithTypeAndMetadataType[]
     */
    private $collection;

    /**
     * CollectionProperty constructor.
     * @param PropertyWithTypeAndMetadataType[] $collection
     */
    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }
}