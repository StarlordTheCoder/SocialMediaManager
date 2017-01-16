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
    private $title;

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
    private $start;

    /**
     * @var datetime
     */
    private $end;

    /**
     * @var bool
     */
    private $allDay;


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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title): Post
    {
        $this->title = $title;
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
    public function getStart(): datetime
    {
        return $this->start;
    }

    /**
     * @param datetime $start
     * @return Post
     */
    public function setStart(datetime $start): Post
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return datetime
     */
    public function getEnd(): datetime
    {
        return $this->end;
    }

    /**
     * @param datetime $end
     * @return Post
     */
    public function setEnd(datetime $end): Post
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllDay(): bool
    {
        return $this->allDay;
    }

    /**
     * @param bool $allDay
     * @return Post
     */
    public function setAllDay(bool $allDay): Post
    {
        $this->allDay = $allDay;
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