<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>공지사항</title>
  <style>
    /* 기본 스타일 */
    body {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    /* 상단 네비게이션 바 */
    .top-bar {
      background-color: #fff;
      padding: 5px 20px;
      font-size: 0.9em;
      text-align: right;
    }

    .top-bar a {
      margin-left: 20px;
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
    }

    .top-bar a:hover {
      text-decoration: underline;
    }

    .logo {
      font-size: 40px;
      font-weight: bold;
      color: #333;
    }

    /* 메인 헤더 */
    header {
      background-color: #fff;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav {
      display: flex;
      gap: 15px;
    }

    nav a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    nav a:hover {
      color: #007bff;
    }

    /* 공지사항 영역 스타일 */
    .notice-section {
      width: 80%;
      margin: 30px auto;
      font-family: Arial, sans-serif;
      color: #333;
    }

    .notice-section h1 {
      font-size: 1.5em;
      margin-bottom: 20px;
    }

    .notice-section .total-count {
      font-size: 0.9em;
      margin-bottom: 10px;
      color: #777;
    }

    .notice-table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
    }

    .notice-table th, .notice-table td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
      font-size: 0.9em;
    }

    .notice-table th {
      background-color: #f6f6f6;
      font-weight: bold;
    }

    .notice-table tr:nth-child(odd) {
      background-color: #fcfcfc;
    }

    .notice-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .notice-table .badge {
      background-color: #ddd;
      border-radius: 4px;
      padding: 2px 6px;
      font-size: 0.8em;
      color: #555;
    }

    .notice-table .badge.notice {
      background-color: #007bff;
      color: #fff;
    }

    /* 페이징 스타일 */
    .pagination {
      margin-top: 20px;
      text-align: center;
    }

    .pagination a {
      text-decoration: none;
      margin: 0 5px;
      color: #007bff;
      font-weight: bold;
    }

    .pagination a:hover {
      text-decoration: underline;
    }

    /* 푸터 */
    footer {
      background-color: #f9f9f9;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      color: #777;
      border-top: 1px solid #ccc;
      width: 100%;
      box-sizing: border-box;
      margin-top: auto;
    }
  </style>
</head>
<body>
  <!-- 상단 네비게이션 바 -->
  <div class="top-bar">
    <a href="login.html">로그인</a>
    <a href="signup.html">회원가입</a>
    <a href="mypage.html">마이페이지</a>
  </div>

  <!-- 메인 헤더 -->
  <header>
    <div class="logo"><a href="index.html" style="text-decoration: none; color: inherit;">UCAR</a></div>
    <nav>
      <a href="sellcar.html">내차팔기</a>
      <a href="buycar.html">내차사기</a>
      <a href="rentcar.html">렌트</a>
      <a href="finance.html">금융</a>
      <a href="media.html">미디어</a>
    </nav>
  </header>

  <!-- 공지사항 섹션 -->
  <section class="notice-section">
    <h1>공지사항</h1>
    <div class="total-count">총 311 건</div>
    <table class="notice-table">
      <thead>
        <tr>
          <th>번호</th>
          <th>제목</th>
          <th>등록일</th>
          <th>조회수</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span class="badge notice">공지</span></td>
          <td><a href="notice-detail.html?id=1">공지사항 1</a></td>
          <td>2024/10/27</td>
          <td>3950</td>
        </tr>
        <tr>
          <td><span class="badge notice">공지</span></td>
          <td><a href="notice-detail.html?id=2">공지사항 2</a></td>
          <td>2024/10/26</td>
          <td>3400</td>
        </tr>
        <tr>
          <td>315</td>
          <td><a href="notice-detail.html?id=315">공지사항 315</a></td>
          <td>2024/10/25</td>
          <td>2800</td>
        </tr>
        <tr>
          <td>314</td>
          <td><a href="notice-detail.html?id=314">공지사항 314</a></td>
          <td>2024/10/24</td>
          <td>2700</td>
        </tr>
        <tr>
          <td>313</td>
          <td><a href="notice-detail.html?id=313">공지사항 313</a></td>
          <td>2024/10/23</td>
          <td>2500</td>
        </tr>
        <tr>
          <td>312</td>
          <td><a href="notice-detail.html?id=312">공지사항 312</a></td>
          <td>2024/10/22</td>
          <td>2300</td>
        </tr>
        <tr>
          <td>311</td>
          <td><a href="notice-detail.html?id=311">공지사항 311</a></td>
          <td>2024/10/21</td>
          <td>2100</td>
        </tr>
        <tr>
          <td>310</td>
          <td><a href="notice-detail.html?id=310">공지사항 310</a></td>
          <td>2024/10/20</td>
          <td>2000</td>
        </tr>
        <tr>
          <td>309</td>
          <td><a href="notice-detail.html?id=309">공지사항 309</a></td>
          <td>2024/10/19</td>
          <td>1800</td>
        </tr>
        <tr>
          <td>308</td>
          <td><a href="notice-detail.html?id=308">공지사항 308</a></td>
          <td>2024/10/18</td>
          <td>1700</td>
        </tr>
        <tr>
          <td>307</td>
          <td><a href="notice-detail.html?id=307">공지사항 307</a></td>
          <td>2024/10/17</td>
          <td>1600</td>
        </tr>
        <tr>
          <td>306</td>
          <td><a href="notice-detail.html?id=306">공지사항 306</a></td>
          <td>2024/10/16</td>
          <td>1500</td>
        </tr>
        <tr>
          <td>305</td>
          <td><a href="notice-detail.html?id=305">공지사항 305</a></td>
          <td>2024/10/15</td>
          <td>1400</td>
        </tr>
        <tr>
          <td>304</td>
          <td><a href="notice-detail.html?id=304">공지사항 304</a></td>
          <td>2024/10/14</td>
          <td>1300</td>
        </tr>
        <tr>
          <td>303</td>
          <td><a href="notice-detail.html?id=303">공지사항 303</a></td>
          <td>2024/10/13</td>
          <td>1200</td>
        </tr>
      </tbody>
    </table>

    <!-- 페이징 -->
    <div class="pagination">
      <a href="?page=1">1</a>
      <a href="?page=2">2</a>
      <a href="?page=3">3</a>
      <a href="?page=4">4</a>
      <a href="?page=5">5</a>
    </div>
  </section>

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
