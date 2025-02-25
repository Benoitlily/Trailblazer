<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'https:&#x2F;&#x2F;trailblazersgh.com&#x2F;',
    'to' => 'info@trailblazersgh.com',
    'toCopy' => '',
    'toHiddenCopy' => ''
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'E-mail',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'E-mail\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'date' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Date of Birth',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Date of Birth\' is required.'
    )
    ),
    'phone' => array(
    'order' => 4,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'Employment Status' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Employment Status',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Employment Status\' is required.'
    )
    ),
    'message' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'Give us a brief profile of yourself',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Give us a brief profile of yourself\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>