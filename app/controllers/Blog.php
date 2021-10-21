<?php
class Blog extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }




    public function index() {

        $posts = $this->postModel->findAllPosts();

        $data = [
            'posts' => $posts
        ];

        $this->view('blog/index', $data);
    }

    public function create() {


        $data = [
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => 104,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'titleError' => '',
                'bodyError' => ''
            ];

            if(empty($data['title'])) {
                $data['titleError'] = 'The title of a post cannot be empty';
            }

            if(empty($data['body'])) {
                $data['bodyError'] = 'The body of a post cannot be empty';
            }

            if (empty($data['titleError']) && empty($data['bodyError'])) {
                if ($this->postModel->addPost($data)) {
                    header('location:' . URLROOT . '/blog/index');
                } else {
                    die("Something went wrong, please try again!");
                }
            } 
        }

        $this->view('blog/create', $data);
    }


    public function update($id)
    {

        $post = $this->postModel->findPostById($id);


        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'post' => $post,
                'user_id' => 104,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'titleError' => '',
                'bodyError' => ''
            ];

            if (empty($data['title'])) {
                $data['titleError'] = 'The title of a post cannot be empty';
            }

            if (empty($data['body'])) {
                $data['bodyError'] = 'The body of a post cannot be empty';
            }




            if ($data['title'] == $this->postModel->findPostById($id)->title) {
                $data['titleError'] = 'At least change the title!';
            }

            if ($data['body'] == $this->postModel->findPostById($id)->body) {
                $data['bodyError'] = 'At least change the body!';
            }

            if (empty($data['titleError']) && empty($data['bodyError'])) {
                if ($this->postModel->updatePost($data)) {
                    header("Location: " . URLROOT . "/blog/index");
                } else {
                    die("Something went wrong, please try again!");
                }
            } 
        }

        $this->view('blog/update', $data);
    }






//     public function update($id)
//     {

//         $post = $this->postModel->findPostById($id);

//         if (!isLoggedIn()) {
//             header("Location: " . URLROOT . "/blog");
//         } elseif ($post->user_id != $_SESSION['user_id']) {
//             header("Location: " . URLROOT . "/blog");
//         }

//         $data = [
//             'post' => $post,
//             'title' => '',
//             'body' => '',
//             'titleError' => '',
//             'bodyError' => ''
//         ];

//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//             $data = [
//                 'id' => $id,
//                 'post' => $post,
//                 'user_id' => $_SESSION['user_id'],
//                 'title' => trim($_POST['title']),
//                 'body' => trim($_POST['body']),
//                 'titleError' => '',
//                 'bodyError' => ''
//             ];

//             if (empty($data['title'])) {
//                 $data['titleError'] = 'The title of a post cannot be empty';
//             }

//             if (empty($data['body'])) {
//                 $data['bodyError'] = 'The body of a post cannot be empty';
//             }

//             if ($data['title'] == $this->postModel->findPostById($id)->title) {
//                 $data['titleError'] == 'At least change the title!';
//             }

//             if ($data['body'] == $this->postModel->findPostById($id)->body) {
//                 $data['bodyError'] == 'At least change the body!';
//             }

//             if (empty($data['titleError']) && empty($data['bodyError'])) {
//                 if ($this->postModel->updatePost($data)) {
//                     header("Location: " . URLROOT . "/blog");
//                 } else {
//                     die("Something went wrong, please try again!");
//                 }
//             } else {
//                 $this->view('blog/update', $data);
//             }
//         }

//         $this->view('blog/update', $data);
//     }

//     public function delete($id)
//     {

//         $post = $this->postModel->findPostById($id);

//         if (!isLoggedIn()) {
//             header("Location: " . URLROOT . "/blog");
//         } elseif ($post->user_id != $_SESSION['user_id']) {
//             header("Location: " . URLROOT . "/blog");
//         }

//         $data = [
//             'post' => $post,
//             'title' => '',
//             'body' => '',
//             'titleError' => '',
//             'bodyError' => ''
//         ];

//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//             if ($this->postModel->deletePost($id)) {
//                 header("Location: " . URLROOT . "/blog");
//             } else {
//                 die('Something went wrong!');
//             }
//         }
//     }
// }














    // class end tag
}







   