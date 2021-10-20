
<?php
/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: Controller File
 * 
 */

class Login extends Controller
{
    private $loginModel;

    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($_POST['username']),
                'password' => hash('sha256', trim($_POST['password'])),
                'usernameError' => '',
                'passwordError' => ''
            ];

            $this->loginModel = $this->model("Authlogin");

            if ($this->loginModel->username($data['username'])) {
                $data['usernameError'] = "This user doesn't exists.";
            } elseif ($this->loginModel->login($data['username'], $data['password'])) {
                $this->session = $this->model("Session");
                $this->session->create($data['username'], $data['password']);
            } else {

                $data['passwordError'] = "Invalid login credentials.";
            }
        }
        $this->view('registration/login', $data);
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('location:' . URLROOT . '/login');
    }
}
