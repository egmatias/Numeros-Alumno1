<?php

class Duplas
{
    
    public $numero1;
    public $numero2;
    
    public function __construct($uno, $dos)
    {
        $this->numero1 = $uno;
        $this->numero2 = $dos;        
    }
    
    public function sonIguales() 
    {

        if($this->numero1 == $this->numero2){
            return "<h2>Los numeros son iguales.</h2> <br> ";
        }
            return "<h2>Los numeros son distintos.</h2> <br> ";
        
    }

    public function esMultiplo() {
        if($this->numero1 % $this->numero2 == 0 || $this->numero2 % $this->numero1 == 0) 
        {
             return " <h3>Los numeros son multiplos entre si.</h3> <br>";
         }
             return "<h3>Los numeros <b>no</b> son multiplos entre si.</h3><br>";
    }

    public function sonPares(){

        if($this->numero1 % 2 == 0 && $this->numero2 % 2 == 0) {

            return "<h4>Los numeros son pares.</h4>";
        }
        if($this->numero1 % 2 == 0 && $this->numero2 % 2 != 0) {

            return "<h4>Primer numero es par pero el segundo numero no lo es.</h4>";
        }

        if($this->numero1 % 2 != 0 && $this->numero2 % 2 == 0) {

            return "<h4>El primer numero no es par y el segundo numero si es par.</h4>";
        }
        return "<h4>Ninguno de los dos numeros es par.</h4>";
    }

}

?>