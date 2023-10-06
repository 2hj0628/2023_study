<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <!-- 합쳐지고 최소화된 최신 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- 부가적인 테마 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <style type='text/css'>
            .row div{border:1px solid grey;}
            .redbox{background-color:red;}
        </style>
        <?
            // 단열 주석
            /* 다열 주석 */
            // 변수 $변수명
            // 문자열 합치기는 .이다
            // 변수형이 없다
            // 반복문 for(증감변수초기화;증감변수조건;증감){코드블럭} while
            for ($i=1;$i<7;$i++){
                $a='h'.$i;
                print('<'.$a.'>'.$i.'안녕하세요</'.$a.'>');
            }

        ?>
    </head>
    <body>
            <?php
            // for($a=2;$a<7;$a++){
            //     print('<div class="row">');
            //     for($i=0;$i<$a;$i++){
            //         $s='<div class="col-lg-'.$a.'"><h1>.col-lg-'.$a.'</h1></div>';
            //         print($s);
            //     }
            //     print('</div>');
            // }

            // 풀이-------------------------------------------------------------
            // 선언 function 함수명(매개변수){코드블럭;return 변수명}
            function makeBcol($wkan=3){
                $total=12;  // 부트스트랩 전체컬럼수
                /* php 수학 내장함수  */
                // $cNo=ceil($total/$wkan);    // 올림 클래스 숫자
                // $cNo=floor($total/$wkan);    // 내림
                $cNo=round($total/$wkan);    // 반올림

                $cnt=$total/$cNo;   // 나뉜 블럭 갯수
                print('<div class="row">'."\n");
                for($i=0;$i<$cnt;$i++){
                    if($i%2==1){
                        $addClass='redbox';
                    }else{
                        $addClass='';
                    }
                    $s='<div class="col-lg-'.$cNo.' '.$addClass.'"><h1>.col-lg-'.$cNo.'('.$cnt.')</h1></div>';
                    print($s);
                }
                print('</div>'."\n");
            }
                
            for ($kan=2;$kan<7;$kan++){
                    makeBcol($kan);
            }

            function makeHr($title='개별처리'){
                print('<hr>');
                print('<hr>'.$title.'</hr>');
                print('<hr>');
            }

            makeHr();
            makeHr('사다리만들기');
            
            function grid1($cNo=1,$addClass='redbox'){
                $other=12-$cNo;
                $s='<div class="row">';
                $s=$s.'<div class="col-lg-'.$cNo.' "><h1>.col-lg-'.$cNo.'</h1></div>';
                $s.='<div class="col-lg-'.$other.' '.$addClass.'"><h1>.col-lg-'.$cNo.'</h1></div>';
                $s.='</div>';
                print($s);
            }
            // function grid2($cNo=1,$addClass='redbox'){
            //     $other=12-$cNo;
            //     $s='<div class="row">'.'<div class="col-lg-'.$cNo.' "><h1>.col-lg-'.$cNo.'</h1></div>'.'<div class="col-lg-'.$other.' '.$addClass.'"><h1>.col-lg-'.$cNo.'</h1></div>'.'</div>';
            //     print($s);
            // }

            for($i=11;$i>0;$i--){
                grid1($i);
            }



            //-----------------------------------------------------------
            makeHR('단순배열');
            /* 단순 배열 */
            $arr=array(1,2,'국어','수학');
            for($i=0;$i<count($arr);$i++){
                print('<li>인덱스('.$i.'):'.$arr[$i].'</l1>');
            }
            foreach($arr as $a){
                print('<li>'.$a.'</li>');
            }

            makeHR('연관배열');
            /* 연관 배열 key - value */
            $arr=array(1=>'국어',2=>'수학',5=>'영어','6'=>'수학');
            for($i=0;$i<count($arr);$i++){
                print('<li>인덱스('.$i.'):'.$arr[$i].'</l1>');
            }
            foreach($arr as $k=>$v){
                print('<li>'.$k.':'.$v.'</li>');
            }
            


            //---------------------------------------------------------
            $score=75;
            $score=10*floor($score/10);
            print($score);
            switch($score){
                case 90:
                    print('수');
                    break;
                case 80:
                    print('우');
                    break;
                case 70:
                    print('미');
                    break;
                default:
                    print('낙제');

            }
            ?>
            <!-- <div class="col-md-6"><h1>.col-md-6</h1></div>
            <div class="col-md-6"><h1>.col-md-6</h1></div> -->
        
        <!-- <div class="row">
            <div class="col-sm-5"><h1>.col-sm-5</h1></div>
            <div class="col-sm-5"><h1>.col-sm-5</h1></div>
        </div>
        <div class="row">
            <div class="col-xs-4"><h1>.col-xs-4</h1></div>
            <div class="col-xs-4"><h1>.col-xs-4</h1></div>
            <div class="col-xs-4"><h1>.col-xs-4</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-3"><h1>.col-lg-3</h1></div>
            <div class="col-lg-3"><h1>.col-lg-3</h1></div>
            <div class="col-lg-3"><h1>.col-lg-3</h1></div>
            <div class="col-lg-3"><h1>.col-lg-3</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-6"><h1>.col-lg-6</h1></div>
            <div class="col-lg-4"><h1>.col-lg-4</h1></div>
        </div> -->
    </body>
</html>
