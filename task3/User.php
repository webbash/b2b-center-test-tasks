<?php

namespace Task3;

/**
 * Class User
 * @package Task3
 */
class User implements EntityInterface
{
    /**
     * @param int $userId
     * @return User
     */
    public static function get(int $userId): self {}

    /**
     * @param int $articleId
     * @return Article
     */
    public function getArticle(int $articleId): Article {}

    /**
     * @return array
     */
    public function getArticles(): array {}

    /**
     * @param array $attributes
     * @return Article
     */
    public function createArticle(array $attributes): Article {}
}
