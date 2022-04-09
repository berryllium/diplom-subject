<?php

namespace Diplom\ArticleSubjectProviderBundle;


class ArticleSubjectProvider
{
    /**
     * @var ArticleSubjectInterface[] $subjects
     */
    private array $subjects;

    public function __construct(iterable $subjects) {
        foreach ($subjects as $subject) {
            $this->subjects[$subject->getCode()] = $subject;
        }
    }

    public function getSubject($code) : ?ArticleSubjectInterface {
        return $this->subjects[$code] ?? null;
    }

    public function getAllSubjects() {
        return $this->subjects;
    }
}