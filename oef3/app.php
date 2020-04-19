<?php

require_once 'textnode\TextNode.php';

try {
    $n=textnode\TextNode::makeNode("a");
    $n->addNode("b");
    $n->addNode("c");
    $n->printAll();
    $n->printElementAt(2);
} catch (Exception $exception) {
    print($exception);
}

