<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->userobj = $this->session->userdata('logged_in');
        $this->user_id = $this->userobj ? $this->userobj['login_id'] : 0;
    }

    public function index() {
//        redirect("appointment");
        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        $customarray = [1, 2];
        $this->db->where_in('id', $customarray);
        $query = $this->db->get('custome_items');
        $customeitem = $query->result();

        $data['shirtcustome'] = $customeitem[0];
        $data['suitcustome'] = $customeitem[1];

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        $query = $this->db->get('content_testimonial');
        $data['content_testimonial'] = $query->result_array();

        $this->load->view('home', $data);
    }

    public function contactus() {
        if (isset($_POST['sendmessage'])) {
            $web_enquiry = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from($emailsender, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = $this->input->post('subject');
                $orderlog = array(
                    'log_type' => 'Enquiry',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'ENQ',
                    'log_detail' => "Enquiry from website - " . $this->input->post('subject')
                );
                $this->db->insert('system_log', $orderlog);

                $subject = "Enquiry from website - " . $this->input->post('subject');
                $this->email->subject($subject);

                $web_enquiry['web_enquiry'] = $web_enquiry;

                $htmlsmessage = $this->load->view('Email/web_enquiry', $web_enquiry, true);
                if (REPORT_MODE) {
                    $this->email->message($htmlsmessage);

                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        echo json_encode("send");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        echo json_encode($error);
                    }
                } else {
                    echo $htmlsmessage;
                }
            }

            redirect('Shop/contactus');
        }
        $this->load->view('pages/contactus');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function error404() {
        $this->load->view('errors/error_404');
    }

    public function faqs() {
        $query = $this->db->get('content_faq');
        $data['content_faq'] = $query->result_array();
        $this->load->view('pages/faqs', $data);
    }

    public function catalogue() {
        $this->load->view('pages/catalogue');
    }

    public function lookbook() {
        $query = $this->db->get('look_books');
        $data['lookbook'] = $query->result_array();
        $this->load->view('pages/lookbook', $data);
    }

    public function offers() {
        $query = $this->db->where("valid_till >", date("Y-m-d"))->where("coupon_type", "All User")->get('coupon_conf');
        $data['coupons'] = $query ? $query->result_array() : array();
        $this->load->view('pages/offers', $data);
    }

    public function appointment() {
        $timeslot = [
            "07:00 AM", "08:00AM", "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM",
            "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM", "08:00 PM",
            "09:00 PM", "10:00 PM", "11:00 PM",
        ];

        $data['timeslot'] = $timeslot;
        $next7Days = [];
        for ($i = 2; $i <= 9; $i++) {
            $tempdate = array("date" => date('Y-m-d', strtotime("+$i day", strtotime(date('Y-m-d')))), "timing1" => "10:00 AM", "timing2" => "08:00 PM");
            array_push($next7Days, $tempdate);
        }

        $appointmentdetailslocal = [array(
        "type" => "local",
        "id" => "au0_app",
        "country" => "Hong Kong",
        "city_state" => "Central",
        "hotel" => "SHOWROOM",
        "address" => "Shop 11, 1/F Admiralty Center,18 Harcourt Road, Admiralty, Hong Kong",
        "days" => "",
        "start_date" => "",
        "end_date" => "",
        "contact_no" => " +(852) 2655 9778",
        "dates" => $next7Days
            ),];

        $data['appointmentdetailslocal'] = $appointmentdetailslocal;

        $allappointment = $this->Product_model->AppointmentDataAll();
        $data['appointmentdatausa'] = $allappointment;

        if (isset($_POST['submit'])) {
            $appointment = array(
                "country" => $this->input->post('country'),
                "city_state" => $this->input->post('city_state'),
                "hotel" => $this->input->post('hotel'),
                "address" => $this->input->post('address'),
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'select_time' => $this->input->post('select_time'),
                'select_date' => $this->input->post('select_date'),
                'no_of_person' => $this->input->post('no_of_person'),
                'referral' => $this->input->post('referral'),
                'datetime' => date("Y-m-d H:i:s a"),
                'appointment_type' => "Local",
            );

            $this->db->insert('appointment_list', $appointment);
            $appointment['contact_no2'] = $this->input->post('contact_no2');

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_sender, $sendername);
                $this->email->reply_to(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = email_sender_name . " Appointment : " . $appointment['select_date'] . " (" . $appointment['select_time'] . ")";
                $orderlog = array(
                    'log_type' => 'Appointment',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Appointment User',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);

                $subject = $subjectt;
                $this->email->subject($subject);

                $appointment['appointment'] = $appointment;

                $htmlsmessage = $this->load->view('Email/appointment', $appointment, true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        echo json_encode("send");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        echo json_encode($error);
                    }
                } else {
                    echo $htmlsmessage;
                }
            }

            redirect('Shop/appointment');
        }

        $this->load->view('pages/appointment', $data);
    }

    public function appointment2() {

        redirect("appointment");
        $timeslot = [
            "07:00 AM", "08:00 AM", "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM",
            "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM", "08:00 PM",
            "09:00 PM", "10:00 PM",
        ];
        $timeslot2 = [];
        foreach ($timeslot as $key => $value) {
            $t1 = explode(":", $value)[0];
            $ap = explode(" ", $value)[1];
            array_push($timeslot2, $value);
            array_push($timeslot2, $t1 . ":10 " . $ap);
            array_push($timeslot2, $t1 . ":20 " . $ap);
            array_push($timeslot2, $t1 . ":30 " . $ap);
            array_push($timeslot2, $t1 . ":40 " . $ap);
            array_push($timeslot2, $t1 . ":50 " . $ap);
        }



        $data['timeslot'] = $timeslot;
        $data['timeslot2'] = $timeslot2;

        $appointmentdetailslocal = [array(
        "type" => "local",
        "id" => "au0_app",
        "country" => "USA",
        "city_state" => "Dallas, TX",
        "hotel" => "Omni Dallas Hotel",
        "address" => "555 S Lamar St, Dallas, TX 75202, USA",
        "days" => "16th Sep - 19th Sep 2019",
        "start_date" => "2019-09-16",
        "end_date" => "2019-09-19",
        "contact_no" => " +(852) 2369 1196",
        "dates" => [
            array("date" => "2019-09-16", "timing1" => "07:00 AM", "timing2" => "11:00 PM"),
            array("date" => "2019-09-17", "timing1" => "07:00 AM", "timing2" => "11:00 PM"),
            array("date" => "2019-09-18", "timing1" => "07:00 AM", "timing2" => "11:00 PM"),
            array("date" => "2019-09-19", "timing1" => "07:00 AM", "timing2" => "11:00 PM"),
        ]
            ),];

        $data['appointmentdetailslocal'] = $appointmentdetailslocal;

        $data['appointmentdatausa'] = array();

        if (isset($_POST['submit'])) {
            $appointment = array(
                "country" => $this->input->post('country'),
                "city_state" => $this->input->post('city_state'),
                "hotel" => $this->input->post('hotel'),
                "address" => $this->input->post('address'),
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'select_time' => $this->input->post('select_time'),
                'select_date' => $this->input->post('select_date'),
                'no_of_person' => $this->input->post('no_of_person'),
                'referral' => $this->input->post('referral'),
                'datetime' => date("Y-m-d H:i:s a"),
                'appointment_type' => "Local",
            );

            $this->db->insert('appointment_list', $appointment);
            $appointment['contact_no2'] = $this->input->post('contact_no2');

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_sender, $sendername);
                $this->email->reply_to(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = email_sender_name . " Appointment : " . $appointment['select_date'] . " (" . $appointment['select_time'] . ")";
                $orderlog = array(
                    'log_type' => 'Appointment',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Appointment User',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);

                $subject = $subjectt;
                $this->email->subject($subject);

                $appointment['appointment'] = $appointment;

                $htmlsmessage = $this->load->view('Email/appointment', $appointment, true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        echo json_encode("send");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        echo json_encode($error);
                    }
                } else {
                    echo $htmlsmessage;
                }
            }

            redirect('Shop/appointment2');
        }

        $this->load->view('pages/appointment2', $data);
    }

    public function appointmentReport() {
        $this->db->order_by("datetime desc");
        $query = $this->db->get('appointment_list');
        $result = $query->result_array();
        $data['appointmentdata'] = $result;
        $this->load->view('pages/appointment3', $data);
    }

    public function page($pagelink) {
        $this->db->where('uri', $pagelink);
        $query = $this->db->get('content_pages');
        $pageobj = $query->row_array();
        if ($pageobj) {
            $pageobj = $query->row_array();

            $this->load->view('pages/content', array("pageobj" => $pageobj));
        } else {
            redirect("Shop/index");
        }
    }

    function testMail() {
        $email = "octopuscartltd@gmail.com";
        $emailsender = email_sender;
        $sendername = email_sender_name;
        $email_bcc = email_bcc;
        $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
        if ($email) {
            $this->email->set_newline("\r\n");
            $this->email->from($emailsender, $sendername);
            $this->email->to($email);
//            $this->email->bcc(email_bcc);

            $subject = "Test mail from Sendgrid";
            $this->email->subject($subject);

//            $this->email->message("Test email body from sendgrid");
//
//            $this->email->print_debugger();
//            $send = $this->email->send();
//            if ($send) {
//                echo json_encode("send");
//            } else {
//                $error = $this->email->print_debugger(array('headers'));
//                echo json_encode($error);
//            }
        }
    }

}
