<?php
use Illuminate\Support\Facades\Route;



Route::get("/", function () {
    return "Trang quản trị";
});

Route::get("user", function () {
    return "Quản trị danh sách người dùng";
});

?>