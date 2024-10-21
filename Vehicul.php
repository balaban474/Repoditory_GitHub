<?php
interface Vehicul
{
    public function  porneste();
    public function opreste();
}
abstract class VehiculMotorizat implements Vehicul
{
    protected $marca;
    protected $model;
    protected $anFabricatie;
    protected $capacitateMotor;

    public function __construct($marca, $model, $anFabricatie, $capacitateMotor)
    {
        $this->marca = $marca;
        $this->model = $model;
        $this->anFabricatie = $anFabricatie;
        $this->capacitateMotor = $capacitateMotor;
    }
    public function porneste()
    {
        echo "$this->marca porneste";
    }
    public function opreste()
    {
        echo "$this->marca opreste";
    }

    abstract public function tipComustibil();

    public function afiseazaDetalii()
    {
       parent::afiseazaDetalii();
       echo $this->tipComustibil();
    }
}

class Masina extends VehiculMotorizat
{
    public function tipComustibil()
    {
        return "Benzina";
    }
   
}
class Motocicleta extends VehiculMotorizat
{
    public function tipComustibil()
    {
        return "Motorina";
    }
    public function afiseazaDetalii()
    {
       parent::afiseazaDetalii();
       echo $this->tipComustibil();
    }
}
class GestionareVehicule{
    private static $vehicole = [];
    public static function adauga(VehiculMotorizat $vehiculMotorizat){
        self::$vehicole[] = $vehiculMotorizat;
    }
    public static function afiseaza()
    {
        foreach(self::$vehicole as $vehicul){
            $vehicul->afiseazaDetalii();
                 echo"<hr>";
            }
           
        }
    }
    $masina1= new Masina("Toyoto ","Carolla",2018,1.8);
    $masina2 = new Masina("Honda","Civic",2020,2.0);
    $masina3= new Masina ("Mercedes","GLE",2024,4,3);
    $motocicleta1 = new Motocicleta("BMW","S1000RR",2009,1.0);
    $motocicleta2 = new Motocicleta("Yamaha","R1",2009,1.0);

    GestionareVehicule::adauga($masina1);
    GestionareVehicule::adauga($masina2);
    GestionareVehicule::adauga($masina3);
    GestionareVehicule::adauga($motocicleta1);
    GestionareVehicule::adauga($motocicleta2);


    GestionareVehicule::afiseaza();
    


?>
