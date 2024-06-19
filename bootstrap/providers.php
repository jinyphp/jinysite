<?php

return [
    App\Providers\AppServiceProvider::class,

    Jiny\Erp\Base\Providers\JinyErpBaseServiceProvider::class,

    // CRM 모듈
    Jiny\Erp\Crm\Providers\JinyErpCrmServiceProvider::class,

    // HR 인사관리 모듈
    Jiny\Erp\Hr\Home\Providers\JinyErpHrHomeServiceProvider::class,
    Jiny\Erp\Hr\Employee\Providers\JinyErpHrEmployeeServiceProvider::class,
    Jiny\Erp\Hr\Leave\Providers\JinyErpHrLeaveServiceProvider::class,
    Jiny\Erp\Hr\Credentials\Providers\JinyErpHrCredentialServiceProvider::class,
    Jiny\Erp\Hr\Work\Providers\JinyErpHrWorkServiceProvider::class,
    Jiny\Erp\Hr\Issue\Providers\JinyErpHrIssueServiceProvider::class,
    Jiny\Erp\Hr\Move\Providers\JinyErpHrMoveServiceProvider::class,
    Jiny\Erp\Hr\Payroll\Providers\JinyErpHrPayrollServiceProvider::class,
    Jiny\Erp\Hr\Recruit\Providers\JinyErpHrRecruitServiceProvider::class,

    // 업무승인
    Jiny\Erp\Request\Providers\JinyErpRequestServiceProvider::class,

    // ERP-Work
    Jiny\Erp\Work\Todo\Providers\JinyErpWorkTodoServiceProvider::class
];
