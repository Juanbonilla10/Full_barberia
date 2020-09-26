<?php
require '../Models/NewService.php';

$class = new NewServiceController();

if ($_POST) {
    $class->saveIngress($_POST);
} else {
    $class->newIngress();
}

class NewServiceController
{
    /**
     * @var Service
     */
    private $Service;

    /**
     * RegisterPersonController constructor.
     */
    function __construct ()
    {
        $this->Service = new NewService();
    }

    /**
     * @return void
     */
    public function newIngress()
    {
        require_once '../Views/NewServiceAyt.php';
    }
    public function getIngress() 
	{

		//print_r($this->ingresoPro->getInventory());die;
		$data = $this->Service->getIngress();
		require_once '../Views/NewServiceAyt.php';
	}

    /**
     * @param array $post
     * @return void
     */
    public function saveIngress(array $post)
    {
        $response = $this->Service->saveIngress($post);
        
        if ($response) {
            $data = $this->Service->getIngress();
            require_once '../Views/NewServiceAyt.php';
        } else {
            require_once '../Views/NewServiceAyt.php';
        }
    }
}

