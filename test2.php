<?php
    $xml = <<< XML
    <?xml version="1.0" encoding="utf-8"?>
    <books>
     <book>Patterns of Enterprise Application Architecture</book>
     <book>Design Patterns: Elements of Reusable Software Design</book>
     <book>Clean Code</book>
    </books>
    XML;

    $dom = new DOMDocument;
    $dom->loadXML($xml);
    $books = $dom->getElementsByTagName('book');
    foreach ($books as $book) {
        echo "<pre>";
        echo $book->nodeValue, PHP_EOL;
        echo "</pre>";
    }
?>