<?php
    $id = $_GET['id'];

    $_295 = $_GET['rate'] ?? 0;//画质选择: 0默认蓝光,1为高清,2为超清

    $ch = curl_init();
    curl_setopt_array($ch,[
  CURLOPT_URL => 'https://wxapp.douyucdn.cn/api/nc/stream/roomPlayer',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"room_id=$id&big_ct=cpn-androidmpro&did=10000000000000000000000000001501&mt=2&rate=$_295",
]);

    $json = json_decode(curl_exec($ch))->data->live_url;

    curl_close($ch);
   // die($json);
    header('location:'.$json);

?>