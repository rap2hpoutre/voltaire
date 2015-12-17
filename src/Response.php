<?php
namespace Rap2hpoutre\Voltaire;


use SimpleXMLElement;

/**
 * Class Response
 * @package Rap2hpoutre\Voltaire
 */
class Response
{
    /**
     * @var
     */
    public $errors = [];
    /**
     * @var SimpleXMLElement
     */
    private $element;

    /**
     * Response constructor.
     * @param SimpleXMLElement $element
     */
    public function __construct(SimpleXMLElement $element)
    {
        $this->element = $element;
        $this->initErrors();
    }

    /**
     *
     */
    private function initErrors()
    {
        if (!isset($this->element->error)) return;

        $errors = $this->element->error;
        if (!$errors) {
            $errors = [$this->element->error];
        }

        foreach ($errors as $error) {
            $this->errors[] = $error->attributes();
        }
    }
}