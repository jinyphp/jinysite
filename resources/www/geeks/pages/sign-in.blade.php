<x-www-app>

    <div class="d-flex align-items-center justify-content-center min-vh-100">
      <div class="card shadow" style="width: 500px;">
        <div class="card-body p-5">
          <!-- 로고 -->
          <div class="text-center mb-4">
            <img src="/assets/images/brand/logo/logo-icon.svg" alt="로고" width="64" height="64">
          </div>

          <!-- 제목 -->
          <h1 class="text-center mb-4">로그인</h1>

          <!-- 폼 -->
          <form>
            <!-- 이메일 입력 -->
            <div class="mb-3">
              <label for="email" class="form-label">이메일 또는 사용자 이름</label>
              <input type="email" class="form-control" id="email" placeholder="이메일 주소 입력">
            </div>

            <!-- 비밀번호 입력 -->
            <div class="mb-3">
              <label for="password" class="form-label">비밀번호</label>
              <input type="password" class="form-control" id="password" placeholder="비밀번호 입력">
            </div>

            <!-- 추가 옵션 -->
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">로그인 유지</label>
              </div>
              <a href="#" class="text-decoration-none">비밀번호 찾기</a>
            </div>

            <!-- 로그인 버튼 -->
            <button type="submit" class="btn btn-primary w-100 mb-4">로그인</button>

            <!-- 회원가입 링크 -->
            <p class="text-center mb-4">
              계정이 없으신가요? <a href="#" class="text-decoration-none">회원가입</a>
            </p>

            <!-- 소셜 로그인 -->
            <div class="d-flex justify-content-center gap-2">
              <a href="#" class="btn btn-outline-secondary"><i class="bi bi-facebook"></i></a>
              <a href="#" class="btn btn-outline-secondary"><i class="bi bi-twitter"></i></a>
              <a href="#" class="btn btn-outline-secondary"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="btn btn-outline-secondary"><i class="bi bi-github"></i></a>
            </div>
          </form>
        </div>
      </div>
    </div>

</x-www-app>
