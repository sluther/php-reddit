<?php

namespace PhpReddit\PhpReddit\Models;

use PhpReddit\PhpReddit\Reddit;
use ReflectionClass;
use ReflectionProperty;

abstract class Base
{
    const REGEX_ID_PREFIX = '/t([1-6]|\d+)_/';
    const REGEX_ID_VALID = '/^(t[1-6])_([a-z0-9]{1,6})$/';

    protected static Reddit $reddit;

    public string $id;
    public string $name;

    /*
     * Cannot be filled from existing object
     */
    protected array $guarded = [
        'id',
    ];

    protected bool $hydrated = false;

    public static function getConnection(): Reddit
    {
        return static::$reddit;
    }

    public static function setConnection(Reddit $reddit)
    {
        static::$reddit = $reddit;
    }

    protected function reddit(): Reddit
    {
        return static::getConnection();
    }

    /**
     * @param string|null $id
     * @param array|null $object
     * @throws MalformedIdException
     */
    public function __construct(?string $id, ?array $object = null)
    {
        $matches = [];
        if (!is_null($id)) {
            $matched = preg_match(self::REGEX_ID_PREFIX, $id, $matches);

            if ($matched && $matches[1] > 6) {
                throw new MalformedIdException('Wrong ID format');
            }

            if ($matched && $matches[0] !== static::KIND_PREFIX) {
                throw new MalformedIdException('ID prefix does not match specified object type');
            }

            // Make sure the ID is correctly formatted
            if (!$matched) {
                $id = static::KIND_PREFIX . $id;
            }

            $matched = preg_match(self::REGEX_ID_VALID, $id, $matches);
            if (!$matched) {
                throw new MalformedIdException('Wrong ID format');
            }
            // TODO - verify other objects use name for full id
            $this->name = $id;
            $this->id = $matches[2];
        }

        if (!is_null($object)) {
            $reflection = new ReflectionClass($this);
            $props = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
            foreach ($props as $prop) {
                if (!in_array($prop->name, $this->guarded) && array_key_exists($prop->name, $object)) {
                    $prop->setValue($this, $object[$prop->name]);
                }
            }
        }
    }
}