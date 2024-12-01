<?php
class Members extends Trongate {

    public function index() {
        $data['view_file'] = 'members_index';
        $this->template('public', $data);
    }

    public function fetch_members() {
    	$data['rows'] = $this->model->get('id', 'members');
    	$this->view('members_table', $data);
    }

    public function member_form() {
    	$this->view('member_form');
    }

    public function delete_record() {

    	$update_id = segment(3, 'int');
    	$record_obj = $this->model->get_where($update_id, 'members');
    	$first_name = $record_obj->first_name ?? 'The';
    	$last_name = $record_obj->last_name ?? 'record';
    	
    	$this->model->delete($update_id, 'members');

    	$num_rows = $this->model->count('members');
    	if ($num_rows === 0) {
    		$sql = 'TRUNCATE TABLE members';
    		$this->model->query($sql);
    	}

    	http_response_code(200);
    	echo $first_name.' '.$last_name.' was successfully deleted from the database.';
    }

    public function submit() {

    	$this->validation->set_rules('first_name', 'first name', 'required|min_length[2]|max_length[65]');
    	$this->validation->set_rules('last_name', 'last name', 'required|min_length[2]|max_length[75]');
    	$this->validation->set_rules('email_address', 'email address', 'required|valid_email');

    	$result = $this->validation->run();

    	if ($result === true) {
    		$data['first_name'] = post('first_name', true);
    		$data['last_name'] = post('last_name', true);
    		$data['email_address'] = post('email_address', true);
    		$this->model->insert($data, 'members');
    		http_response_code(200);
    		echo 'New record added.';
    		die();
    	}

    }

	function add_members() {
	  // Arrays of first names, last names, and email domains
	  $first_names = ['John', 'Jane', 'Robert', 'Emily', 'Michael', 'Sarah', 'David', 'Jessica', 'James', 'Laura', 'Daniel', 'Karen', 'William', 'Sophia', 'Chris', 'Amanda', 'Joseph', 'Olivia', 'Andrew', 'Megan'];
	  $last_names = ['Smith', 'Doe', 'Brown', 'Davis', 'Johnson', 'Miller', 'Wilson', 'Moore', 'Taylor', 'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin', 'Garcia', 'Martinez', 'Rodriguez', 'Lee', 'Walker'];
	  $email_domains = ['example.com', 'random.net', 'domain.com', 'webmail.org', 'place.com', 'mymail.com', 'portal.org', 'company.com', 'network.com', 'address.org'];

	  // Shuffle the arrays to ensure randomness
	  shuffle($first_names);
	  shuffle($last_names);
	  shuffle($email_domains);

	  // Prepare the members data
	  $members_data = [];
	  $used_combinations = [];

	  for ($i = 0; $i < 20; $i++) {
	    do {
	      $first_name = $first_names[array_rand($first_names)];
	      $last_name = $last_names[array_rand($last_names)];
	      $email_domain = $email_domains[array_rand($email_domains)];
	      $email_address = strtolower($first_name . '.' . $last_name . '@' . $email_domain);

	      $combination = $first_name . ' ' . $last_name . ' ' . $email_address;
	    } while (in_array($combination, $used_combinations));

	    $used_combinations[] = $combination;

	    $members_data[] = [
	      'first_name' => $first_name,
	      'last_name' => $last_name,
	      'email_address' => $email_address
	    ];
	  }

	  // Insert data into the members table
	  foreach ($members_data as $member) {
	    $this->model->insert($member);
	  }

	  echo '20 unique members have been added to the database!';
	}


}