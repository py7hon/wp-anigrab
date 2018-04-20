<?php
namespace Ospek;
use Exception;
class WpAnigrab
{
    public static function aniRender($data,$postarr) 
    {
        $post = $data['post_content'];
        $anigrab = new Anigrab($post);
        if ($anigrab->validate) {
            preg_match('`\[(anigrab)=(.*?)\](.+?)\[/\1\]`', $post, $tgs);
            $replace = "<!--powered by anigrab (https://os-pek.github.io)--> \n";
            $replace .= "<!--{$tgs[0]}--> \n";
            try {
                $anigrab->startGrab();

                $replace .= $anigrab->render();
            }
            catch(Exception $e){
                $err = strtoupper($e->getMessage());
                $replace .= "===== ERROR RENDERING! ===== \n\n $err \n\n===== powered by anigrab =====";
            }
            $replaced = preg_replace('`\[(anigrab)=(.*?)\](.+?)\[/\1\]`', $replace, $post);
            $data['post_content'] = $replaced;
        }
        return $data;
    }
    public static function register() 
    {
        add_filter('wp_insert_post_data', '\Ospek\WpAnigrab::aniRender', '99', 2);
    }
}