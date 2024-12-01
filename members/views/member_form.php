<h3>Create New Record</h3>

<?php
$form_attr = [
    'mx-post' => 'members/submit',
    'mx-on-success' => '#members-container',
    'mx-close-on-success' => 'true',
    'mx-animate-success' => 'true',
    'mx-on-error' => '#error-msg',
    'autocomplete' => 'off',
    'mx-target' => '#information'
];

echo form_open('#', $form_attr);
echo form_label('First Name');
$first_name_attr = [
    'placeholder' => 'Enter first name here...',
];
echo form_input('first_name', '', $first_name_attr);

echo form_label('Last Name');
$last_name_attr = [
    'placeholder' => 'Enter last name here...',
];
echo form_input('last_name', '', $last_name_attr);

echo form_label('Email Address');
$email_address_attr = [
    'placeholder' => 'Enter email address here...',
];
echo form_email('email_address', '', $email_address_attr);

echo '<p class="text-right">';
$close_btn_attr = [
   'class' => 'alt',
   'onclick' => 'closeModal()'
];
echo form_button('close_btn', 'Close', $close_btn_attr);
echo form_submit('submit', 'Submit');
echo '</p>';
echo form_close();










