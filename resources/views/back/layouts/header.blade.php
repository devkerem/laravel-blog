<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','Blog | Admin Panel')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('back/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="{{asset('/')}}font.css" rel="stylesheet">
    <link href="{{asset('/')}}font.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('back/')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{asset('back/')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    @yield('css')
    @toastr_css
</head>
