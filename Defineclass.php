<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Books{
        var $price;
        var $title;
        function setPrice($par){
            $this -> price = $par;
           
        }
        function getPrice(){
            echo $this -> price. "</br>";
        }
       function setTitle($par){
        $this -> title = $par;
       }
       function getTitle(){
        echo $this -> title. "</br>";
      }
    function __construct($par1, $par2){
        $this -> price = $par1;
        $this -> title = $par2;
    }
     }
    // $physics = new Books;
    // $mathe = new Books;
    // $chemistry = new Books;

    $physics = new Books ("Physics 1st paper", 10);
    $mathe = new Books ("Mathematics 1st paper", 700) ;
    $chemistry = new Books ("Chemistry 1st paper", 780);

    // $physics -> setPrice (100);
    // $mathe -> setPrice (300) ;
    // $chemistry -> setPrice (350); 

    $physics -> getTitle();
    $mathe -> getTitle() ;
    $chemistry -> getTitle();

    $physics -> getPrice();
    $mathe -> getPrice() ;
    $chemistry -> getPrice();

    
    ?>


</body>
</html>