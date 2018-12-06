<?php
//echo 'slkdhfo';
class myConfig Extends baseControllor {

    public $action = null;
    public $o__action = array();

    public function getRestricated($action) {
        if ($action != 'login' && $action != 'forgot' && $action != 'sendPassword') {
            if (!$this->isAuthenticated())
                $this->redirect("index.php?action=login");
        }
        else {
            if ($this->isAuthenticated())
                $this->redirect();
        }
    }

    public function getclientRestricated($action) {

        if ($action != 'login' && $action != 'forgot' && $action != 'sendPassword') {
            if (!$this->isAuthenticated())
                $this->redirect("index.php?action=login");
        }
        else {
            if ($this->isAuthenticated())
            {
                if($_POST['redirect']=='flight')
                {
                    $this->redirect('index.php?action=book_flight');
                }
                else{
                    $this->redirect();
                }
            }

        }
//        else {
//            if ($this->isAuthenticatedClient())
//                $this->redirect("index.php?action=dashboard");
//        }
        
      
    }

    public function isAuthenticated() {
        if (!empty($_SESSION['b2b_kpr_rech_id']) )
            return true;
        else
            return false;
    }

    public function isAuthenticatedClient() {
        if (!empty($_SESSION['kpr_rech_mobile']) && !empty($_SESSION['kpr_rech_id']))
            return true;
        else
            return false;
    }

    public function Authenticated() {
        if (!empty($_SESSION['client_admin_id']) && !empty($_SESSION['client_name']))
            return true;
        else
            $this->redirect("index.php?action=login");
    }

