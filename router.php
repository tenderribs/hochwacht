 <?php 
    function route($page) {        
        if ($page == '') {
            //empty page in url, check if there are any actions requested
            // $request = $_POST;
            // if ($action == 'register') {
            //     // echo 'pdo '.isset($pdo);
            //     $result = authRegister($pdo,$request);
            //     if ($result) {
            //         //if succesfully logged in, display welcome page
            //         // displayHomePage($lang);
            //         require_once('pages/manage.php');
            //     }
            // }   else if ($action == 'login') {
            //     $result = authLogin($pdo,$request);
            //     if ($result) {
            //         //if succesfully logged in, display welcome page
            //         // displayHomePage($lang);
            //         require_once('pages/manage.php');
            //     }
                
            // }   else if ($action == 'logout') {
            //     authLogout($pdo,$request);
            // }   else if ($action == 'storeBlogPost') {
            //     storeBlogPost($pdo,$request);
            // }   else {
            //     //if there was no action found in the URL then display the homepage with the according language
                // displayHomePage($lang);
            // }
        require_once('pages/home.html');
        } else if ($page == 'biber') {            
            require_once('pages/biber.html');
        } else if ($page == 'pfadi') {
            require_once('pages/pfadi.html');
        }  else if ($page == 'pios') {
            require_once('pages/pios.php');
        } else if ($page == 'woelfli') {
            require_once('pages/woelfli.php');
        }
        // else if ($page == 'blog') {
        //     require_once('pages/blog.html');
        // }
        // else if ($page == 'login') {
        //     require_once('pages/login.html');
        // }
        // else if ($page == 'register') {
        //     require_once('pages/register.html');
        // }
        // else if ($page == 'welcome') {
        //     require_once('pages/welcome.php');
        // }
    }
 ?>
