<?php

namespace Task3;

/**
 * Class Article
 * @package Task3
 */
class Article implements EntityInterface
{
    /**
     * @param int $articleId
     * @return Article
     */
    public static function get(int $articleId): self {}

    /**
     * @return User
     */
    public function getAuthor(): User {}

    /**
     * @param User $user
     * @return Article
     */
    public function changeAuthor(User $user): self {}
}
