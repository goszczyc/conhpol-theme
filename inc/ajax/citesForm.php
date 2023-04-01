<?php
function citesCheck()
{
  try {
    // variables
    $success = true;
    $message = '';
    $url = '';
    $res = [];

    // get input value
    $inputValue = (!empty($_POST['serialNumber'])) ? stripcslashes(esc_attr($_POST['serialNumber'])) : '';
    $serialNumber = strtoupper($inputValue);

    // validate input value
    if (!validateCertyficate($serialNumber)) {
      $success = false;
      $message = translate('Incorrect serial number format', 'conhpol');
    }

    if (!$success) {
      // header('Content-type: application/json');
      echo json_encode(['success' => $success, 'message' => $message]);
    } else {

      // get certyficates data
      $args = array(
        'post_type' => 'cites',
        'numberposts' => -1
      );
      $certyficates = get_posts($args);

      if ($certyficates) {

        $url = getCertyficateUrl($certyficates, $serialNumber);
        if ($url) {
          $message = translate('Download your certyficate', 'conhpol');
          $res = ['success' => true, 'message' => $message, 'url' => $url];
        } else {
          $message = translate('Certyficate not found', 'conhpol');
          $res = ['success' => false, 'message' => $message];
        }
        // header('Content-type: application/json');
        echo json_encode($res);
      } else {
        $message = translate('Server error', 'conhpol');
        throw new Exception($message);
      }
    }
  } catch (Exception $e) {
    $message = $e->getMessage();
    // header('Content-type: application/json');
    echo json_encode(['succes' => false, 'message' => $message]);
  } finally {
    wp_die();
  }
}


function validateCertyficate($serial_number)
{
  if (!preg_match('/^[\/a-zA-Z0-9-]+$/', $serial_number)) {
    return false;
  } else {
    return true;
  }
}

function getCertyficateUrl($elements, $input)
{
  $url = false;
  foreach ($elements as $element) {
    $code = strtoupper(get_field('code', $element));
    if (!$code) return false;
    if ($code == $input) {
      $url = get_field('pdf_certyficate', $element);

      break;
    }
  }
  return $url;
}
add_action('wp_ajax_citesCheck', 'citesCheck');
add_action('wp_ajax_nopriv_citesCheck', 'citesCheck');
