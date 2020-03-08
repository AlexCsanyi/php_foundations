<?php 
    class Posts {
        public $content;

        function __construct($content){
            echo "This is the Constructor!" . PHP_EOL;
            $this->content = $content;
        }

         function __destruct(){
            echo "This is the Destructor!" . PHP_EOL;
        }

        function printContent(){
            echo $this->content . PHP_EOL;
            return $this;
        }
    }

    $post1 = new Posts("This is my content");
    echo $post1->printContent()->content;
?>