<?php namespace textnode;

class TextNode
{
    private $nextNode;
    private $text;
    private function __construct($text)
    {
        $this->nextNode = null;
        $this->text = $text;
    }
    public static function makeNode($text)
    {
        return new TextNode($text);
    }

    public function addNode($text)
    {
        if($this->nextNode==null){
            $this->nextNode=self::makeNode($text);
        }
        else{
            $this->nextNode->addNode($text);
        }
    }

    public function printAll()
    {
        print($this->text);
        if($this->nextNode !=null){
            $this->nextNode->printAll();
        }
    }

    public function printTextNodeAt($i) {

        if ($i < 0) {
            throw new \Exception("Invalid input");
        }

        //werkt niet?
        $this->text[$i];
    }
}