    public function getClientActions($realAction = 'index') {

        $actions = array(
            'index' => array('action' => 'index', 'type' => 'index', 'modalBox' => "false"),
            'dashboard' => array('action' => 'index', 'type' => 'dashboard', 'modalBox' => "false"),
            'register' => array('action' => 'index', 'type' => 'register', 'modalBox' => "false"),
            'comingsoon' => array('action' => 'index', 'type' => 'comingsoon', 'modalBox' => "false"),
            'add_user' => array('action' => 'user', 'type' => 'add_user'),
                                          'view_user' => array('action' => 'user', 'type' => 'view_user'),
                                          'view_user_mob' => array('action' => 'user', 'type' => 'view_user_mob'),
                                          'add_money' => array('action' => 'user', 'type' => 'add_money'),
                                          'add_mobileno' => array('action' => 'user', 'type' => 'add_mobileno'),
                                          'apidocs' => array('action' => 'user', 'type' => 'apidocs'),
           
            
            
            'error' => array('action' => 'index', 'type' => 'error', 'modalBox' => "false"),
            'page' => array('action' => 'page', 'type' => 'page', 'modalBox' => "false"),
            'client' => array('action' => 'client', 'type' => 'client', 'modalBox' => "false"),
            'item' => array('action' => 'item', 'type' => 'item', 'modalBox' => "false"),
            'category' => array('action' => 'category', 'type' => 'category', 'modalBox' => "false"),
            'service' => array('action' => 'service', 'type' => 'service', 'modalBox' => "false"),
            'linework' => array('action' => 'linework', 'type' => 'linework', 'modalBox' => "false"),
            'product' => array('action' => 'product', 'type' => 'product', 'modalBox' => "false"),
            'productdetail' => array('action' => 'product', 'type' => 'productdetail', 'modalBox' => "false"),
            'login' => array('action' => 'agent', 'type' => 'login'),
            'logout' => array('action' => 'admin', 'type' => 'logout'),
            'forgot' => array('action' => 'agent', 'type' => 'forgot'),
            'transaction' => array('action' => 'transaction', 'type' => 'transaction'),
            'thirdpartytransaction' => array('action' => 'transaction', 'type' => 'thirdpartytransaction'),
            'transactionview' => array('action' => 'transaction', 'type' => 'view'),
            'oneday' => array('action' => 'transaction', 'type' => 'oneday'),
            'transactiondetail' => array('action' => 'transaction', 'type' => 'add'),
			'livetrans' => array('action' => 'transaction_report', 'type' => 'livetrans'),
             'contact' => array('action' => 'contact', 'type' => 'contact'),
            'about' => array('action' => 'contact', 'type' => 'about'),
            'orderlist' => array('action' => 'order', 'type' => 'orderlist'),
            'orderdetail' => array('action' => 'order', 'type' => 'orderdetail'),
                // 'ourclient_detail' => array('action' => 'ourclient', 'type' => 'detail', 'modalBox' => "false"),
                
                'terms_condition' => array('action' => 'terms', 'type' => 'terms_condition'),
                'refund_policy' => array('action' => 'terms', 'type' => 'refund_policy'),
                'privacy_policy' => array('action' => 'terms', 'type' => 'privacy_policy'),
                 'disclaimer' => array('action' => 'terms', 'type' => 'disclaimer'),
                  'seminar' => array('action' => 'terms', 'type' => 'seminar'),
                   'grievance' => array('action' => 'terms', 'type' => 'grievance'),
                   'shipping' => array('action' => 'terms', 'type' => 'shipping'),
                
                'coupon' => array('action' => 'coupon', 'type' => 'coupon'),
                'payment' => array('action' => 'payment', 'type' => 'payment'),
                'categories' => array('action' => 'categories', 'type' => 'categories'),
                'categories_list' => array('action' => 'categories', 'type' => 'categories_list'),
                
                'compliance' => array('action' => 'compliance', 'type' => 'compliance'),
                'account' => array('action' => 'account', 'type' => 'account'),
                 'cart' => array('action' => 'cart', 'type' => 'cart'),
                 'wallet' => array('action' => 'wallet', 'type' => 'wallet'),
                  'money_response' => array('action' => 'wallet', 'type' => 'money_response'),
                  'check' => array('action' => 'check', 'type' => 'check'),
                  
                  
                  
                  'btc' => array('action' => 'currency', 'type' => 'btc'),
                  
                  'flight' => array('action' => 'flight', 'type' => 'flight'),
                  'roundway_trip' => array('action' => 'flight', 'type' => 'roundway_trip'),
                   'flight_response' => array('action' => 'flight', 'type' => 'flight_response'),
                    'bus' => array('action' => 'bus', 'type' => 'bus'),
                    'bus_response' => array('action' => 'bus', 'type' => 'bus_response'),
                    
                     'login' => array('action' => 'admin', 'type' => 'login'),
                    
                    'add_master' => array('action' => 'master', 'type' => 'add_master'),
                    'view_master' => array('action' => 'master', 'type' => 'view_master'),
                    
                    'add_distributor' => array('action' => 'distributor', 'type' => 'add_distributor'),
                    'view_distributor' => array('action' => 'distributor', 'type' => 'view_distributor'),
                    
                    'add_retailer' => array('action' => 'retailer', 'type' => 'add_retailer'),
                    'view_retailer' => array('action' => 'retailer', 'type' => 'view_retailer'),
                    'chat' => array('action' => 'retailer', 'type' => 'chat'),
                    
                                         
                     
                     
                     
                     'admin_ladger' => array('action' => 'admin_utility', 'type' => 'admin_ladger'),
                     'admin_daybook' => array('action' => 'admin_utility', 'type' => 'admin_daybook'),
                     'admin_api_daybook' => array('action' => 'admin_utility', 'type' => 'admin_api_daybook'),
                     'send_msg' => array('action' => 'admin_utility', 'type' => 'send_msg'),
                     
                     
                   
                                          
                      'add_api' => array('action' => 'assign_api', 'type' => 'add_api'),
                      'view_api' => array('action' => 'assign_api', 'type' => 'view_api'),

                                          
                     'add_api_name' => array('action' => 'api_name', 'type' => 'add_api_name'),
                    'view_api_name' => array('action' => 'api_name', 'type' => 'view_api_name'),
                    
                    'add_api_user' => array('action' => 'api_user_type', 'type' => 'add_api_user'),
                    'view_api_user' => array('action' => 'api_user_type', 'type' => 'view_api_user'),
                    
                    'add_commission_custom' => array('action' => 'update_commission', 'type' => 'add_commission_custom'),
            
                    'add_mpos_commission' => array('action' => 'update_commission', 'type' => 'add_mpos_commission'),
                    'manage_mpos_commission' => array('action' => 'update_commission', 'type' => 'manage_mpos_commission'),
                    
                    'add_money_request' => array('action' => 'money_request', 'type' => 'add_money_request'),
                     'view_money_request' => array('action' => 'money_request', 'type' => 'view_money_request'),
            'respond_money_request' => array('action' => 'money_request', 'type' => 'respond_money_request'),
            
            
            
            'add_commission' => array('action' => 'commission', 'type' => 'add_commission'),
            'commission_slab' => array('action' => 'commission', 'type' => 'commission_slab'),
            
            'add_group' => array('action' => 'group', 'type' => 'add_group'),
            'view_group' => array('action' => 'group', 'type' => 'view_group'),
              'mpos_slab_group' => array('action' => 'group', 'type' => 'mpos_slab_group'),
              'dmt_slab_group' => array('action' => 'group', 'type' => 'dmt_slab_group'),
                    
                    
                    'transaction_report' => array('action' => 'transaction_report', 'type' => 'transaction_report'),
                    
                    'balance_req_report' => array('action' => 'balance_req_report', 'type' => 'balance_req_report'),
                    
                    'bus_api_doc' => array('action' => 'api_list', 'type' => 'bus_api_doc'),
                    'recharge_api_doc' => array('action' => 'api_list', 'type' => 'recharge_api_doc'),
                    'sms' => array('action' => 'api_list', 'type' => 'sms'),
                    'operator' => array('action' => 'api_list', 'type' => 'operator'),
                    
                    'profile' => array('action' => 'profile', 'type' => 'profile'),
                    
                    'recharge' => array('action' => 'recharge', 'type' => 'recharge'),
                    'money_box' => array('action' => 'recharge', 'type' => 'money_box'),
                    
                    'book_flight' => array('action' => 'flight', 'type' => 'book_flight'),
                    'flight_response' => array('action' => 'flight', 'type' => 'flight_response'),
                    'select_seat' => array('action' => 'flight', 'type' => 'select_seat'),
                    'flight_ticket' => array('action' => 'flight', 'type' => 'flight_ticket'),
                    
                    'bus_form' => array('action' => 'bus', 'type' => 'bus_form'),
                     'bus_book' => array('action' => 'bus', 'type' => 'bus_book'),
                      'bus_response' => array('action' => 'bus', 'type' => 'bus_response'),
                      'bus_ticket' => array('action' => 'bus', 'type' => 'bus_ticket'),
                      'menual_report' => array('action' => 'report', 'type' => 'menual_report'),
                      'report1' => array('action' => 'report', 'type' => 'report1'),
                      'queue_rech' => array('action' => 'report', 'type' => 'queue_rech'),
                      'trans_detail' => array('action' => 'report', 'type' => 'trans_detail'),
                      'wallet_report' => array('action' => 'report', 'type' => 'wallet_report'),
                      'dmt_report' => array('action' => 'report', 'type' => 'dmt_report'),
                      'sendsms_report' => array('action' => 'report', 'type' => 'sendsms_report'),
                       'moneyrequest_report' => array('action' => 'report', 'type' => 'moneyrequest_report'),
                        'api_daybook' => array('action' => 'report', 'type' => 'api_daybook'),
                      'report2' => array('action' => 'report', 'type' => 'report2'),
                      'api_resp' => array('action' => 'report', 'type' => 'api_resp'),
                      'refund_status' => array('action' => 'report', 'type' => 'refund_status'),
                      'disputes' => array('action' => 'report', 'type' => 'disputes'),
                      'disputes_pending' => array('action' => 'report', 'type' => 'disputes_pending'),
                      'user_ladger' => array('action' => 'report', 'type' => 'user_ladger'),
                      'changestatus' => array('action' => 'report', 'type' => 'changestatus'),
                      'commission_detail' => array('action' => 'report', 'type' => 'commission_detail'),
                      'recharge_detail' => array('action' => 'report', 'type' => 'recharge_detail'),
                      'recharge_detail_format' => array('action' => 'report', 'type' => 'recharge_detail_format'),
                      'user_daybook' => array('action' => 'report', 'type' => 'user_daybook'),
                      'recharge_by_sms' => array('action' => 'report', 'type' => 'recharge_by_sms'),
                      'incomming_msg' => array('action' => 'report', 'type' => 'incomming_msg'),
                      'fund_transfer' => array('action' => 'report', 'type' => 'fund_transfer'),
                      'refund_statement' => array('action' => 'report', 'type' => 'refund_statement'),
                      'api_sms_report' => array('action' => 'report', 'type' => 'api_sms_report'),
                      'other_sms_report' => array('action' => 'report', 'type' => 'other_sms_report'),
                      'recharge_report' => array('action' => 'report', 'type' => 'recharge_report'),
                      'fund_receive_statement' => array('action' => 'report', 'type' => 'fund_receive_statement'),
                       'mobile_utility_api_configration' => array('action' => 'mobile_utility_api_configration', 'type' => 'mobile_utility_api_configration'),
                       'view_mobile_utility_api_configration' => array('action' => 'mobile_utility_api_configration', 'type' => 'view_mobile_utility_api_configration'),
                      
                       'add_recharge_api' => array('action' => 'api_configration', 'type' => 'add_recharge_api'),
                        'add_sms_api' => array('action' => 'api_configration', 'type' => 'add_sms_api'),
                         'view_sms_api' => array('action' => 'api_configration', 'type' => 'view_sms_api'),
                         'api_switch' => array('action' => 'api_configration', 'type' => 'api_switch'),
                          'set_sms_prefix' => array('action' => 'api_configration', 'type' => 'set_sms_prefix'),
                           'user_wise_api' => array('action' => 'api_configration', 'type' => 'user_wise_api'),
                           
                           'add_operator' => array('action' => 'operator', 'type' => 'add_operator'),
                            'manage_operator' => array('action' => 'operator', 'type' => 'manage_operator'),
                            
                             'm_notification' => array('action' => 'marketing', 'type' => 'm_notification'),
                             'm_adsense' => array('action' => 'marketing', 'type' => 'm_adsense'),
                             'm_bulk_sms' => array('action' => 'marketing', 'type' => 'm_bulk_sms'),
                             'm_email' => array('action' => 'marketing', 'type' => 'm_email'),
                             'm_mobile_notification' => array('action' => 'marketing', 'type' => 'm_mobile_notification'),
                             
                             'm_add_device' => array('action' => 'mpos', 'type' => 'm_add_device'),
                             'm_manage_device' => array('action' => 'mpos', 'type' => 'm_manage_device'),
                             'm_manage_device_user' => array('action' => 'mpos', 'type' => 'm_manage_device_user'),
                             
                             'p_add_payment_gateway' => array('action' => 'payment_gateway', 'type' => 'p_add_payment_gateway'),
                             'p_view_payment_gateway' => array('action' => 'payment_gateway', 'type' => 'p_view_payment_gateway'),
                             
                             'add_ad' => array('action' => 'ad_management', 'type' => 'add_ad'),
                             'manage_ad' => array('action' => 'ad_management', 'type' => 'manage_ad'),
                             
                              'analitics' => array('action' => 'analitics', 'type' => 'analitics'),
                              
                              'add_product' => array('action' => 'sell_product', 'type' => 'add_product'),
                              'manage_product' => array('action' => 'sell_product', 'type' => 'manage_product'),
                              'delete_product' => array('action' => 'sell_product', 'type' => 'delete_product'),
                              'order_manage' => array('action' => 'sell_product', 'type' => 'order_manage'),
                              
                              'long_code' => array('action' => 'sms', 'type' => 'long_code'),
                              'short_code' => array('action' => 'sms', 'type' => 'short_code'),
                      
                      'hotel_form' => array('action' => 'hotel', 'type' => 'hotel_form'),
                      'allreport' => array('action' => 'report', 'type' => 'allreport'),
                       'manualchangestatus' => array('action' => 'report', 'type' => 'manualchangestatus'),
                       'view_group_coms' => array('action' => 'group', 'type' => 'view_group_coms'),
                      
                      'electricity' => array('action' => 'electricity', 'type' => 'electricity'),
                      'landline' => array('action' => 'landline', 'type' => 'landline'),
                      'gas' => array('action' => 'gas', 'type' => 'gas'),
                      'insurance' => array('action' => 'insurance', 'type' => 'insurance'),
                      'broadband' => array('action' => 'broadband', 'type' => 'broadband'),
        );


        if (!array_key_exists($realAction, $actions))
            $this->redirect('/404/');
        return (object) $actions[$realAction];
    }

