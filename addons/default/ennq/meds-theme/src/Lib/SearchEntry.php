<?php


namespace Ennq\MedsTheme\Lib;


class SearchEntry
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $entryClass;

    /**
     * @return string
     */
    public function getEntryClass(): string
    {
        return $this->entryClass;
    }

    /**
     * @param string $entryClass
     * @return SearchEntry
     */
    public function setEntryClass(string $entryClass): self
    {
        $this->entryClass = $entryClass;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SearchEntry
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return SearchEntry
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return SearchEntry
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
