<?php


function bjt_preprocess(&$variables, $hook){

  $variables['theme_path'] = base_path() . drupal_get_path('theme','bjt');

}

function bjt_preprocess_page(&$vars){
  $scripts = drupal_add_js();
  unset($scripts['core']['misc/jquery.js']);
  $vars['scripts'] = drupal_get_js('header', $scripts);
}


function bjt_preprocess_search_theme_form(&$vars, $hook) {
  // Remove the "Search this site" label from the form.
  $vars['form']['search_theme_form']['#title'] = t('');

  // Add a custom class and placeholder text to the search box.
  $vars['form']['search_theme_form']['#attributes'] = array('class' => 'NormalTextBox txtSearch', 'id' => 'search'
                                                            ,'style' => empty($vars['is_front']) ? 'margin-top: 0' : '');

  // Change the text on the submit button
  //$vars['form']['submit']['#value'] = t('Go');

  // Rebuild the rendered version (search form only, rest remains unchanged)
  unset($vars['form']['search_theme_form']['#printed']);
  $vars['search']['search_theme_form'] = drupal_render($vars['form']['search_theme_form']);

  $vars['form']['submit']['#value'] = 'caută';
  $vars['form']['submit']['#attributes'] = array('class' => 'submit');

  // Rebuild the rendered version (submit button, rest remains unchanged)
  unset($vars['form']['submit']['#printed']);
  $vars['search']['submit'] = drupal_render($vars['form']['submit']);

  // Collect all form elements to make it easier to print the whole form.
  $vars['search_form'] = implode($vars['search']);
}


function bjt_preprocess_search_result(&$vars, $hook) {

    //var_export($vars);
}



