<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiteBoardImage extends Model
{
    protected $fillable = ['filename', 'path', 'mime_type', 'size'];

    public function store($image)
    {
        try {
            // 원본 파일명 추출
            $originalName = $image->getClientOriginalName();

            // 파일 확장자 추출
            $extension = $image->getClientOriginalExtension();

            // 유니크한 파일명 생성 (timestamp + random string)
            $filename = time() . '_' . Str::random(10) . '.' . $extension;

            // 저장 경로 설정 (storage/app/public/board/images)
            $path = $image->storeAs('public/board/images', $filename);

            // DB에 저장
            $imageRecord = $this->create([
                'filename' => $filename,
                'path' => $path,
                'mime_type' => $image->getMimeType(),
                'size' => $image->getSize()
            ]);

            return [
                'success' => true,
                'data' => $imageRecord,
                'url' => Storage::url($path)
            ];

        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => '이미지 저장 중 오류가 발생했습니다: ' . $e->getMessage()
            ];
        }
    }
} 
