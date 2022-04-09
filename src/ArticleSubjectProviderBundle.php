<?php

namespace Diplom\ArticleSubjectProviderBundle;

use Diplom\ArticleSubjectProviderBundle\DependencyInjection\ArticleSubjectProviderExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ArticleSubjectProviderBundle extends Bundle
{
    public function getContainerExtension()
    {
        if(null === $this->extension) {
            $this->extension = new ArticleSubjectProviderExtension();
        }
        return $this->extension;
    }
}