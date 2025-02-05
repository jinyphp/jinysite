<?php

return [
    App\Providers\AppServiceProvider::class,

    Jiny\Erp\Base\Providers\JinyErpBaseServiceProvider::class,

    // HR 인사관리 모듈
    Jiny\Erp\Hr\JinyErpHrServiceProvider::class,

    //Jiny\Erp\Hr\Home\Providers\JinyErpHrHomeServiceProvider::class,
    //Jiny\Erp\Hr\Employee\Providers\JinyErpHrEmployeeServiceProvider::class,
    //Jiny\Erp\Hr\Leave\Providers\JinyErpHrLeaveServiceProvider::class,
    //Jiny\Erp\Hr\Credentials\Providers\JinyErpHrCredentialServiceProvider::class,
    //Jiny\Erp\Hr\Work\Providers\JinyErpHrWorkServiceProvider::class,
    //Jiny\Erp\Hr\Issue\Providers\JinyErpHrIssueServiceProvider::class,
    //Jiny\Erp\Hr\Move\Providers\JinyErpHrMoveServiceProvider::class,
    //Jiny\Erp\Hr\Payroll\Providers\JinyErpHrPayrollServiceProvider::class,
    //Jiny\Erp\Hr\Recruit\Providers\JinyErpHrRecruitServiceProvider::class,


    // Sales 모듈
    Jiny\Erp\Sales\Providers\JinyErpSaleServiceProvider::class,
    Jiny\Erp\Sales\Home\Providers\JinyErpSaleHomeServiceProvider::class,
    Jiny\Erp\Sales\Business\Providers\JinyErpSaleBusinessServiceProvider::class,
    Jiny\Erp\Sales\Company\Providers\JinyErpSaleCompanyServiceProvider::class,
    Jiny\Erp\Sales\Goods\Providers\JinyErpSaleGoodsServiceProvider::class,
    Jiny\Erp\Sales\House\Providers\JinyErpSaleHouseServiceProvider::class,
    Jiny\Erp\Sales\Bom\Providers\JinyErpSaleBomServiceProvider::class,
    Jiny\Erp\Sales\Quotation\Providers\JinyErpSaleQuotationServiceProvider::class,
    Jiny\Erp\Sales\Report\Providers\JinyErpSaleReportServiceProvider::class,
    Jiny\Erp\Sales\Trans\Providers\JinyErpSaleTransServiceProvider::class,

    // CRM 모듈
    Jiny\Erp\Crm\Providers\JinyErpCrmServiceProvider::class,



    // 업무승인
    Jiny\Erp\Request\Providers\JinyErpRequestServiceProvider::class,

    // ERP-Work
    Jiny\Erp\Work\Todo\Providers\JinyErpWorkTodoServiceProvider::class,

    // Services
    Jiny\Service\Providers\JinyServiceServiceProvider::class
];
