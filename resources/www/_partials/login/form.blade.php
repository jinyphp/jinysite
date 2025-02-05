<!-- Form -->
<x-login-form>
  <div class="position-relative mb-4">
      <x-login-email>
      </x-login-email>
  </div>

  <x-login-password>
  </x-login-password>

  <div class="d-flex align-items-center justify-content-between mb-4">
      <div class="form-check me-2">

          <x-login-remember>
              Remember for 30 days
          </x-login-remember>
      </div>
      <div class="nav">
          <x-login-forgot class="nav-link animate-underline p-0" >
              <span class="animate-target">Forgot password?</span>
          </x-login-forgot>
      </div>
  </div>

  <x-login-submit class="btn-lg w-100">
      로그인
  </x-login-submit>

</x-login-form>

