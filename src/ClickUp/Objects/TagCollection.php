<?php

namespace ClickUp\Objects;

/**
 * @method Tag   getByKey(int $id)
 * @method Tag   getByName(string $name)
 * @method Tag[] objects()
 * @method Tag[] getIterator()
 */
class TagCollection extends AbstractObjectCollection
{

	public function __construct(Space $space, $array)
	{
		parent::__construct($space->client(), $array);
	}


    /**
     * @param array $array
     */
    protected function fromArray($array)
    {
        $i = 0;
        foreach ($array as $key => $tag) {
            $array[$key]['id'] = $i++;
        }

        parent::fromArray($array);
    }

    /**
     * @return string
     */
    protected function objectClass(): string
    {
        return Tag::class;
    }
}
