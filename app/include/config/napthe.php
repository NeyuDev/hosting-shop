<?php
$url = 'https://thesieure.com/chargingws/v2';
$partner_id = '7573264261';
$sign = 'd13263869f66d8e0abe767322ff3eaaa';


    function creatSign($partner_key, $params)
    {
        $data = array();
        $data['request_id'] = $params['request_id'];
        $data['code'] = $params['code'];
        $data['partner_id'] = $params['partner_id'];
        $data['serial'] = $params['serial'];
        $data['telco'] = $params['telco'];
        $data['command'] = $params['command'];
        ksort($data);
        $sign = $partner_key;
        foreach ($data as $item) {
            $sign .= $item;
        }

		//return $sign;

        return md5($sign);
    }

?>
