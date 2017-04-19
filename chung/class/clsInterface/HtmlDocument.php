<?php
    require_once 'Documentable.php';
    class HtmlDocument implements Documentable
    {
        protected $url;

        public function __construct($url){
            $this->url = $url;
        }

        public function getId(){
            return $this->url;
        }

        public function getContent(){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // 인증서 체크
            curl_setopt ($ch, CURLOPT_SSLVERSION,6); // SSL 버젼
            $html = curl_exec($ch);

            //var_dump(curl_errno($ch), curl_error($ch));

            curl_close($ch);

            return $html;
        }
    }
?>