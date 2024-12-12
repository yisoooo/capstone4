<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
  <style>
    /* 기존 CSS 유지 */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .signup-container {
      background-color: #fff;
      border-radius: 8px;
      padding: 40px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      max-width: 100%;
    }

    .signup-container h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }

    .input-group {
      margin-bottom: 15px;
      display: flex;
      flex-direction: column;
    }

    .input-group label {
      font-size: 14px;
      color: #555;
      margin-bottom: 5px;
    }

    .input-group input {
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .input-group input:focus {
      outline: none;
      border-color: #007bff;
    }

    .input-group .button-group {
      display: flex;
      justify-content: flex-start;
      gap: 10px;
    }

    .input-group button {
      padding: 10px 15px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .input-group button:hover {
      background-color: #0056b3;
    }

    .signup-container button[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #00bfffc4;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .signup-container button[type="submit"]:hover {
      background-color: #218838;
    }

    .signup-container .link {
      display: flex;
      justify-content: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .signup-container .link a {
      color: #007bff;
      text-decoration: none;
    }

    .signup-container .link a:hover {
      text-decoration: underline;
    }

    /* 반응형 디자인 */
    @media (max-width: 480px) {
      .signup-container {
        padding: 20px;
        width: 90%;
      }
    }
  </style>
</head>
<body>

  <div class="signup-container">
    <h2>UCAR 회원가입</h2>
    <form id="signupForm">
      <!-- 이름 -->
      <div class="input-group">
        <label for="name">이름</label>
        <input type="text" id="name" name="name" placeholder="이름을 입력하세요" required>
      </div>

      <!-- 아이디 -->
      <div class="input-group">
        <label for="username">아이디</label>
        <input type="text" id="username" name="username" placeholder="아이디를 입력하세요" required>
        <div class="button-group">
          <button type="button" id="checkUsernameBtn">아이디 중복확인</button>
        </div>
        <small id="usernameError" class="error"></small>
      </div>

      <!-- 비밀번호 -->
      <div class="input-group">
        <label for="password">비밀번호</label>
        <input type="password" id="password" name="password" placeholder="비밀번호를 입력하세요" required>
        <small class="error" id="passwordError"></small>
      </div>

      <!-- 비밀번호 확인 -->
      <div class="input-group">
        <label for="passwordConfirm">비밀번호 확인</label>
        <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="비밀번호를 확인하세요" required>
        <small class="error" id="passwordConfirmError"></small>
      </div>

      <!-- 이메일 -->
      <div class="input-group">
        <label for="email">이메일</label>
        <input type="email" id="email" name="email" placeholder="이메일을 입력하세요" required>
      </div>

      <!-- 전화번호 -->
      <div class="input-group">
        <label for="phone">전화번호</label>
        <input type="tel" id="phone" name="phone" placeholder="전화번호를 입력하세요" required>
      </div>

      <!-- 생년월일 -->
      <div class="input-group">
        <label for="birthdate">생년월일</label>
        <input type="date" id="birthdate" name="birthdate" required>
      </div>

      <!-- 가입 버튼 -->
      <button type="submit">가입하기</button>
    </form>

    <div class="link">
      <p>이미 계정이 있으신가요? <a href="login.html">로그인</a></p>
    </div>
  </div>

  <script>
    // 아이디 중복 확인
    document.getElementById('checkUsernameBtn').addEventListener('click', function() {
      const username = document.getElementById('username').value;
      const errorMessage = document.getElementById('usernameError');
      
      // 간단한 예시로, 아이디 중복을 "test"라는 아이디로 가정
      if (username === "test") {
        errorMessage.textContent = "이 아이디는 이미 사용 중입니다.";
      } else {
        errorMessage.textContent = "";
        alert("사용 가능한 아이디입니다.");
      }
    });

    // 가입하기 버튼 클릭 시 가입 완료 메시지 표시
    document.getElementById('signupForm').addEventListener('submit', function(event) {
      event.preventDefault(); // 폼 기본 동작 방지
      alert("가입이 완료되었습니다");
      window.location.href = "login.html"; // index.html로 리다이렉트
    });
  </script>

</body>
</html>