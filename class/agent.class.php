<?php



class agent {

    /*

     * getAdminUser()

     * @return type

     */



    public function getAdminUser() {

        $ss__user = "SELECT count(id_user) as countMember  FROM `user` ";

        return $this->getExecute($ss__user, 'single');

    }



    public function getAdminSlider() {

        $ss__user = "SELECT count(id_slider) as countslider  FROM `slider` ";

        return $this->getExecute($ss__user, 'single');

    }



    public function getAdminRes() {

        $ss__user = "SELECT count(id_reservation) as countreservation  FROM `reservation` ";

        return $this->getExecute($ss__user, 'single');

    }



    public function getAdminInvitation() {

        $ss__user = "SELECT count(id_invitation) as countinvitation  FROM `invitation` ";

        return $this->getExecute($ss__user, 'single');

    }



    public function getAdminshoup() {

        $ss__user = "SELECT count(id_shoup) as countshoup  FROM `shoup` ";

        return $this->getExecute($ss__user, 'single');

    }



    /**

     * getAdminPages()

     * @return type

     */

    public function getAdminPages() {

        $ss__page = "SELECT count(id_page) as countPage  FROM `page` ";

        return $this->getExecute($ss__page, 'single');

    }



    public function getAdminemail() {

        $ss__admin = "SELECT admin.admin_email FROM admin";

        return $this->getExecute($ss__admin, 'single');

    }



    /**

     * getAdminCategory()

     * @return type

     */

    /*   public function getAdminCategory() {

      $ss__category = "SELECT count(id_category) as countCategory  FROM `category` ";

      //  exit($ss__category);

      return $this->getExecute($ss__category, 'single');

      } */



    /**

     * getAdminOurClient()

     * @return type

     */

    /* public function getAdminOurClient() {

      $ss__our_client = "SELECT count(id_our_client) as countOurClient  FROM `our_client` ";

      return $this->getExecute($ss__our_client, 'single');

      } */



    /**

     * getAdminLanguage()

     * @return type

     */

    public function getAdminLanguage() {

        $ss__language = "SELECT count(id_language) as countLanguage  FROM `languages`";

        return $this->getExecute($ss__language, 'single');

    }



    /**

     * getAdminProduct()

     * @return type

     */

    public function getAdminCategory() {

        $ss__product = "SELECT count(id_frontcat) as countcat  FROM `frontcat` ";

        return $this->getExecute($ss__product, 'single');

    }



    /**

     * getAdminFaq()

     * @return type

     */

    public function getAdminFaq() {

        $ss__faq = "SELECT count(id_faq) as countFaq  FROM `faq` ";

        return $this->getExecute($ss__faq, 'single');

    }



    /**

     * getAdminTestimonial()

     * @return type

     */

    public function getAdminTestimonial() {

        $ss__testimonials = "SELECT count(id_testimonials) as countTestimonial  FROM `testimonials` ";

        return $this->getExecute($ss__testimonials, 'single');

    }



    /**

     * getAdminOrder()

     * @return type

     */

    public function getAdminOrder() {

        $ss__orders = "SELECT count(order_id) as countOrderProduct  FROM `orders` ";

        return $this->getExecute($ss__orders, 'single');

    }



    /**

     * getAdminSettings()

     * @return type

     */

    public function getAdminSettings() {

        $ss__setting = "SELECT count(id_setting) as countSetting  FROM `setting` ";

        return $this->getExecute($ss__setting, 'single');

    }



    /**

     * adminLogin()

     * @param type $username

     * @param type $password

     * @return type

     */

    public function agentLogin($username, $password) {

        $query__admin = "SELECT * FROM member WHERE username='" . $username . "' and password='" . $password . "' and status='Active'";

        $o__admin = $this->getExecute($query__admin, 'single');

        //exit($query__admin);

        if (mysql_affected_rows() > 0) {

            $_SESSION['cs_member_id'] = $o__admin->id_member;

            $_SESSION['cs_membername'] = $username;

            $_SESSION['cs_memberId'] = $o__admin->member_id;







            return true;

        } else {

            $_SESSION['error_msg'] = "Sorry, this login is invalid.";

            return false;

        }

    }



    /**

     * adminLogout()

     */

    public function agentLogout() {

        unset($_SESSION['cs_member_id']);

        unset($_SESSION['cs_membername']);

    }



    /**

     * updateAdminProfile()

     * @param type $records

     * @param type $id_admin

     */

    public function updateAdminProfile($records, $id_admin) {

        foreach ($records as $key => $value) {

            $data[] = $key . "='" . $value . "'";

        }

        $data = implode(',', $data);

        $ss__update_admin = "UPDATE admin SET $data WHERE id_admin='" . $id_admin . "'";

        $this->execute($ss__update_admin);

    }



