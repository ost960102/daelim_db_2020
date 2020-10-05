<?php

//시작이 여기...
//echo "여기가 시작";

// resource 파일로 점프
// 11장 설명.... 
// include  사용한 만큼 파일을 결합하여 실행
// _once => 동일한 파일이 include 되었을 때, 한번만 동작
#include_once "resource.php";  //함수 한번 선언

#include "resource.php";  // 함수 중복선언.

// include vs require
// include => 파일이 존재하지 않아요 , 경고...계속 실행
// require => 만일 파일 없으면, 프로그램 중단.(stop)

require_once "resource.php";




// 되돌아와서 프로그램 계속 실행

$layout="layout03";
$layout=html_get_resource($layout);
$content=html_get_resource($layout,"hello.html");

$layout=str_replace("{{contents}}", $content, $layout); //치환
echo $layout;