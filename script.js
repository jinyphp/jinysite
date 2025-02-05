document.addEventListener('paste', function(event) {
    var items = (event.clipboardData || event.originalEvent.clipboardData).items;

    for (var index in items) {
        var item = items[index];
        if (item.kind === 'file') {
            var blob = item.getAsFile();
            var reader = new FileReader();
            reader.onload = function(event) {
                var img = document.createElement('img');
                img.src = event.target.result;
                document.querySelector('.html-content').appendChild(img);

                // 여기에서 서버로 이미지 업로드 로직을 추가할 수 있습니다.
                uploadImageToServer(event.target.result);
            };
            reader.readAsDataURL(blob);
        }
    }
});

function uploadImageToServer(imageData) {
    // 이미지 데이터를 서버로 전송하는 AJAX 요청
    fetch('/upload', {
        method: 'POST',
        body: JSON.stringify({image: imageData}),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => console.log('업로드 성공:', data))
    .catch(error => console.error('업로드 실패:', error));
}
