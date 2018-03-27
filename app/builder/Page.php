<?php
/**
 * Date: 27.03.2018
 * Time: 18:33
 */

namespace App\builder;


/**
 * Class Page
 * @package App\builder
 */
class Page
{


    /**
     * @var
     */
    /**
     * @var
     */
    /**
     * @var
     */
    private $title,
        $head,
        $body;

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param $head
     */
    public function setHead($head)
    {
        $this->head = $head;
    }

    /**
     * @param $body
     */
    function setBody($body)
    {
        $this->body = $body;

    }

    /**
     *
     */
    public function createPage()
    {

        $this->page = '<html>';
        $this->page .= '<head><title>' . $this->title . '</title></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>' . $this->head . '</h1>';
        $this->page .= $this->body;
        $this->page .= '</body>';
        $this->page .= '</html>';

        return $this->page;


    }
}