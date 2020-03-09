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
    $livro2 = new Book("Biblia", "Deus", 100);
    $livro3 = new Book("Gang", " Bang", 17);
    $livro4 = new Book("Olah", "John", 10);

    $carrinhoCompras = array($livro1, $livro2, $livro3, $livro4);

    //Calcular o total
    function getTotal($carrinhoCompras){
        $total = 0;
        foreach($carrinhoCompras as $livro){
            $total += $livro->getPrice();
        }
        return $total;
    }

    function titulosDesconto($carrinhoCompras){
        $titulo = arra();
        foreach($carrinhoCompras as livro){
            if($livro->getPrice() >20){
                array_push($titulos, $livro->getTitle());
            }
        }
        return $titulos;
    } 
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

    <h2>TOTAL: <?php echo getTotal($carrinhoCompras); ?>€</h2>
    <h2>LIVROS COM DESCONTO: <?php 
        foreach(titulosDesconto($carrinhoCompras) as $titulos)
    ?></h2>

</body>    
</html>