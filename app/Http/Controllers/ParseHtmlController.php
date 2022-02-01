<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPHtmlParser\Dom;

class ParseHtmlController extends Controller
{
  protected $dom;
    public function __construct()
  {
    $this->dom = new Dom;
  }
    public function parseFromString()
  {

      $this->dom->loadStr('<div class="all"><p>Hey bro, <a href="google.com">click here</a><br /> :)</p></div>');
      $a = $this->dom->find('a')[0];
      echo $a->text; // "click
  }

  public function parseFromUrl(string $url='https://ria.ru/world/')
  {
      $this->dom->loadFromUrl($url);
      $html = $this->dom->outerHtml;
      $this->dom->loadStr($html);

      $contents = $this->dom->find('.list-item');
      echo count($contents);
     foreach ($contents as $content)
      {
          // get the class attr
          $class = $content->getAttribute('class');

          // do something with the html
          $html = $content->innerHtml;

          // or refine the find some more
          $child   = $content->firstChild();
          $sibling = $child->nextSibling();
      }
  }


}
