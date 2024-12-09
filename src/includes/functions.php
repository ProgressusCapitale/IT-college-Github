<?php
// ユーティリティ関数
function sanitize_output($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// アセットのURLを生成する関数
function asset_url($path) {
    return '/assets/' . ltrim($path, '/');
}

// 現在のページがアクティブかどうかを確認する関数
function is_current_page($path) {
    return $_SERVER['REQUEST_URI'] === $path;
} 