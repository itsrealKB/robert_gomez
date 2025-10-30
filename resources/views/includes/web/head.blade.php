<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Robert Gomez</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script>
        const BASE_URL = "{{ url('/') }}";
        const markAsRead = "{{ route('markas.read',':id') }}";
        const unreadNotifications = "{{ route('notifications') }}";
        const readAll = "{{ route('read.all') }}";
    </script>
    @vite(['resources/js/web.js'])
    <script>
        window.userId = {{ auth()->id() ?? 'null' }};
    </script>
    @stack('styles')
    <style>
        .header-inner .dropdown-menu.show {
            max-height: 250px !important;
            overflow: auto;
            border-width: 0px !important;
        }
        .clear-all {
            color: #ff4d6d !important;
            font-weight: 600 !important;
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

<body>
