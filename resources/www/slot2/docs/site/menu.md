# 메뉴구성
사이트의 원활한 페이지 이동을 위한 메뉴빌더를 제공합니다.

## 메뉴 관리
지니사이트의 메뉴는 `/resources/menus`안에 json 파일로 메뉴 트리를 관리합니다. view는 json 파일을 읽어서 다양한 형태로 ui를 구현할 수 있는 장점이 있습니다.

메뉴는 여러개의 종류별로 제작하여 원하는 페이지마다 손쉽게 삽입을 할 수 있습니다.

## 관리자
관리자 페이지를 통하여 메뉴를 쉽게 관리할 수 있습니다.
`/admin/site/menus` 페이지에서 메뉴를 관리할 수 있습니다. 또한 생성된 메뉴를 선택하여 json 파일을 트리형태로 관리할 수 있습니다.

## 메뉴 빌더
메뉴 빌더는 json 파일을 읽어와서 원하는 디자인 스타일로 화면을 빌드 할 수 있습니다. 이를 자동으러 처리해 주는 라이브와이어 컴포넌트를 제공합니다.

```php
@livewire('site-widget-menu',[
    
    'code_key' => "side",
    'widget_path' => "sidebar"
])
```

몇개의 인자값을 전달하여 메뉴 빌더를 관리할 수 있습니다. 메뉴를 지정하기 위해서는 `code` 값으로 메뉴 json 파일의 이름을 지정하면 됩니다. 만일, 이름을 지정하지 않는 경우에는 동적으로 메뉴를 관리할 수 있습니다.



