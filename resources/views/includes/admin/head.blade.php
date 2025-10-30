<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Robert Gomez | Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script>
        const BASE_URL = "{{ url('/') }}";
        const markAsRead = "{{ route('admin.markas.read',':id') }}";
        const unreadNotifications = "{{ route('admin.notifications') }}";
        const readAll = "{{ route('admin.read.all') }}";
    </script>
    @vite(['resources/js/app.js'])
    <script>
        window.userId = {{ auth()->id() ?? 'null' }};
    </script>
    @stack('styles')
    <style>
        .dropdown-menu-lg {
            min-width: 330px !important;
            max-width: 400px !important;
            max-height: 242px !important;
            overflow: auto;
        }
        .navbar-expand .navbar-nav .dropdown-menu{
            border: none !important;
        }
        .clear-all {
            color: #ff4d6d !important;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            border: 1px solid #ff4d6d;
            border-radius: 4px;
            padding: 3px 10px;
        }

        .clear-all:hover {
            color: #fff !important;
            background: linear-gradient(90deg, #ff4d6d, #ff758f);
            box-shadow: 0 0 10px rgba(255, 77, 109, 0.3);
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
