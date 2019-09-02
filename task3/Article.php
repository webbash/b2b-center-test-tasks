<?php

namespace Task3;

/**
 * Class Article
 * @package Task3
 */
class Article implements EntityInterface
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var User
     */
    private $author;

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
