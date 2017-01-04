<?php

/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 04.01.2017
 * Time: 12:21
 */
class Post
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;

    /**
     * @var array
     */
    private $postedWebsites = array();

    /**
     * @var datetime
     */
    private $date;


    /**
     * Post constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Post
     */
    public function setName(string $name): Post
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Post
     */
    public function setContent(string $content): Post
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return datetime
     */
    public function getDate(): datetime
    {
        return $this->date;
    }

    /**
     * @param datetime $date
     * @return Post
     */
    public function setDate(datetime $date): Post
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param string $websiteKey
     */
    public function addPostedWebsite(string $websiteKey)
    {
        array_push($this->postedWebsites, $websiteKey);
    }

    /**
     * @return bool
     */
    public function wasAlreadyPosted(): bool {
        return count($this->postedWebsites) > 0;
    }
}