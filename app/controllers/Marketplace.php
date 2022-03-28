
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

class Marketplace extends Controller
{

    public function __construct()
    {
        session_start();
    }


    public function index($affiliatelink = array())
    {

        if (!empty($affiliatelink)) {
            setcookie('affiliatelink', $affiliatelink, time() + 86400, '/', null, null, true);
            if (!isset($_COOKIE['affiliatelink'])) {
                echo "Cookie named  '" . 'Affiliatelink' . "' is not set!";
            } else {
                echo "Cookie '" . 'Affiliatelink' . "' is set!<br>";
                echo "Value is: " . $_COOKIE['affiliatelink'];
            }
        }
        $services = $this->model('Gig');
        $data = $services->getAllGigs();
        $this->view('marketplace/marketplace', $data["result"]);
    }

    public function service($optional = array())
    {
        if (!empty($optional)) {
            $service = $this->model('Gig');
            $array = [
                'gigid' => $optional,
            ];

            $data = $service->getGigDetails($array);
            $result =  (array)$data["result"][0];
            $gigd = [
                'gigid' => $optional,
                'tutorid' => $result['tuid'],
            ];
            $reviews = $service->gigDetails($gigd);
            $result2 = (array)$reviews['result'];

            $servicegig = [
                'gigdetails' => $result,
                'reviews' => $result2,
            ];

            if (isset($data['result']->message)) {
                die(header('location:' . URLROOT . '/marketplace'));
            } else {
                $this->view('marketplace/pages/service', $servicegig);
            }
        } else {
            die(header('location:' . URLROOT . '/marketplace'));
        }
        $this->view('marketplace/pages/service');
    }

    public function payment()
    {
        $this->view('marketplace/pages/payment');
    }
    public function gigdetail()
    {
        $this->view('marketplace/pages/gigdetail');
    }

    public function paymentcompleted()
    {
        $this->view('marketplace/pages/paymentcompleted');
    }
}
