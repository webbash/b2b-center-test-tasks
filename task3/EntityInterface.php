<?php

namespace Task3;

/**
 * Interface EntityInterface
 * @package Task3
 */
interface EntityInterface
{
    /**
     * Получить экземпляр сущности.
     *
     * @param int $id
     * @return EntityInterface
     */
    public static function get(int $id);
}
