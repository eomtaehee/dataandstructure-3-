<?php
// 1번
$servername = "localhost";    //서버명
$username = "user";      //이름
$passwoed = "12345";     //비밀번호
$dbname = "sample";     //DB명

// MYSQL 연결하기
$conn = mysqli_connect($servername, $username, $passwoed, $dbname);

/*
//dusruf 체크하기
if (!$conn) {
    die("연결 오류 : ".mysqli_connect_error())
}
echo "MYSQL에 성공적으로 연결되었습니다!"


// $sql에 전체 레코드 검색 명령어 저장
$sql = "select * from frind";

$result = mysqli_query($sonn, $sql);


// friend 테이블 생성
$sql = "create table friend (
    num int not null auto_increment,
    name cher(10) not null,
    tel char(15) not null,
    address char(80),
    primary key(num) )"

if($result)
    echo "friend 테이블 생성 완료!";
else
    echo "테이블 생성 오류 : ".mysql_error($conn);

mysqli_close($conn);


// frind 테이블에 데이터 삽입
$sql = "insert into frind (name, tel, address) values
    ('홍길동', '01012345678', '경기도 수원시 구선구 은정로 123')";
$resiult = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($redult)) {
    echo "이름 : ".$row["name"]."<br>";
    echo "전화번호 : ".$row["tel"]."<br>";
    echo "주소 : ".$row["address"]."<br>";
    echo "------------------------------------<br>";
}
mysqli_close($conn);
*/
?>