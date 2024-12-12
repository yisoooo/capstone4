<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>
    <style>
        body {
            
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  height: 100vh; /* 화면 전체를 사용 */
}
.logo {
      font-size: 40px;
      font-weight: bold;
      color: #ffffff;
    }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        header a:hover {
            text-decoration: underline;
        }
        .container {
            width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .profile-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .profile-section img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .profile-section .user-info {
            display: flex;
            align-items: center;
        }
        .profile-section .user-info span {
            margin-left: 10px;
            font-size: 18px;
        }
        .stats {
            display: flex;
            justify-content: space-around;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }
        .stats div {
            text-align: center;
        }
        .stats div h3 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .stats div p {
            color: #888;
            margin: 5px 0 0;
        }
        .links {
            display: flex;
            justify-content: space-around;
            padding: 20px 0;
        }
        .links ul {
            list-style: none;
            padding: 0;
        }
        .links ul li {
            margin: 5px 0;
        }
        .links ul li a {
            text-decoration: none;
            color: #333;
        }
        .links ul li a:hover {
            text-decoration: underline;
        }
        footer {
  background-color: #f9f9f9;
  padding: 20px;
  text-align: center;
  font-size: 14px;
  color: #777;
  border-top: 1px solid #ccc;
  width: 100%;
  box-sizing: border-box;
  margin-top: auto; /* footer가 항상 맨 아래에 위치하도록 설정 */
}
    footer div{
        margin: 5px 0;
    }

        .login-section {
            text-align: center;
            margin: 20px 0;
        }
        .login-section a {
            text-decoration: none;
            color: #007bff;
            margin: 0 10px;
        }
        .login-section a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- 헤더 -->
<header>
    <div class="logo"><a href="index1.html" style="text-decoration: none; color: inherit;">UCAR</a></div>
    <div class="login-section">
        <a href="logout.html">로그아웃</a>
    </div>
</header>

<!-- 메인 컨테이너 -->
<div class="container">
    <!-- 프로필 섹션 -->
    <div class="profile-section">
        <div class="user-info">
            <img src="https://via.placeholder.com/40" alt="프로필 이미지">
            <span>신이수</span>
        </div>
        <div>
            목록 (최근 3개월 기준)
        </div>
    </div>

    <!-- 통계 섹션 -->
    <div class="stats">
        <div>
            <h3>6</h3>
            <a href="mypage1.html">찜한 차량</a>
        </div>
        <div>
            <h3>21</h3>
            <a href="mypage2.html">최근 본 차량</a>
        </div>
        <div>
            <h3>0</h3>
            <a href="mypage3.html">판매중 차량</a>
        </div>
        <div>
            <h3>0</h3>
            <a href="mypage4.html">판매된 차량</a>
        </div>
        <div>
            <h3>0</h3>
            <a href="mypage5.html">구매문의 차량</a>
        </div>
    </div>

    <!-- 링크 섹션 -->
    <div class="links">
        <ul>
            <li><a href="#">개인정보처리방침</a></li>
            <li><a href="#">이용약관</a></li>
            <li><a href="gongzi.html">공지사항</a></li>
            <li><a href="#">계정정보</a></li>
            <li><a href="#">로그아웃</a></li>
        </ul>
        <ul>
            <li><a href="#">자동차조회</a></li>
            <li><a href="#">최근활동</a></li>
            <li><a href="mypage1.html">찜한 차량</a></li>
            <li><a href="service.html">고객센터</a></li>
        </ul>
    </div>
</div>

<!-- 푸터 -->

<footer>
    <div>CUSTOMER CENTER: TEL 000-0000-0000</div>
  <div>BANK ACCOUNT: 0000000000</div>
  <div>RETURN/EXCHANGE: 서울특별시 강남구 테헤란로 000</div>
  <div>유카 (UCAR) TEL. 000 0000 0000 OWNER. NNN</div>
  <div>COPYRIGHT © 유카 주식회사. ALL RIGHTS RESERVED.</div>
  </footer>

</body>
</html>
