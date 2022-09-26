<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth(){
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $url = 'https://softonauts.com/clients/Android/users-login';
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM';

        $data = array('Authorization' => $token,
            'username' => $email,
            'password' => $password,
            'fcm_id' => '');

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $data,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $res = json_decode($response, true);
    
        if($res['code'] == 200){
            $ses_data = [
                'user_id'       => $res['data']['id'],
                'user_name'     => $res['data']['first_name'].' '.$res['data']['last_name'],
                'user_email'    => $res['data']['email'],
                'logged_in'     => TRUE
            ];
            $session->set($ses_data);
            $session->setFlashdata('msg', 'Login successfully!.');
            return redirect()->to('dashboard');
        }else{
            $session->setFlashdata('msg', $res['message']);
            return redirect()->to('/');
        }  
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
