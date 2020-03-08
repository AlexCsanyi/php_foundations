<?php 
    class File{
        public $fileHandler;
        public $fileName;
        public $fileSize;
        public $content;
        public $fileFound;

        function __construct($fileName = ''){
            $this->fileHandler = null;
            $this->fileFound = false;
            
            if(file_exists($fileName)){
                if(is_file($fileName)){
                    $this->fileFound = true;
                }
            }

            if($this->fileFound){
                $this->fileHandler = fopen($fileName, "r");
                $this->fileSize = filesize($fileName);
            }
        }

        function getContent(){
            if($this->fileFound){
                $content = fread($this->fileHandler, $this->fileSize);
                return $content . PHP_EOL;
            }else{
                return "No files found";
            }
        }

        function __destruct(){
            if($this->fileFound){
                fclose($this->fileHandler);
                echo "File is now closed";
            }
        }
    }

    $file1 = new File("Test.txt");
    echo $file1->getContent();
?>