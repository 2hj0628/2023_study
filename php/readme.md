# slack
    * https://shorturl.at/stHJW
    * https://join.slack.com/t/thep9/shared_invite/zt-22
# php
    * HTML
     - hyper text markup language
    * <시작태그></종료태그>
    * <시작태그/>
        - 태그의 종류
    * 태그
        - <!DOCTYPE html>
        - <HTML>
            - <head>
                - <meta ...
                - <title ...
                - <style ...
                - <script ...
            - body
                - <h1~h6 제목
                - <div 블럭
                - <p 문단
                - <ul~li
                - <ol~li
                - <span 인라인
                - <label 인라인
                - 폼관련 태그
                    - <form
                    - <input 인라인
                    - <checkbox 인라인
                    - <select 인라인
                    - <radio 인라인
            - 기타태그
                - <address
                - <article
                - <section
* image 로드 안될때
    - ctrl+shift+r

* DATABASE -mysql

* 데이터베이스 생성
```SQL
    CREATE DATABASE `myshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
```

* 테이블생성
```SQL
    CREATE TABLE `myshop`.`users`(
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMNET '고유키',
        `name` VARCHAR(128) NOT NULL DEFAULT '' COMMNET '이름',
        `uid` VARCHAR( 30 ) NOT NULL DEFAULT '' COMMENT '유저아이디',
        `upw` VARCHAR( 256 ) NOT NULL DEFAULT '' COMMENT '패스워드',
        `uemail` VARCHAR( 256 ) NOT NULL DEFAULT '' COMMENT '이메일',
        `status` INT NOT NULL DEFAULT '0' COMMENT '관리상태'
    ) ENGINE = INNODB COMMENT = '유저테이블';
```

* 테이블에서 컬럼추가
```SQL
    ALTER TABLE `users` ADD `status1` TINYINT UNSIGNED NOT NULL DEFAULT `0`
```

* 컬럼삭제
```SQL
    ALTER TABLE `users` DROP `status1`;
```

* 추가 insert
```SQL
    INSERT INTO `myshop`.`users` (
    `id` ,`name` ,`uid` ,`upw` ,`uemail` ,`status`
    )
    VALUES (
    NULL , '홍길동', 'hong', '1234', 'hong@com', '0'
    );
```

* 데이터가져오기 select
```SQL
    SELECT id, name, uid, upw
    FROM `users`
    LIMIT 0 , 30
```

* 데이터수정
```SQL
    UPDATE `myshop`.`users` SET `name` = "박달재" WHERE `users`.`id` =2 LIMIT 1 ;
```

* 데이터삭제
```SQL
    DELETE FROM `myshop`.`users` WHERE `users`.`id` =2 LIMIT 1 ;
```

* 데이터베이스 삭제
```SQL
    DROP DATABASE `myshop`;
```

추가 기술트리
* SE 소프트웨어 엔지니어링
    - 요구분석서
    - UML
        - ERD
        - 유스케이스
        - 액티비티
        - 시퀀스
    - 애자일 프로그래밍
        - 클래스다이어그램
        - 코드 생성기능
        - 프로그램 아키텍쳐
* php
    - 프레임워크 x
    - 함수
    - 비동기
* 웹
    - 반응형 포트폴리오
    - 부트스트랩
* JS
    - Jquery
    - 애니메이션
    - Event
    - Ajax
* 파이썬
    - 데이터 수집 빅데이터 분석
    - 머신러닝
    - 딥러닝
* 데이터베이스
    - SQL
    - SQLITE
    - MySQL
* 리액트
    - 타입스크립트
    