<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	
	protected $_config = array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.gmail.com',
		'smtp_port' => 465,
		'smtp_user' => 'sybuena3@gmail.com',
		'smtp_pass' => 'w@lkingd3@d',
		'mailtype'  => 'html', 
		'charset'   => 'iso-8859-1'
	);
	
	public function __construct() {
		
		parent::__construct();
		
		//SET ALL LOADER HERE
		$this->load->helper('url');
		
		$this->load->model('user','',TRUE);
	
	  	$this->load->library('email');
	  	$this->email->initialize($this->_config);
	
	}
	
	public function send($data) {
		
	 	$this->email->set_newline("\r\n");
	  	$this->email->from($data['from_email'], $data['from_name']);
	  	$this->email->to($data['to_email']);  
	  	$this->email->subject($data['subject']);  
	  	$this->email->message($data['content']);
		
	  	return $this->email->send();
		//print_r($result);	
	  	//echo $this->email->print_debugger();
	}
	
	public function checkField() {
		//if no submitted
		if(!isset($_POST) || empty($_POST)) {
			//show error
			echo json_encode(array('result'=>0));
			exit;
		}
	}
	
	public function verify() {
		//This method will have the credentials validation
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		
		if($this->form_validation->run() == FALSE) {
		 	//Field validation failed.  User redirected to login page
			$this->load->adminTemplate('admin/login');
		} else {
		 	//Go to private area
		 	redirect('admin', 'refresh');
		}
	}
	
	public function check_database($password) {
   		//Field validation succeeded.  Validate against database
   		$username = $this->input->post('username');

   		//query the database
   		$result = $this->user->login($username, $password);
		
   		if($result) {
     		$sess_array = array();
			foreach($result as $row) {
      			
				$sess_array = array(
         			'id' 		=> $row['id'],
         			'username' 	=> $row['username'],
         			'firstname' => $row['firstname'],
         			'surname' 	=> $row['surname']
       			);
				
       			$this->session->set_userdata('logged_in', $row);
     		}
			
     		return TRUE;
   		} else {
     		$this->form_validation->set_message('check_database', 'Invalid username or password');
     		return false;
   		}
 	}
	
	public function check_database2($password) {
   		//Field validation succeeded.  Validate against database
   		$username = $this->input->post('username');
   		$email = $this->input->post('email');
   		$firstname = $this->input->post('firstname');
   		$surname = $this->input->post('surname');
		$dataset = array(
			'username' => $username,
			'email' => $email,
			'firstname' => $firstname,
			'surname' => $surname,
			'password' => $password,
			'usertype' => 'admin',
		);
		
		$res = $this->db->insert('user', $dataset);
   		//query the database
   		$result = $this->user->login($username, $password);
		
   		if($result) {
     		redirect('admin', 'refresh');
   		} else {
     		$this->form_validation->set_message('check_database2', 'Invalid username or password');
     		return false;
   		}
 	}
	
	protected function _countryList() {
		return array(
"AF"    =>  "Afghanistan",
"AL"    =>  "Albania",
"DZ"    =>  "Algeria",
"AS"    =>  "American Samoa",
"AD"    =>  "Andorra",
"AG"    =>  "Angola",
"AI"    =>  "Anguilla",
"AG"    =>  "Antigua &amp; Barbuda",
"AR"    =>  "Argentina",
"AA"    =>  "Armenia",
"AW"    =>  "Aruba",
"AU"    =>  "Australia",
"AT"    =>  "Austria",
"AZ"    =>  "Azerbaijan",
"BS"    =>  "Bahamas",
"BH"    =>  "Bahrain",
"BD"    =>  "Bangladesh",
"BB"    =>  "Barbados",
"BY"    =>  "Belarus",
"BE"    =>  "Belgium",
"BZ"    =>  "Belize",
"BJ"    =>  "Benin",
"BM"    =>  "Bermuda",
"BT"    =>  "Bhutan",
"BO"    =>  "Bolivia",
"BL"    =>  "Bonaire",
"BA"    =>  "Bosnia &amp; Herzegovina",
"BW"    =>  "Botswana",
"BR"    =>  "Brazil",
"BC"    =>  "British Indian Ocean Territory",
"BN"    =>  "Brunei",
"BG"    =>  "Bulgaria",
"BF"    =>  "Burkina Faso",
"BI"    =>  "Burundi",
"KH"    =>  "Cambodia",
"CM"    =>  "Cameroon",
"CA"    =>  "Canada",
"IC"    =>  "Canary Islands",
"CV"    =>  "Cape Verde",
"KY"    =>  "Cayman Islands",
"CF"    =>  "Central African Republic",
"TD"    =>  "Chad",
"CD"    =>  "Channel Islands",
"CL"    =>  "Chile",
"CN"    =>  "China",
"CI"    =>  "Christmas Island",
"CS"    =>  "Cocos Island",
"CO"    =>  "Colombia",
"CC"    =>  "Comoros",
"CG"    =>  "Congo",
"CK"    =>  "Cook Islands",
"CR"    =>  "Costa Rica",
"CT"    =>  "Cote D'Ivoire",
"HR"    =>  "Croatia",
"CU"    =>  "Cuba",
"CB"    =>  "Curacao",
"CY"    =>  "Cyprus",
"CZ"    =>  "Czech Republic",
"DK"    =>  "Denmark",
"DJ"    =>  "Djibouti",
"DM"    =>  "Dominica",
"DO"    =>  "Dominican Republic",
"TM"    =>  "East Timor",
"EC"    =>  "Ecuador",
"EG"    =>  "Egypt",
"SV"    =>  "El Salvador",
"GQ"    =>  "Equatorial Guinea",
"ER"    =>  "Eritrea",
"EE"    =>  "Estonia",
"ET"    =>  "Ethiopia",
"FA"    =>  "Falkland Islands",
"FO"    =>  "Faroe Islands",
"FJ"    =>  "Fiji",
"FI"    =>  "Finland",
"FR"    =>  "France",
"GF"    =>  "French Guiana",
"PF"    =>  "French Polynesia",
"FS"    =>  "French Southern Territory",
"GA"    =>  "Gabon",
"GM"    =>  "Gambia",
"GE"    =>  "Georgia",
"DE"    =>  "Germany",
"GH"    =>  "Ghana",
"GI"    =>  "Gibraltar",
"GB"    =>  "Great Britain",
"GR"    =>  "Greece",
"GL"    =>  "Greenland",
"GD"    =>  "Grenada",
"GP"    =>  "Guadeloupe",
"GU"    =>  "Guam",
"GT"    =>  "Guatemala",
"GN"    =>  "Guinea",
"GY"    =>  "Guyana",
"HT"    =>  "Haiti",
"HW"    =>  "Hawaii",
"HN"    =>  "Honduras",
"HK"    =>  "Hong Kong",
"HU"    =>  "Hungary",
"IS"    =>  "Iceland",
"IN"    =>  "India",
"ID"    =>  "Indonesia",
"IA"    =>  "Iran",
"IQ"    =>  "Iraq",
"IE"    =>  "Ireland",
"IM"    =>  "Isle of Man",
"IL"    =>  "Israel",
"IT"    =>  "Italy",
"JM"    =>  "Jamaica",
"JP"    =>  "Japan",
"JO"    =>  "Jordan",
"KZ"    =>  "Kazakhstan",
"KE"    =>  "Kenya",
"KI"    =>  "Kiribati",
"NK"    =>  "Korea North",
"KR"    =>  "Korea South",
"KW"    =>  "Kuwait",
"KG"    =>  "Kyrgyzstan",
"LA"    =>  "Laos",
"LV"    =>  "Latvia",
"LB"    =>  "Lebanon",
"LS"    =>  "Lesotho",
"LR"    =>  "Liberia",
"LY"    =>  "Libya",
"LI"    =>  "Liechtenstein",
"LT"    =>  "Lithuania",
"LU"    =>  "Luxembourg",
"MO"    =>  "Macau",
"MK"    =>  "Macedonia",
"MG"    =>  "Madagascar",
"MY"    =>  "Malaysia",
"MW"    =>  "Malawi",
"MV"    =>  "Maldives",
"ML"    =>  "Mali",
"MT"    =>  "Malta",
"MH"    =>  "Marshall Islands",
"MQ"    =>  "Martinique",
"MR"    =>  "Mauritania",
"MU"    =>  "Mauritius",
"ME"    =>  "Mayotte",
"MX"    =>  "Mexico",
"MI"    =>  "Midway Islands",
"MD"    =>  "Moldova",
"MC"    =>  "Monaco",
"MN"    =>  "Mongolia",
"MS"    =>  "Montserrat",
"MA"    =>  "Morocco",
"MZ"    =>  "Mozambique",
"MM"    =>  "Myanmar",
"NA"    =>  "Nambia",
"NU"    =>  "Nauru",
"NP"    =>  "Nepal",
"AN"    =>  "Netherland Antilles",
"NL"    =>  "Netherlands",
"NV"    =>  "Nevis",
"NC"    =>  "New Caledonia",
"NZ"    =>  "New Zealand",
"NI"    =>  "Nicaragua",
"NE"    =>  "Niger",
"NG"    =>  "Nigeria",
"NW"    =>  "Niue",
"NF"    =>  "Norfolk Island",
"NO"    =>  "Norway",
"OM"    =>  "Oman",
"PK"    =>  "Pakistan",
"PW"    =>  "Palau Island",
"PS"    =>  "Palestine",
"PA"    =>  "Panama",
"PG"    =>  "Papua New Guinea",
"PY"    =>  "Paraguay",
"PE"    =>  "Peru",
"PH"    =>  "Philippines",
"PO"    =>  "Pitcairn Island",
"PL"    =>  "Poland",
"PT"    =>  "Portugal",
"PR"    =>  "Puerto Rico",
"QA"    =>  "Qatar",
"RE"    =>  "Reunion",
"RO"    =>  "Romania",
"RU"    =>  "Russia",
"RW"    =>  "Rwanda",
"NT"    =>  "St Barthelemy",
"EU"    =>  "St Eustatius",
"HE"    =>  "St Helena",
"KN"    =>  "St Kitts-Nevis",
"LC"    =>  "St Lucia",
"MB"    =>  "St Maarten",
"PM"    =>  "St Pierre &amp; Miquelon",
"VC"    =>  "St Vincent &amp; Grenadines",
"SP"    =>  "Saipan",
"SO"    =>  "Samoa",
"AS"    =>  "Samoa American",
"SM"    =>  "San Marino",
"ST"    =>  "Sao Tome &amp; Principe",
"SA"    =>  "Saudi Arabia",
"SN"    =>  "Senegal",
"SC"    =>  "Seychelles",
//"S0"  =>  "Serbia",
"SL"    =>  "Sierra Leone",
"SG"    =>  "Singapore",
"SK"    =>  "Slovakia",
"SI"    =>  "Slovenia",
"SB"    =>  "Solomon Islands",
"OI"    =>  "Somalia",
"ZA"    =>  "South Africa",
"ES"    =>  "Spain",
"LK"    =>  "Sri Lanka",
"SD"    =>  "Sudan",
"SR"    =>  "Suriname",
"SZ"    =>  "Swaziland",
"SE"    =>  "Sweden",
"CH"    =>  "Switzerland",
"SY"    =>  "Syria",
"TA"    =>  "Tahiti",
"TW"    =>  "Taiwan",
"TJ"    =>  "Tajikistan",
"TZ"    =>  "Tanzania",
"TH"    =>  "Thailand",
"TG"    =>  "Togo",
"TK"    =>  "Tokelau",
"TO"    =>  "Tonga",
"TT"    =>  "Trinidad &amp; Tobago",
"TN"    =>  "Tunisia",
"TR"    =>  "Turkey",
"TU"    =>  "Turkmenistan",
"TC"    =>  "Turks &amp; Caicos Is",
"TV"    =>  "Tuvalu",
"UG"    =>  "Uganda",
"UA"    =>  "Ukraine",
"AE"    =>  "United Arab Emirates",
"GB"    =>  "United Kingdom",
"US"    =>  "United States of America",
"UY"    =>  "Uruguay",
"UZ"    =>  "Uzbekistan",
"VU"    =>  "Vanuatu",
"VA"    =>  "Vatican City State",
"VE"    =>  "Venezuela",
"VN"    =>  "Vietnam",
"VB"    =>  "Virgin Islands (Brit)",
"VA"    =>  "Virgin Islands (USA)",
"WF"    =>  "Wallis &amp; Futana Is",
"YE"    =>  "Yemen",
"ZR"    =>  "Zaire",
"ZM"    =>  "Zambia",
"ZW"    =>  "Zimbabwe"
);
	}
	
	public function notification($type = 'approved') {
		$this->db->select();
		$this->db->from('newsletter');
		
		if($type == 'approved') {
			$this->db->where('key', 'approved');
		} else if($type == 'decline') {
			$this->db->where('key', 'declined');
		} else if($type == 'activate') { 
			$this->db->where('key', 'activated');
		}
		
		$query = $this->db->get()->row_array();
		return $query['content'];
		
	}
		
}