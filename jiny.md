# Jiny Package 의존성 분석

## 프로젝트 개요
- **프로젝트명**: jiny/jinsite
- **유형**: Laravel 기반 JinySite 스켈레톤 애플리케이션
- **라이선스**: MIT
- **PHP 요구사항**: ^8.2

## 주요 Jiny 패키지 목록

### 핵심 패키지
| 패키지명 | 버전 | 설명 |
|---------|------|------|
| jiny/site | ^0.14 | jinySite for Laravel - 메인 사이트 프레임워크 |
| jiny/laravel | 0.8 | jiny Laravel 통합 패키지 |
| jiny/auth | 0.13 | 인증 시스템 |
| jiny/admin | 0.10 | 관리자 패키지 |
| jiny/database | ^0.3.0 | 데이터베이스 관리 |
| jiny/module-teams | ^0.2.2 | 팀 모듈 |
| jiny/table | ^0.1.0 | 테이블 컴포넌트 |

### 인증 관련 패키지
| 패키지명 | 버전 | 설명 |
|---------|------|------|
| jiny/auth-api | ^0.2.0 | 인증 API |
| jiny/auth-emoney | ^0.0.2 | 전자화폐 관련 인증 |
| jiny/auth-profile | 0.8 | 사용자 프로필 |
| jiny/auth-social | 0.4 | 소셜 로그인 (Kakao, Naver 포함) |
| jiny/auth-users | 0.6 | 사용자 관리 |
| jiny/fortify | 0.0.2 | Laravel Fortify 통합 |

### 사이트 구성 패키지
| 패키지명 | 버전 | 설명 |
|---------|------|------|
| jiny/site-board | 0.5 | 게시판 시스템 |
| jiny/site-chat | ^0.5.1 | 채팅 시스템 |
| jiny/site-cms | 0.4 | CMS 기능 |
| jiny/site-menu | 0.6 | 메뉴 빌더 |
| jiny/site-page | 0.4 | 페이지 관리 |
| jiny/site-partner | ^0.1.0 | 파트너 관리 |
| jiny/posts | 0.0.3 | 게시물 관리 |

### UI/UX 패키지
| 패키지명 | 버전 | 설명 |
|---------|------|------|
| jiny/theme | 0.8 | 테마 시스템 |
| jiny/ui | 0.6 | UI 프레임워크 |
| jiny/ui-components | 0.8 | UI 컴포넌트 라이브러리 |
| jiny/ui-widgets | 0.7 | 위젯 시스템 |
| jiny/icons | 0.3.1 | 아이콘 컴포넌트 |
| jiny/css | 0.0.3 | CSS 유틸리티 |
| jiny/html | 0.3 | HTML 객체 처리 |

### 기타 유틸리티
| 패키지명 | 버전 | 설명 |
|---------|------|------|
| jiny/config | 0.8 | 설정 관리 |
| jiny/license | ^0.1.1 | 라이선스 관리 |
| jiny/locale | 0.3.2 | 다국어 지원 |
| jiny/manual | 0.0.2 | 매뉴얼 시스템 |
| jiny/markdown | 0.2 | 마크다운 파서 |
| jiny/frontmatter | 0.1.3 | FrontMatter 파서 |
| jiny/modules | 0.3.2 | 모듈 매니저 |
| jiny/permit | 0.3 | 권한 관리 |
| jiny/seller | ^0.0.1 | 판매자 관리 |
| jiny/wire-table | 0.12 | Livewire 테이블 컨트롤러 |

## 의존성 트리 구조

### jiny/site (메인 패키지) 의존성
```
jiny/site (0.14)
├── jiny/laravel (^0.8)
│   ├── jiny/admin (^0.10)
│   ├── jiny/auth (^0.13)
│   ├── jiny/locale (^0.3.2)
│   ├── jiny/manual (^0.0.2)
│   └── jiny/modules (^0.3.2)
├── jiny/site-board (^0.5)
├── jiny/site-cms (^0.4)
├── jiny/site-menu (^0.6)
├── jiny/site-page (^0.4)
└── jiny/theme (^0.8)
```

### jiny/auth 의존성
```
jiny/auth (0.13)
├── jiny/auth-profile (^0.8)
├── jiny/auth-social (^0.4)
│   ├── laravel/socialite (^5.5)
│   ├── socialiteproviders/kakao (^4.2)
│   └── socialiteproviders/naver (^4.1)
├── jiny/auth-users (^0.6)
└── jiny/fortify (^0.0.2)
```

## 외부 의존성

### Laravel 관련
- laravel/framework: ^11.9
- laravel/sanctum: ^4.0
- laravel/tinker: ^2.9
- livewire/livewire: ^3.5 (jiny/wire-table 통해 사용)

### 유틸리티
- jenssegers/agent: ^2.6 (User Agent 감지)
- nesbot/carbon: ^3.8 (날짜/시간 처리)
- stichoza/google-translate-php: ^5.2 (번역)
- webuni/front-matter: ^2.0 (FrontMatter 파싱)
- socialiteproviders/kakao: ^4.3 (카카오 소셜 로그인)

### 개발 의존성
- fakerphp/faker: ^1.23
- laravel/pint: ^1.13
- laravel/sail: ^1.26
- mockery/mockery: ^1.6
- nunomaduro/collision: ^8.0
- phpunit/phpunit: ^11.0.1

## 설치 및 구성

### Composer 스크립트
프로젝트는 다음과 같은 자동화 스크립트를 포함합니다:

1. **post-autoload-dump**: 패키지 자동 검색
2. **post-update-cmd**: Laravel 에셋 발행
3. **post-root-package-install**: .env 파일 생성
4. **post-create-project-cmd**: 
   - 애플리케이션 키 생성
   - SQLite 데이터베이스 생성
   - 마이그레이션 실행

### Autoload 구성
```json
{
    "psr-4": {
        "App\\": "app/",
        "Jiny\\": "jiny/",
        "Modules\\": "modules/",
        "Database\\Factories\\": "database/factories/",
        "Database\\Seeders\\": "database/seeders/"
    }
}
```

## 주요 특징

1. **모듈화된 구조**: 각 기능별로 독립적인 패키지로 구성
2. **Laravel 11 기반**: 최신 Laravel 프레임워크 활용
3. **Livewire 통합**: 동적 UI를 위한 Livewire 컴포넌트 지원
4. **소셜 로그인**: Kakao, Naver 등 한국 주요 소셜 로그인 지원
5. **다국어 지원**: jiny/locale를 통한 다국어 처리
6. **테마 시스템**: 유연한 테마 변경 가능
7. **CMS 기능**: 콘텐츠 관리를 위한 CMS 시스템 내장

## 버전 요구사항
- **PHP**: 8.2 이상
- **Laravel**: 11.9 이상
- **Composer**: 2.0 이상 권장

## 설치 방법
```bash
# 프로젝트 클론 또는 생성 후
composer install

# 환경 설정
cp .env.example .env
php artisan key:generate

# 데이터베이스 마이그레이션
php artisan migrate

# 패키지 에셋 발행
php artisan vendor:publish --tag=laravel-assets
```