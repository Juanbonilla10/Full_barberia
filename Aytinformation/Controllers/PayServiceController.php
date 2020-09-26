<?php
require '../Models/PayService.php';

$class = new PayServiceController();

if ($_POST) {
    $class->saveIngress($_POST);
} else {
    $class->newIngress();
}

class PayServiceController
{
    /**
     * @var RegisterPerson
     */
    private $payservicecontroller;

    /**
     * RegisterPersonController constructor.
     */
    function __construct ()
    {
        $this->payservicecontroller = new PayService();
    }

    /**
     * @return void
     */
    public function newIngress()
    {
        require_once '../Views/PayServiceEmployee.php';
    }
    public function getIngress() 
	{

		//print_r($this->ingresoPro->getInventory());die;
		$data = $this->payservicecontroller->getIngress();
		require_once '../Views/PayServiceEmployee.php';
	}

    /**
     * @param array $post
     * @return void
     */
    public function saveIngress(array $post)
    {
        $response = $this->payservicecontroller->saveIngress($post);
        
        if ($response) {
            $data = $this->payservicecontroller->getIngress();
            require_once '../Views/PayServiceEmployee.php';
        } else {
            require_once '../Views/PagoServicio.php';
        }
    }
}

