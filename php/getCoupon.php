<?
function getRealClientIp() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } else if(getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } else if(getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } else if(getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } else if(getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } else if(getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = '알수없음';
    }
    return $ipaddress;
}
// print_r($_POST);
// CSRF 방어용 코드
$data=date('YYYYMMDDHHiiss');   // 시시각각 변하는 md5용
if ($_POST['hash']!=md5('아시아경제')){ // md5기반의 단방향 암호화 기술을 사용 restful 사이트를 보호
    echo '<meta charset="UTF-8">';
    $ip= getRealClientIp();
    echo $id.'꺼져 다시오면 혼난다';
}else{
    unset($_POST['hash']);  // 보안용 코드는 지워버리자
    $txt='<tr><td></td>';
    foreach($_POST as $k=>$v){ // 전송된 데이터 기반으로 키 밸류로 분리
        $txt=$txt.'<td>'.$v.'</td>';// 밸류값만 가져다 테이블 row 생성
    }
    $txt.='</tr>';
    print($txt);
}
?>