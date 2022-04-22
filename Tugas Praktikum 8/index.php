<?php

class Book{
    private $code_book;
    private $name;
    private $qty;

    private function setCodeQty($code_book, $name, $qty){
        $this->code_book = $code_book;
        $this->name = $name;
        $this->qty = $qty;
    }

    public function __construct($code_book, $name, $qty)
    {
        $this->setCodeQty($code_book, $name, $qty);
    }

    public function getCodeQty(){
        if(preg_match("/^[A-Z]{2}[0-9]{2}$/", $this->code_book) ){
            if($this->qty < 1){
            return "ERROR..! Format salah.";
            }
            return $this->code_book . $this->name . $this->qty;
        }else{
            return "ERROR..! Format tidak sesuai.";
        }   
    }
}

$book = new Book('BB09', 'HarryPotter', 140);
echo $book->getCodeQty();

?>
