<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Med.php';
require_once __DIR__.'/../repository/MedRepository.php';

class MedController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $messages = [];
    private $medRepository;

    public function __construct()
    {
        parent::__construct();
        $this->medRepository = new MedRepository();
    }

    public function addpill()
    {
        if($this->isPost()&& is_uploaded_file($_FILES['file']['tmp_name'])&& $this->validate($_FILES['file']))  {
           move_uploaded_file(
               $_FILES['file']['tmp_name'],
               dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
           );

            $med = new Med($_POST['name'],$_POST['description'],$_POST['group'],$_FILES['file']['name']);
            $this->medRepository->addpill($med);

            return $this->render('pills',['messeges'=>$this->messages, 'pill'=>$med]);
        }

        $this->render('addpill',['messeges'=>$this->messages]);
    }

    private function validate(array $file):bool
    {
        if($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[]='File is too large';
            return false;

        }

        if(isset($file['type']) && !in_array($file['type'],self::SUPPORTED_TYPES)) {
            $this->messages[]='File type is not supported';
            return false;

        }
        return true;
    }
}