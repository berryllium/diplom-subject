<?php

namespace Diplom\ArticleSubjectProviderBundle;

interface ArticleSubjectInterface
{
    public function getCode() : string;
    public function getName() : string;
    public function getTitles(int $count) : array;
    public function getParagraphs(int $count) : array;
}