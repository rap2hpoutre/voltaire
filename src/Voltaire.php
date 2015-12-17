<?php
namespace Rap2hpoutre\Voltaire;

/**
 * Class Voltaire
 * @package Rap2hpoutre\Voltaire
 */
class Voltaire
{
    /**
     * @var
     */
    private $language;
    /**
     * @var string
     */
    private $url;

    /**
     * Voltaire constructor.
     * @param $language
     * @param string $url
     */
    public function __construct($language, $url = 'https://languagetool.org:8081/')
    {
        $this->language = $language;
        $this->url = $url;
    }

    /**
     * @param $text
     * @return Response
     */
    public function process($text)
    {
        return new Response(
            simplexml_load_string(
                file_get_contents(
                    $this->url . "?language={$this->language}&text=" . urlencode($text)
                )
            )
        );
    }
}
