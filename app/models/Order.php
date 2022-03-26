<?php

class Order
{
    public function __construct()
    {
        $this->db = new Database;
        $this->api = new API;
    }

    public function create($data)
    {
        $array = [
            'gigid' => $data['gigid'],
            'tuid' => $data['tuid'],
            'stuid' => $_SESSION['roledata']['stid'],
            'orderid' => $data['orderid'],
            'type' => 'gig',
            'fee' => $data['price'],
            'purchasedate' => date('Y-m-d H:i:s'),
            'deadline' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . ' +' . $data['duration'] . ' day')),
        ];

        if ($response = $this->api->usercall('POST', APIURL . 'order/create', json_encode($array))) {
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                $orderid = json_decode($response)->response->result->order_id;
                return $orderid;
            } elseif ($status == 302) {
                include APPROOT . "/views/includes/modals/modal-relog.php";
            } else {
                $msg = json_decode($response)->response->result->message;
                $_SESSION['toastmsg'] = $msg;
                include APPROOT . "/views/includes/errortoast.php";
            }
        }
    }

    public function getClass($data)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'order/class', json_encode($data))) {
            $responseArray = (array)json_decode($response);
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                $result = (array)$responseArray["response"];
                return $result;
            } elseif ($status == 302) {
                include APPROOT . "/views/includes/modals/modal-relog.php";
            } else {
                $msg = json_decode($response)->response->result->message;
                $_SESSION['toastmsg'] = $msg;
                include APPROOT . "/views/includes/errortoast.php";
                return false;
            }
        }
    }

    public function tutorGetClass($data)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'tutor/class', json_encode($data))) {
            $responseArray = (array)json_decode($response);
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                $result = (array)$responseArray["response"];
                return $result;
            } elseif ($status == 302) {
                include APPROOT . "/views/includes/modals/modal-relog.php";
            } else {
                $msg = json_decode($response)->response->result->message;
                $_SESSION['toastmsg'] = $msg;
                include APPROOT . "/views/includes/errortoast.php";
                return false;
            }
        }
    }

    public function tutorClasses($tutor)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'tutor/tutorclasses', json_encode($tutor))) {
            $responseArray = (array)json_decode($response);
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                $result = (array)$responseArray["response"];
                return $result;
            } elseif ($status == 302) {
                include APPROOT . "/views/includes/modals/modal-relog.php";
            } else {
                return false;
            }
        }
    }

    public function studentClasses($student)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'order/studentclasses', json_encode($student))) {
            $responseArray = (array)json_decode($response);
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                $result = (array)$responseArray["response"];
                return $result;
            } elseif ($status == 302) {
                include APPROOT . "/views/includes/modals/modal-relog.php";
            } else {
                return false;
            }
        }
    }

    public function acceptClass($classid)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'tutor/acceptclass', json_encode($classid))) {
            $responseArray = (array)json_decode($response);
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                $result = (array)$responseArray["response"];
                return $result;
            } elseif ($status == 302) {
                include APPROOT . "/views/includes/modals/modal-relog.php";
            } else {
                $msg = json_decode($response)->response->result->message;
                $_SESSION['toastmsg'] = $msg;
                include APPROOT . "/views/includes/errortoast.php";
                return false;
            }
        }
    }

    public function studentFeedback($data)
    {
        $response = $this->api->usercall('POST', APIURL . 'order/studentfeedback', json_encode($data));
        $status = json_decode($response)->response->status;
        if ($status == 200) {
            return true;
        } elseif ($status == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else {
            return false;
        }
    }

    public function tutorFeedback($data)
    {
        $response = $this->api->usercall('POST', APIURL . 'tutor/tutorfeedback', json_encode($data));
        print_r($response);
        $status = json_decode($response)->response->status;
        if ($status == 200) {
            return true;
        } elseif ($status == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else {
            return false;
        }
    }

    public function askRevision($data)
    {
        $response = $this->api->usercall('POST', APIURL . 'order/askrevision', json_encode($data));
        $status = json_decode($response)->response->status;
        if ($status == 200) {
            return true;
        } elseif ($status == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else {
            return false;
        }
    }

    public function askforreview($data)
    {
        $response = $this->api->usercall('POST', APIURL . 'tutor/askforreview', json_encode($data));
        $status = json_decode($response)->response->status;
        if ($status == 200) {
            return true;
        } elseif ($status == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else {
            return false;
        }
    }
}
