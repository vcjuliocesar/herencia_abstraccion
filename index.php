<?

abstract class Persona{
    
    protected $Nombre;
    
    public function __construct($Nombre)
    {
        $this->Nombre=$Nombre;
    }
    
    abstract public function Saludar();
}


class Contacto extends Persona{
    
    public function Saludar()
    {
        echo "<p>Hola {$this->Nombre} como estas</p>";
    }
}


class User extends Persona{
    
    public function Saludar()
    {
        echo "<p>Bienvenido al sistema {$this->Nombre}</p>";
    }
}


$person = new Contacto("Julio");
$person->Saludar();


$user = new User("jvaladez");
$user->Saludar();