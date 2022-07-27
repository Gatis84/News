<?php
namespace App;

class View
{
    private string $templatePath;
    private array $data;

    public function __construct(string $templatePath, array $data)
    {
        $this->templatePath = $templatePath;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getTemplatePath(): string
    {
        return $this->templatePath;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}