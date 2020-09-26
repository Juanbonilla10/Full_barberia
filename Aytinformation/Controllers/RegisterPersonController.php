<?php
require '../Models/RegisterPerson.php';

$class = new RegisterPersonController();

if ($_POST) {
    $class->saveIngress($_POST);
} else {
    $class->newIngress();
}

class RegisterPersonController
{
    /**
     * @var RegisterPerson
     */
    private $registerPerson;

    /**
     * RegisterPersonController constructor.
     */
    function __construct ()
    {
        $this->registerPerson = new RegisterPerson();
    }

    /**
     * @return void
     */
    public function newIngress()
    {
        require_once '../Views/RegisterPersons.php';
    }
    public function getIngress() 
	{

		//print_r($this->ingresoPro->getInventory());die;
		$data = $this->IngreCliente->getIngress();
		require_once '../Views/RegisterPersons.php';
	}

    /**
     * @param array $post
     * @return void
     */
    public function saveIngress(array $post)
    {
        $response = $this->registerPerson->saveIngress($post);
        
        if ($response) {
            $data = $this->registerPerson->getIngress();
            require_once '../Views/RegisterPersons.php';
        } else {
            require_once '../Views/PagoServicio.php';
        }
    }
}

