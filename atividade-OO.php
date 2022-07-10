<?php
$object             = new Vendedor;
$object -> nome     = "Marcos Paulo";
$object -> idade    = "32 anos";
$object -> senha    = "Mp?123";
$object -> cidade   = "São Paulo";
$object -> telefone = "011 00345 6000";
$object -> email    = "marcospp@bloggs.com";
$object -> display ();

class Usuario
{
  public $nome, $idade, $senha, $cidade;    
}

class Vendedor extends Usuario
{
    public $telefone, $email;

    function display()
    {
        echo "Nome:     " . $this-> nome     . "<br>";
        echo "Idade:    " . $this-> idade    . "<br>";
        echo "Senha:    " . $this-> senha    . "<br>";
        echo "Cidade:   " . $this-> cidade   . "<br>";
        echo "Telefone: " . $this-> telefone . "<br>";
        echo "email:    " . $this-> email;
    }
}
?>


  
