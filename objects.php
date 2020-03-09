<?php
    class Book
    {
        //properties
        private $title;
        private $author;
        private $price;

        //constructor
        function __construct($title, $author, $price){
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
        }

        //methods
        function getTitle(){
            return $this->title;
        }

        function getAuthor(){
            return $this->author;
        }

        function getPrice(){
            return $this->price;
        }
    }

    //Instance a book object

    /*$harrypotter = new Book;
    $harrypotter->title = "Harry Potter";
    $harrypotter->author = "J.K. Rowling";
    $harrypotter->price = 20.79;*/

    $livro1 = new Book("Harry Potter", "J.K. Rowling", 20.79);
    $livro2 = new Book("Biblia", "Deus", 99999);
    $livro3 = new Book("Gang", " Bang", 420);
    $livro4 = new Book("Olah", "John", 37);

    $carrinhoCompras = array($livro1, $livro2, $livro3, $livro4);
    
?>
<!DOCTYPE html>
<html>
<head>
    <title> PHP objects </title>
</head>
<body>
    

    <h1>Carrinho de Compras</h1>

    <?php foreach($carrinhoCompras as $livro){ ?>
        <h1><?php echo $livro->getTitle(); ?></h1>
        Author <?php echo $livro->getAuthor(); ?> <br>
        <strong><?php echo $livro->getPrice(); ?> </strong>
    <?php } ?>

    <h1><?php //TODO ?></h1>

</body>    
</html>