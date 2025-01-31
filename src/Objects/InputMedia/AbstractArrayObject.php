<?php

namespace Telegram\Bot\Objects\InputMedia;

use Telegram\Bot\Contracts\Multipartable;
use Telegram\Bot\Helpers\Validator;
use Telegram\Bot\Objects\AbstractCreateObject;

/**
 * Class AbstractArrayObject.
 */
abstract class AbstractArrayObject extends AbstractCreateObject implements Multipartable
{
    /**
     * @param $object
     *
     * @return $this
     */
    public function add($object): self
    {
        $this->fields[] = $object;

        return $this;
    }

    /**
     * @return array
     */
    public function toMultipart(): array
    {
        return collect($this->fields)
            ->filter(fn ($field) => Validator::isMultipartable($field))
            ->flatMap(fn ($field) => $field->toMultipart())
            ->all();
    }
}
