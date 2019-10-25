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
     * @var array<string>
     */
    private $additionalFormattedContent;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $entryClass;

    /**
     * @var string
     */
    private $link;

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
     * @return array<string>
     */
    public function getAdditionalFormattedContent(): array
    {
        return $this->additionalFormattedContent;
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
     * @param string $content
     * @return SearchEntry
     */
    public function pushAdditionalFormattedContent(string $content): self
    {
        $this->additionalFormattedContent[] = $content;

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

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return SearchEntry
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function __toString()
    {
        $arr = [
            'title' => $this->getTitle(),
            'content' => $this->getContent(),
            'link' => $this->getLink()
        ];

        $str = json_encode($arr, JSON_UNESCAPED_UNICODE);

        if (is_string($str)) {
            return $str;
        }

        throw new \InvalidArgumentException('something went wrong');
    }
}
