<?php 
class Cms5b4a00ef5a39e637395424_5508112ea2e4b0ff3393468251a6fed8Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
