<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>내차팔기 신청하기</title>
  <style>
    body {
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  height: 100vh; /* 화면 전체를 사용 */
}

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: white;
      border-bottom: 1px solid #ccc;
    }

    header a {
      text-decoration: none;
      color: #333;
      margin-right: 15px;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .main-content {
      padding: 30px 20px;
    }

    .main-content h1 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
    }

    .form-container {
      max-width: 500px;
      margin: 0 auto;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      background-color: #f9f9f9;
    }

    .form-container label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .form-container input,
    .form-container select,
    .form-container button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .form-container .small-group {
      display: flex;
      gap: 10px;
      justify-content: space-between;
    }

    .form-container .small-group button {
      width: 32%;
    }

    .checkbox {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .checkbox input {
      width: auto;
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
  </style>
</head>
<body>
  <header>
    <div class="logo">Ucar</div>
    <nav>
            <a href="gucsan.html">내차팔기</a>
            <a href="buycar.html">내차사기</a>
            <a href="rentcar.html">렌트</a>
            <a href="finance.html">금융</a>
            <a href="media.html">미디어</a>
    </nav>
  </header>

  <div class="main-content">
    <h1>내차팔기 신청하기</h1>
    <div class="form-container">
      <form action="#">
        <label for="car-number">차량번호</label>
        <input type="text" id="car-number" name="car-number" placeholder="예) 123가 1234" required>

        <label for="car-name">차량명</label>
        <input type="text" id="car-name" name="car-name" placeholder="예) 소나타 DN8" required>

        <label for="distance">주행거리</label>
        <input type="text" id="distance" name="distance" placeholder="예) 10,000 km" required>

        <label for="applicant-name">신청자명</label>
        <input type="text" id="applicant-name" name="applicant-name" placeholder="예) 홍길동" required>

        <label for="phone-number">휴대전화번호</label>
        <input type="text" id="phone-number" name="phone-number" placeholder="예) 010-1234-5678" required>

        <label for="region">방문진단 요청지역</label>
        <select id="region" name="region" required>
          <option value="" disabled selected>시/도 선택</option>
          <option value="seoul">서울</option>
          <option value="busan">부산</option>
          <option value="daegu">대구</option>
          <!-- 더 많은 옵션 추가 가능 -->
        </select>

        <div class="small-group">
          <button type="button">주차</button>
          <button type="button">거래 위치</button>
          <button type="button">30미터 이내</button>
        </div>

        <div class="checkbox">
          <input type="checkbox" id="age-check" name="age-check" required>
          <label for="age-check">만 19세 이상입니다 (필수)</label>
        </div>

        <div class="checkbox">
          <input type="checkbox" id="terms-check" name="terms-check" required>
          <label for="terms-check">개인정보 수집 및 이용 동의 (필수)</label>
        </div>

        <button type="submit">신청하기</button>
      </form>
    </div>
  </div>

  <footer>
    <p>고객센터 TEL 000-0000-0000</p>
    <p>BANK ACCOUNT 000은행 0000000000</p>
    <p>RETURN / EXCHANGE 서울특별시 강남구 테헤란로 000</p>
    <p>© 유카 주식회사 ALL RIGHTS RESERVED.</p>
  </footer>
</body>
</html>
