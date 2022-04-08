<?php
class Pages extends Controller
{

   public function __construct()
   {
      $this->userModel = $this->model('userModel');
   }

   public function home()
   {
      // retrieving stored data
      $userData = $this->userModel->getUserData();

      // Posting data in POST
      if ($_SERVER['REQUEST_METHOD'] == 'POST')
      {
         $data = [
            'fName' => trim($_POST['firstName']),
            'lName' => trim($_POST['lastName']),
            'age' => trim($_POST['age']),
            'fName_error' => '',
            'lName_error' => '',
            'age_error' => '',
            'userData' => $userData
         ];

         if ($data['fName'] == '') $data['fName_error'] = "Enter your first name!";
         if ($data['lName'] == '') $data['lName_error'] = "Enter your last name!";
         if ($data['age'] == '') $data['age_error'] = "Enter your age!";

         if (empty($data['fName_error']) && empty($data['lName_error']) && empty($data['age_error']))
         {
            var_dump($data);
            $response = $this->userModel->storeData($data['fName'], $data['lName'], $data['age']);
            redirect('Pages/home');
         }
         else
         {
            $this->view('index', $data);
         }
      }
      // Loading home page in non-POST
      else
      {
         $data = [
            'fName' => '',
            'lName' => '',
            'age' => '',
            'fName_error' => '',
            'lName_error' => '',
            'age_error' => '',
            'userData' => $userData
         ];

         $this->view('index', $data);
      }
   }
   public function notFound()
   {
      $this->view('404');
   }
   public function accessDenied()
   {
      $this->view('403');
   }
}