    /**

     * updateColor()

     * @param type $colorid

     * @param type $colorfile

     */

    public function updateColor($colorid, $colorfile) {

        $ss__admin = "UPDATE color SET color_file='" . $colorfile . "' WHERE color_id='" . $colorid . "' ";

        $this->execute($ss__admin);

    }



    /**

     * adminForgotPassword()

     * @param type $email

     * @return type

     */

    public function adminForgotPassword($email) {

        $ss__member = "SELECT id_admin,admin_fname,admin_lname,admin_username FROM admin WHERE admin_email='" . $email . "'";

        $o__member = $this->getExecute($ss__member, 'single');

        if (count($o__member) > 0 && !array_key_exists("scalar", $o__member)) {

            $admin_fullname = $o__member->admin_fname . " " . $o__member->admin_lname;

            $admin_username = $o__member->admin_username;

            $ss__new_pass = rand();



            $ss__update_pass = "UPDATE admin SET admin_password='" . md5($ss__new_pass) . "' WHERE admin_email='" . $email . "' AND id_admin='" . $o__member->id_admin . "' ";

            $this->execute($ss__update_pass);



            $this->sendActivation($email, $ss__new_pass, $admin_fullname, $admin_username, 'forgot');

            $_SESSION['success_msg'] = "Password has been reset, please check your email";

            return true;

        } else {

            $_SESSION['error_msg'] = "Email address does not exists";

            return false;

        }

    }



    /**

     * sendActivation()

     * @param type $email

     * @param type $ss__new_pass

     * @param type $ss__adminname

     * @param type $username

     * @param type $type

     */

    public function sendActivation($email, $ss__new_pass, $ss__adminname, $username, $type = 'register') {

        if ($type == 'forgot') {

            $subject = "Forgot password request has been received from BISTRO";

            $message = "Hello " . $ss__adminname . ", <br> Here is your new password for your account <br><br>";

            $message .= "E-Mail: " . $email . "<br>";

            $message .= "Username: " . $username . "<br>";

            $message .= "New password: " . $ss__new_pass . "<br>";

            $message .= "<br> From,<br> BISTRO";

        } else if ($type == 'ChangePassword') {

            $subject = "Change password request has been received from " . globle_site_title;

            $message = "Hello " . $ss__adminname . ", <br> Here is your new password for your account <br><br>";

            $message .= "E-Mail: " . $email . "<br>";

            $message .= "Username: " . $username . "<br>";

            $message .= "New password: " . $ss__new_pass . "<br>";

            $message .= "<br> From,<br> restaurant";

        }

        $headers = 'MIME-Version: 1.0' . "\r\n";

        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $headers .= 'From:restaurant  <info@restaurant.com>"\r\n"';

        @mail($email, $subject, $message, $headers);

    }



    /**

     * adminFieldExistOrNot()

     * @param type $field_name

     * @param type $field_value

     * @param type $edit_id

     * @return type

     */

    public function adminFieldExistOrNot($field_name, $field_value, $edit_id = '') {

        $ss__admin = "SELECT * FROM admin WHERE " . $field_name . "='" . $field_value . "'";

        if ($edit_id != '') {

            $ss__admin .= " AND id_admin != '" . $edit_id . "'";

        }

        return $this->getExecute($ss__admin, 'multiple');

    }



    /**

     * getAdminByID()

     * @param type $id_admin

     * @return type

     */

    public function getAdminByID($id_admin) {

        $ss__admin = "SELECT admin.admin_fname,admin.id_admin,admin.image,admin.admin_lname,admin.admin_email,admin.admin_username,admin.admin_contact_no,admin.admin_city,admin.admin_address FROM admin WHERE admin.id_admin='" . $id_admin . "'";

        return $this->getExecute($ss__admin, 'single');

    }



    /**

     * checkpassword()

     * @param type $field_name string

     * @param type $field_value string

     * @param type $edit_id int

     * @return type

     */

    public function checkpassword($field_name, $field_value, $edit_id) {

        $ss__admin = "select * from admin where $field_name ='" . $field_value . "' and id_admin='" . $edit_id . "'";

        return $this->getExecute($ss__admin, 'single');

    }



    /**

     * execute()

     * @param type $ss__query string

     */

    private function execute($ss__query) {

        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");



        mysqli_query($con, $ss__query);

    }



    private function getExecute($ss__query, $type = 'multiple') {

        $con = mysqli_connect("localhost","paybay_main",'ZSE$6tfc',"paybay_main");

        $o__data = mysqli_query($con, $ss__query);

        if ($type == 'multiple') {

            $data = array();

            while ($as__record = mysqli_fetch_assoc($o__data)) {

                $data[] = $as__record;

            }

            return $data;

        } else {

            $data = mysqli_fetch_assoc($o__data);

            return (object) $data;

        }

    }

}



?>

