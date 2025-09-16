<?php
header('Content-Type: application/json');

$accessKey = 'eyJ0eXAiOiJKV1QiLC';
$APIURL = 'http://192.168.1.25/krishnashraya/api/';
$input = json_decode(file_get_contents('php://input'), true);
$path = $_GET['action'] ?? '';

function callExternalApi($url, $payload)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo json_encode(['error' => curl_error($ch)]);
        curl_close($ch);
        exit;
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200) {
        echo json_encode(['error' => "HTTP error! Status: $httpCode"]);
        exit;
    }

    return $response;
}

switch ($path) {
    case 'get-country':
        $payload = json_encode([
            'accessKey' => $accessKey
        ]);
        $response = callExternalApi($APIURL . 'get-country', $payload);
        echo $response;
        break;

    case 'get-dropdown-lables':
        $payload = json_encode([
            'accessKey' => $accessKey
        ]);
        $response = callExternalApi($APIURL . 'get-dropdown-lables', $payload);
        echo $response;
        break;

    case 'chanters-club-registration':
        // file_put_contents('php://stderr', print_r($input, true));
        $data = [
            'accessKey'         => $accessKey,
            'fullname'          => $input['fullname'] ?? '',
            'gender'            => $input['gender'] ?? '',
            'education'         => $input['education'] ?? '',
            'company'           => $input['company'] ?? '',
            'designation'       => $input['designation'] ?? '',
            'motherTongue'      => $input['motherTongue'] ?? '',
            'language'          => $input['language'] ?? '',
            'state'             => $input['state'] ?? '',
            'city'              => $input['city'] ?? '',
            'area'              => $input['area'] ?? '',
            'dob'               => $input['dob'] ?? '',
            'mobile'            => $input['mobile'] ?? '',
            'email'             => $input['email'] ?? '',
            'marital'           => $input['marital'] ?? '',
            'country'           => $input['country'] ?? '',
            'progress'          => $input['progress'] ?? '',
            'volunteer'         => $input['volunteer'] ?? '',
            'chant_commitment'  => $input['chant_commitment'] ?? '',
            'gita_class'        => $input['gita_class'] ?? '',
            'Center'            => $input['Center'] ?? '',
            'CN'                => $input['CN'] ?? '',
        ];
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        // die;

        $payload = json_encode($data);
        $response = callExternalApi($APIURL . 'chanters-club-registration', $payload);
        echo $response;
        break;

    case 'chanters-details':
        $payload = json_encode([
            'accessKey' => $accessKey,
            'RegID'     => $input['RegID'] ?? ''
        ]);

        $apiUrl = $APIURL . 'chanters-details';

        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload)
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo json_encode(['error' => curl_error($ch)]);
            curl_close($ch);
            exit;
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            http_response_code($httpCode);
            echo json_encode(['error' => "HTTP error! Status: $httpCode"]);
            exit;
        }

        echo $response;
        break;

    case 'validate-chanter-mobile-number':

        $payload = json_encode([
            'accessKey' => $accessKey,
            'mobile'     => $input['mobile'] ?? ''
        ]);

        $apiUrl = $APIURL . 'validate-chanter-mobile-number'; // Using same endpoint for validation

        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload)
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo json_encode(['error' => curl_error($ch)]);
            curl_close($ch);
            exit;
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            http_response_code($httpCode);
            echo json_encode(['error' => "HTTP error! Status: $httpCode"]);
            exit;
        }

        $decoded = json_decode($response, true);
        echo $response;
        break;


    default:
        http_response_code(404);
        echo json_encode(['error' => 'Invalid action']);
}
