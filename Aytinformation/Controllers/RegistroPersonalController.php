<?php
require '../Models/RegistroPersonal.php';

$class = new CreateIngressProdController();

if ($_POST) {
    $class->saveIngress($_POST);
} else {
    $class->newIngress();
}

class CreateIngressProdController
{
    /**
     * @var IngressProd
     */
    private $IngresoPerson;

    /**
     * CreateIngressProdController constructor.
     */
    function __construct ()
    {
        $this->IngresoPerson = new IngresoPerson();
    }

    /**
     * @return void
     */
    public function newIngress()
    {
        require_once '../Views/RegisterPersons.php';
    }

    /**
     * @param array $post
     * @return void
     */
    public function saveIngress(array $post)
    {
        $response = $this->IngresoPerson->saveIngress($post);
        if ($response) {
            $data = $this->IngresoPerson->getInvenEm();
            require_once '../Views/RegistroUsuario.php';
        } else {
            require_once '../Views/RegisterPersons.php';
        }
    }
}