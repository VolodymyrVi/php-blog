<?php

declare(strict_types=1);

namespace Blog;

class PostMapper
{
    /**
     *
     * @var PDO $connection
     */
    private $connection;

    /**
     * PostMapper constructor
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;

    }
}