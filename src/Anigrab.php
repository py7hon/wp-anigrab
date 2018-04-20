<?php
namespace Ospek;
use Jikan\Jikan;
use Mustache_Engine;
use MalApi\Api;
class Anigrab
{
    private $id;
    private $tag;
    private $data;
    private $img;
    private $content;
    public $collection;
    public $validate;
    
    public function __construct($data) 
    {
        if(preg_match('`\[(anigrab)=(.*?)\](.+?)\[/\1\]`', $data)) {
            $this->data = $data;
            $this->validate = true;
        
        } else {
            $this->validate = false;
        }
        
    } // end construct
        
    public function startGrab()
    {
        $this->aniBb();
        $id = $this->id;
        $jikan = new Jikan;
        $anime = $jikan->Anime($id)->response;
        foreach($anime as $key=>$value) {
            if(is_array($value)) {
                unset($anime[$key]);
            }
        }
        $this->img = $anime["image_url"];
        $this->collection = $anime;
    } // end startGrab

    private function aniBb() 
    {
        preg_match('`\[(anigrab)=(.*?)\](.+?)\[/\1\]`', $this->data, $matches);
        list($tag, $param, $innertext) = array($matches[1], $matches[2], $matches[3]);
        $this->content = $innertext;
        if (ctype_digit($param)) {
            $this->id = (int)$param; 
        } else {
            $api = new Api;
            $url = $param;
            $anime = $api->getAnime($url);
            $this->id = (int)$anime->getExternalId();
        }
            
            $this->tag = $tag;
    } // end aniBb

    private function aniDump() 
    {
        $info = $this->collection;
        unset($info["image_url"]);
        $ret = "<img src=\"{$this->img}\" alt=\"poster\"/> <br> \n";
        $ret .= "[ <a href=\"{$info['link_canonical']}\" target=\"_blank\">go to</a> myanimelist page ] <br> <br> \n";
        unset($info["link_canonical"]);
        foreach ($info as $key => $value) {
            $ret .= "<strong>$key:</strong> $value <br> <br>\n";
        }
        return $ret;
    } // end aniDump
    
    public function render()
    {
        if ($this->content=="dump") {
            $out = $this->aniDump();
            return $out;
        } else {
            $m = new Mustache_Engine;
            return $m->render($this->content, $this->collection);
        }
    } // end render
   
}