    public function getActions($realAction = 'index') {
        $actions = array(
            'index' => array('action' => 'index', 'type' => 'index'),
            
            'login' => array('action' => 'admin', 'type' => 'login'),
            
            'dashboard' => array('action' => 'page_ecom', 'type' => 'dashboard'),
            
            'other_view' => array('action' => 'page_ecom', 'type' => 'other_view'),
            
            'admin_product' => array('action' => 'page_ecom', 'type' => 'admin_product'),
            
            'customer_view' => array('action' => 'page_ecom', 'type' => 'customer_view'),
            
             'stat' => array('action' => 'page_widget', 'type' => 'stat'),
             
             'button' => array('action' => 'page_ui', 'type' => 'button'),
             
             'color' => array('action' => 'page_ui', 'type' => 'color'),
             
             'draggable' => array('action' => 'page_ui', 'type' => 'draggable'),
             
             'grid_block' => array('action' => 'page_ui', 'type' => 'grid_block'),
             
             'horizontal_menu' => array('action' => 'page_ui', 'type' => 'horizontal_menu'),
             
             'navigation_more' => array('action' => 'page_ui', 'type' => 'navigation_more'),
             
             'preloader' => array('action' => 'page_ui', 'type' => 'preloader'),
             
             'progress' => array('action' => 'page_ui', 'type' => 'progress'),
             
              'typography' => array('action' => 'page_ui', 'type' => 'typography'),
              
              'animation' => array('action' => 'page_comp', 'type' => 'animation'),
              'calender' => array('action' => 'page_comp', 'type' => 'calender'),
              'carousel' => array('action' => 'page_comp', 'type' => 'carousel'),
              'chart' => array('action' => 'page_comp', 'type' => 'chart'),
              'map' => array('action' => 'page_comp', 'type' => 'map'),
              'gallery' => array('action' => 'page_comp', 'type' => 'gallery'),
              'syntax' => array('action' => 'page_comp', 'type' => 'syntax'),
              
              
                '400' => array('action' => 'page_ready', 'type' => '400'),
                '401' => array('action' => 'page_ready', 'type' => '401'),
                '403' => array('action' => 'page_ready', 'type' => '403'),
                '404' => array('action' => 'page_ready', 'type' => '404'),
                '500' => array('action' => 'page_ready', 'type' => '500'),
                '503' => array('action' => 'page_ready', 'type' => '503'),
                'article' => array('action' => 'page_ready', 'type' => 'article'),
                'blank' => array('action' => 'page_ready', 'type' => 'blank'),
                'bug' => array('action' => 'page_ready', 'type' => 'bug'),
                'blank_alt' => array('action' => 'page_ready', 'type' => 'blank_alt'),
                'chat' => array('action' => 'page_ready', 'type' => 'chat'),
                'comming_soon' => array('action' => 'page_ready', 'type' => 'comming_soon'),
                'contact' => array('action' => 'page_ready', 'type' => 'contact'),
                 'lesson' => array('action' => 'page_ready', 'type' => 'lesson'),
                  'lessons' => array('action' => 'page_ready', 'type' => 'lessons'),
                  'page_ready1' => array('action' => 'page_ready', 'type' => 'page_ready1'),
                   'faq' => array('action' => 'page_ready', 'type' => 'faq'),
                    'files' => array('action' => 'page_ready', 'type' => 'files'),
                    'forum' => array('action' => 'page_ready', 'type' => 'forum'),
                    'inbox' => array('action' => 'page_ready', 'type' => 'inbox'),
                    'inbox_compose' => array('action' => 'page_ready', 'type' => 'inbox_compose'),
                    'inbox_msg' => array('action' => 'page_ready', 'type' => 'inbox_msg'),
                    'invoice' => array('action' => 'page_ready', 'type' => 'invoice'),
                    'lock_screen' => array('action' => 'page_ready', 'type' => 'lock_screen'),
                    'lock_screen_alt' => array('action' => 'page_ready', 'type' => 'lock_screen_alt'),
                    'pricing_table' => array('action' => 'page_ready', 'type' => 'pricing_table'),
                    'search_result' => array('action' => 'page_ready', 'type' => 'search_result'),
                    'task' => array('action' => 'page_ready', 'type' => 'task'),
                    'ticket' => array('action' => 'page_ready', 'type' => 'ticket'),
                    'time_line' => array('action' => 'page_ready', 'type' => 'time_line'),
                     'user_profile' => array('action' => 'page_ready', 'type' => 'user_profile'),
                  
                  
                  'datatable' => array('action' => 'page_table', 'type' => 'datatable'),
                   'general' => array('action' => 'page_table', 'type' => 'general'),
                    'responsive' => array('action' => 'page_table', 'type' => 'responsive'),
                    
                    
                    
                    'bottom' => array('action' => 'page_layout', 'type' => 'bottom'),
                    'bottom_footer' => array('action' => 'page_layout', 'type' => 'bottom_footer'),
                    'top' => array('action' => 'page_layout', 'type' => 'top'),
                    'top_footer' => array('action' => 'page_layout', 'type' => 'top_footer'),
                    'fixed_footer' => array('action' => 'page_layout', 'type' => 'fixed_footer'),
                    'sidebar_mini' => array('action' => 'page_layout', 'type' => 'sidebar_mini'),
                    'sidebar_partial' => array('action' => 'page_layout', 'type' => 'sidebar_partial'),
                    'static_alternative_sidebar_partial' => array('action' => 'page_layout', 'type' => 'static_alternative_sidebar_partial'),
                    'static_alternative_sidebar_visible' => array('action' => 'page_layout', 'type' => 'static_alternative_sidebar_visible'),
                    'static' => array('action' => 'page_layout', 'type' => 'static'),
                    'static_animated' => array('action' => 'page_layout', 'type' => 'static_animated'),
                    'static_both_partial' => array('action' => 'page_layout', 'type' => 'static_both_partial'),
                    'static_main_sidebar_visible' => array('action' => 'page_layout', 'type' => 'static_main_sidebar_visible'),
                    'static_no_sidebars' => array('action' => 'page_layout', 'type' => 'static_no_sidebars'),
                    
                    
                    
                    'page_forms_components' => array('action' => 'page_form', 'type' => 'page_forms_components'),
                    'page_forms_general' => array('action' => 'page_form', 'type' => 'page_forms_general'),
                    'page_forms_validation' => array('action' => 'page_form', 'type' => 'page_forms_validation'),
                    'page_forms_wizard' => array('action' => 'page_form', 'type' => 'page_forms_wizard'),
                    
                    
                 
                    
              
             
             'social' => array('action' => 'page_widget', 'type' => 'social'),
             
             'media' => array('action' => 'page_widget', 'type' => 'media'),
             
             'stat' => array('action' => 'page_widget', 'type' => 'stat'),
             
             'link' => array('action' => 'page_widget', 'type' => 'link'),
            
             'product_edit' => array('action' => 'page_ecom', 'type' => 'product_edit'),
            
             'others' => array('action' => 'page_ecom', 'type' => 'others'),
            
            'logout' => array('action' => 'admin', 'type' => 'logout'),
           
            'error' => array('action' => 'index', 'type' => 'error'),
            
            
            
            
            'add_product' => array('action' => 'a_product', 'type' => 'add_product'),
            'view_product' => array('action' => 'a_product', 'type' => 'view_product'),
            
            'add_category' => array('action' => 'a_category', 'type' => 'add_category'),
            'view_category' => array('action' => 'a_category', 'type' => 'view_category'),
            'add_sub_category' => array('action' => 'a_category', 'type' => 'add_sub_category'),
            'view_sub_category' => array('action' => 'a_category', 'type' => 'view_sub_category'),
            
            
            'add_category_image' => array('action' => 'a_category_image', 'type' => 'add_category_image'),
            'view_category_image' => array('action' => 'a_category_image', 'type' => 'view_category_image'),
            
            
            'add_seller' => array('action' => 'seller', 'type' => 'add_seller'),
            'view_seller' => array('action' => 'seller', 'type' => 'view_seller'),
            
             'add_slider' => array('action' => 'a_slider', 'type' => 'add_slider'),
             'view_slider' => array('action' => 'a_slider', 'type' => 'view_slider'),
             
             'add_recharge' => array('action' => 'a_recharge_history', 'type' => 'add_recharge'),
             'view_recharge' => array('action' => 'a_recharge_history', 'type' => 'view_recharge'),
             
             'add_transaction' => array('action' => 'a_transaction', 'type' => 'add_transaction'),
             'view_transaction' => array('action' => 'a_transaction', 'type' => 'view_transaction'),
             
             
              'add_featured_product' => array('action' => 'a_featured_product', 'type' => 'add_featured_product'),
              'view_featured_product' => array('action' => 'a_featured_product', 'type' => 'view_featured_product'),
              
              
            'add_product_brand' => array('action' => 'a_product_brand', 'type' => 'add_product_brand'),
            'view_product_brand' => array('action' => 'a_product_brand', 'type' => 'view_product_brand'),
            
            'add_home_page_banner' => array('action' => 'a_home_page_banner', 'type' => 'add_home_page_banner'),
            'view_home_page_banner' => array('action' => 'a_home_page_banner', 'type' => 'view_home_page_banner'),
            
            'add_banner_title' => array('action' => 'a_banner_title', 'type' => 'add_banner_title'),
            'view_banner_title' => array('action' => 'a_banner_title', 'type' => 'view_banner_title'),
            
            
            
        );

        if (!array_key_exists($realAction, $actions))
            $this->redirect('index.php?action=error');
        return (object) $actions[$realAction];
    }

    public function redirect($filename = 'index.php') {
        header('Location:' . $filename);
        exit;
    }

    public function setActions($action) {
        return $action;
    }

    public function setTemplate($filename = 'index', $theme = 'default', $page = 'home') {
        include Ftemplate . DS . $theme . DS . $filename . ".php";
    }

   

}

?>
