<?php
/**
 * Date: 27.03.2018
 * Time: 18:32
 */

namespace App\builder;

/**
 * Class BuilderPage
 * @package App\builder
 */
class BuilderPage
{
    /**
     * @var Page
     */
    private $page;

    /**
     * BuilderPage constructor.
     */
    public function __construct()
    {
        $this->page = new Page();
    }


    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->page->setTitle($title);
    }

    /**
     * @param $head
     */
    public function setHead($head)
    {
        $this->page->setHead($head);
    }

    /**
     * @param $body
     */
    public function setBody($body)
    {
        $this->page->setBody($body);
    }

    public function page()
    {
        return $this->page->createPage();
    }
}