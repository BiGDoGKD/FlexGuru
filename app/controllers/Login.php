
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

            $session = $this->model('Session');
            $data['passwordError'] = $session->create($data);
        }
        $this->view('registration/login', $data);
    }
}
