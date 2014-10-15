<?php

return array(

	'Len' => array('text' => 'Do you currently hold a valid U.S. drivers license?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'N'
	),
	
/**	'CDLLen' => array('text' => 'Do you currently have a Class-A CDL license?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'N'
	),
**/
	
	'DrvRec' => array('text' => 'Have you had any at-fault accidents in the last year?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'DUITest' => array('text' => 'Have you had any drug or alcohol related driving offenses in the last 5 years?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'CrimRec' => array('text' => 'Have you been convicted of a misdemeanor in the last 5 years?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'FelonRec' => array('text' => 'Have you been convicted of a felony in the last 10 years?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'Probation' => array('text' => 'Are you currently on probation or parole?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'Health' => array('text' => 'Are you epileptic or insulin dependent?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'Military' => array('text' => 'Do you have military experience?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No')
	),
    
    'OptIn' => array('text' => '',
        'type' => 'checkbox',
        'required' => true,
        'options' => array('Y' => 'By checking this box, I consent to receive e-mail or SMS correspondence')
    ),
	
);

?>
