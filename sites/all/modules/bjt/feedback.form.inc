<?php
/**
 *
 */



function bjt_feedback_form(){
  $form['name'] = array(
    '#title' => 'Nume',
    '#description' => 'Numele dumneavoastră',
    '#type' => 'textfield',
  );
  $form['email'] = array(
    '#title' => 'Email',
    '#description' => 'Adresa de mail pe care doriţi să primiţi răspuns',
    '#type' => 'textfield',
  );
  $form['mesaj'] = array(
    '#title' => 'Mesaj:',
    '#type' => 'textarea',
  );
  $form['send'] = array(
    '#type' => 'submit',
    '#title' => 'Trimite',
    '#value' => 'Trimite',
  );


  $form['#submit'][] = 'bjt_feedback_form_submit';


  return $form;
}


function bjt_feedback_form_submit($form, &$form_state){


  $mesaj['id'] = 'feedback_form';
  $mesaj['to'] = 'luxianm@gmail.com';
  $mesaj['subject'] = '[BJT] Mesaj Feedback';

  $mesaj['body'] =
"
{$form_state['values']['name']} ({$form_state['values']['email']}) a scris:<br />

{$form_state['values']['mesaj']}
";

  //drupal_mail_send($mesaj);
  $account = user_load(1);
  drupal_mail('bjt_browsing', 'feedback_form', 'luxianm@gmail.com', user_preferred_language($account), array(), NULL, true);
}
