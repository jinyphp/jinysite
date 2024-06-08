

    <div class="sidebar-brand" >

        <span class="sidebar-brand-text align-middle">
            <a class="text-white" style="text-decoration:none;" href="/hr/user">
                HR 인사관리
            </a>
        </span>


        <x-badge-primary>
            <a href="/admin/hr">
                Admin
            </a>
        </x-badge-primary>
    </div>

    <ul class="sidebar-nav">
        <li class="sidebar-header">
            Work
        </li>
        <li class="sidebar-item">
            <a data-bs-target="#hr-work1"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">근무상태</span>
            </a>
            <ul id="hr-work1" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/hr/user/work/status">
                        상태
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/hr/user/work/time">
                        출퇴근
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a data-bs-target="#hr-work"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">업무형태</span>
            </a>
            <ul id="hr-work" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/hr/user/work/type">
                        근무유형
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/worktype_assgin">
                        근무지정
                    </a>
                </li>

            </ul>
        </li>
        <li class="sidebar-item">
            <a data-bs-target="#hr-report"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">보고서</span>
            </a>

            <ul id="hr-report" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

                <li class="sidebar-item">
                    <a class="sidebar-link" href="">
                        일일 보고서
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        주간보고서
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        월간보고서
                    </a>
                </li>
            </ul>
        </li>


        <li class="sidebar-header">
            사원관리
        </li>

        <li class="sidebar-item">
            <a data-bs-target="#hr-issue"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">문의처리</span>
            </a>
            <ul id="hr-issue" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/faq">
                        Hr-FAQ
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/qna">
                        Hr-QNA
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a data-bs-target="#hr-empolyee"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">사원관리</span>
            </a>
            <ul id="hr-empolyee" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/employee">
                        사원목록
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/family">
                        부양가족
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/license">
                        보유자격
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/bank">
                        급여계좌
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a data-bs-target="#hr-onboard"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">발령</span>
            </a>
            <ul id="hr-onboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/onboard">
                        Onboarding
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/position">
                        직급
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        인사이동
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/division">
                        부서
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        부서발령
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-header">
            복지(Welfare)
        </li>
        <li class="sidebar-item">
            <a data-bs-target="#hr-issue"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">휴가관리</span>
            </a>
            <ul id="hr-issue" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/admin/hr/vacation">
                        휴가
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-header">
            요청/신청
        </li>

        <li class="sidebar-item">
            <a data-bs-target="#hr-credentials"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">
                    발급
                </span>
            </a>
            <ul id="hr-credentials" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/jiny/hr/credentials">
                        재직증명서
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-header">
            Payroll
        </li>
        <li class="sidebar-item">
            <a data-bs-target="#hr-payroll"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">급여(payroll)</span>
            </a>
            <ul id="hr-payroll" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        급여명세서
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="">
                        계약조건
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="">
                        공제항목
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        상여금
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-header">
            Recruit
        </li>
        <li class="sidebar-item">
            <a data-bs-target="#hr-issue"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-layout align-middle">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <span class="align-middle">채용</span>
            </a>
            <ul id="hr-issue" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        충원요청
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="">
                        채용계획
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="">
                        채용공고
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        채용확정
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-header">
            HR Setting
        </li>

        <!-- Submenu -->
        <li class="sidebar-item">
            <a data-bs-target="#admin-admin" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout align-middle"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span class="align-middle">Base</span>
            </a>
            <ul id="admin-admin" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/jiny/hr">
                        Introduce
                    </a>
                </li>
            </ul>
        </li>

    </ul>

