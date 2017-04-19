<?php
    require __DIR__.'/../class/clsInterface/DocumentStore.php';
    require __DIR__.'/../class/clsInterface/HtmlDocument.php';
    require __DIR__.'/../class/clsInterface/StreamDocument.php';
    require __DIR__.'/../class/clsInterface/CommandOutputDocument.php';

    $documentStore = new DocumentStore();

    $htmlDoc = new HtmlDocument('http://chung.interpark.com');
    $documentStore->addCoument($htmlDoc);

    $streamDoc = new StreamDocument(fopen(__DIR__.'/../README.md', 'rb'));
    $documentStore->addCoument($streamDoc);

    $cmdDoc = new CommandOutputDocument('ll /etc/hosts');
    $documentStore->addCoument($cmdDoc);

    //print_r($documentStore->getDocument());
?>
<ul>
    <li>
        <p name="tab">인터페이스 Documentable</p>
        <pre name="pre" style="display:none">
            <span class="comment">// Interface</span>
            interface Documentable
            {
                public function getId();

                public function getContent();
            }
        </pre>
    </li>
    <li>
        <p name="tab">DocumentStore</p>
        <pre name="pre" style="display:none">
            class DocumentStore
            {
                protected $data = [];

                public function addCoument(Documentable $document){
                    $key = $document->getId();
                    $value = $document->getContent();
                    $this->data[$key] = $value;
                }

                public function getDocument(){
                    return $this->data;
                }
            }
        </pre>
    </li>
    <li>
        <p name="tab">HtmlDocument</p>
        <pre name="pre" style="display:none">
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
        </pre>
    </li>
    <li>
        <p name="tab">Streamdocument</p>
        <pre name="pre" style="display:none">
            require_once 'Documentable.php';
            class Streamdocument implements Documentable{
                protected $resource;
                protected $buffer;

                public function __construct($resource, $buffer = 4096){
                    $this->resource = $resource;
                    $this->buffer = $buffer;
                }

                public function getId(){
                    return 'resource-'.(int)$this->resource;
                }

                public function getContent(){
                    $streamContent = '';
                    rewind($this->resource);
                    while (feof($this->resource) === false){
                        $streamContent .= fread($this->resource, $this->buffer);
                    }
                    return $streamContent;
                }
            }
        </pre>
    </li>
    <li>
        <p name="tab">CommandOutputDocument</p>
        <pre name="pre" style="display:none">
            require_once 'Documentable.php';
            class CommandOutputDocument implements Documentable
            {
                protected $command;

                public function __construct($command){
                    $this->command = $command;
                }

                public function getId(){
                    return $this->command;
                }

                public function getContent(){
                    return shell_exec($this->command);
                }
            }
        </pre>
    </li>
    <pre>
        require __DIR__.'/../class/clsInterface/DocumentStore.php';
        require __DIR__.'/../class/clsInterface/HtmlDocument.php';
        require __DIR__.'/../class/clsInterface/StreamDocument.php';
        require __DIR__.'/../class/clsInterface/CommandOutputDocument.php';

        $documentStore = new DocumentStore();

        $htmlDoc = new HtmlDocument('http://chung.interpark.com');
        $documentStore->addCoument($htmlDoc);

        $streamDoc = new StreamDocument(fopen(__DIR__.'/../README.md', 'rb'));
        $documentStore->addCoument($streamDoc);

        $cmdDoc = new CommandOutputDocument('ll /etc/hosts');
        $documentStore->addCoument($cmdDoc);

        print_r($documentStore->getDocument());
    </pre>
</ul>

<br>
<a href="ch_6-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
<script>
    $(function(){
        $('p[name=tab]').on('click', function(){
            $(this).parent().find('pre[name=pre]').toggle('hide');
        });
    });
</script>