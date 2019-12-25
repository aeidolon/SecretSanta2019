<?php
if (!empty($_POST['data'])) {
    $data = $_POST['data'];
    $serverID = '615248396357206036';
    

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://discordapp.com/api/guilds/" . $serverID . "/members?limit=1000",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: " . $data,
        "cache-control: no-cache"
      ),
    ));
    
    $members = curl_exec($curl);
    $err = curl_error($curl);
    
    
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $members;
        $m_file = fopen("store/members.json", 'w');
        fwrite($m_file, json_encode($members));
        fclose($m_file);
    }
    
    
    
    curl_close($curl);

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://discordapp.com/api/guilds/" . $serverID . "/emojis",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: " . $data,
        "cache-control: no-cache"
      ),
    ));
    
    $emoji = curl_exec($curl);
    $err = curl_error($curl);
    
    
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $emoji;
        $e_file = fopen("store/emoji.json", 'w');
        fwrite($e_file, json_encode($emoji));
        fclose($e_file);
    }
    
    
    
    curl_close($curl);
}
