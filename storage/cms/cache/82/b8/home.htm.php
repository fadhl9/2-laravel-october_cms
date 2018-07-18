<?php 
class Cms5b49b8eb7dc85503435101_95754418f482fafb67a7e8989a834ff8Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
