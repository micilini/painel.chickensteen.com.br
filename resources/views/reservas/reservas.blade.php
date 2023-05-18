<!doctype html>
<html lang="pt_BR">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Seja bem vindo ao Painel da Chicken Steen">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.svg') }}">

    <!-- TITLE -->
    <title>Painel - Chicken Steen</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

	<!-- Plugins CSS -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/switcher/demo.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="app sidebar-mini ltr light-mode">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        Carregando...
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{ env('APP_URL') }}reservas">
                            <img src="{{ asset('assets/images/brand/chicken-steen-logo.svg') }}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('assets/images/brand/chicken-steen-logo-b-toogle.png') }}" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{ asset('assets/images/users/atendente-01.png') }}" alt="Atendente 01 - Foto"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">Atendente 01</h5>
                                                        <small class="text-muted">Reservas</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="{{ env('APP_URL') }}sair">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sair
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{ env('APP_URL') }}reservas">
                            <img src="{{ asset('assets/images/brand/chicken-steen-logo-b.png') }}" class="header-brand-img desktop-logo" alt="Chicken Steen Logo" >
                            <img src="{{ asset('assets/images/brand/chicken-steen-logo-b-toogle.png') }}" class="header-brand-img toggle-logo"
                                alt="Chicken Steen Logo">
                            <img src="{{ asset('assets/images/brand/chicken-steen-logo-b-toogle.png') }}" class="header-brand-img light-logo" alt="Chicken Steen Logo" >
                            <img src="{{ asset('assets/images/brand/chicken-steen-logo-b.png') }}" class="header-brand-img light-logo1"
                                alt="Chicken Steen Logo" >
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ env('APP_URL') }}reservas"><i
                                        class="side-menu__icon fe fe-book"></i><span
                                        class="side-menu__label">Reservas</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ env('APP_URL') }}usuarios"><i
                                        class="side-menu__icon fe fe-user"></i><span
                                        class="side-menu__label">Usuários</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ env('APP_URL') }}contatos"><i
                                        class="side-menu__icon fe fe-mail"></i><span
                                        class="side-menu__label">Contatos</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ env('APP_URL') }}sair"><i
                                        class="side-menu__icon fe fe-alert-circle"></i><span
                                        class="side-menu__label">Sair</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ env('APP_URL') }}versao-pro"><i
                                        class="side-menu__icon fe fe-lock"></i><span
                                        class="side-menu__label">Versão PRO</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Reservas</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Início</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reservas</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total de Reservas</h6>
                                                        <h2 class="mb-0 number-font">{{ $totalBooks }}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Reservas do dia</h6>
                                                        <h2 class="mb-0 number-font">{{ $totalDayBooks }}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Reservas Futuras</h6>
                                                        <h2 class="mb-0 number-font">{{ $totalFutureBooks }}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                        <!-- ROW-4 -->
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">Lista de Reservas</h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="grid-margin">
                                            <div class="">
                                                <div class="panel panel-primary">
                                                    <div class="tab-menu-heading border-0 p-0">
                                                        <div class="tabs-menu1">
                                                            <!-- Tabs -->
                                                            <ul class="nav panel-tabs product-sale">
                                                                <li><a href="#tab5" class="active"
                                                                        data-bs-toggle="tab">Hoje</a></li>
                                                                <li><a href="#tab6" data-bs-toggle="tab"
                                                                        class="text-dark">Futuras</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                <div class="table-responsive">
                                                                    @if(empty($listBooksToday))
                                                                        <p>Nenhuma reserva por enquanto...</p>
                                                                    @else
                                                                    <table id="data-table"
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Código</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Nome</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    QTD Pessoas</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Local</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Ações</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach($listBooksToday as $book)
                                                                            <tr class="border-bottom">
                                                                                <td class="text-left">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            {{ $book['book_code'] }}</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            {{ $book['nm_name'] }}</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            {{ $book['nr_clients'] }}</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            {{ $book['nm_local'] }}</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            <a class="cancel-button" href="#cancel" data-id="{{ $book['id_book'] }}" style="text-decoration: underline;">Cancelar</a></h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab6">
                                                                <p>Adquira a <a href="{{ env('APP_URL') }}versao-pro">versão pro</a> para visualizar as reservas do dia seguinte.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 END -->
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Chicken Steen 2023, Todos os direitos reservados.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

	<!-- TypeHead js -->
	<script src="{{ asset('assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
    <script src="{{ asset('assets/js/typehead.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('assets/js/index1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Custom-switcher -->
    <script src="{{ asset('assets/js/custom-swicher.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>

    <!-- AJAX FUNCTIONS FOR LOGIN -->
    <script>
        var ajaxURL_Cancel = '{{ $ajaxURL_Cancel }}';
        $(".cancel-button").on( "click", function() {
        let bookID = $(this).attr('data-id');
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $.ajax({
                type: "POST",
                url: ajaxURL_Cancel,
                data: { id_book: bookID },
                success: function (dataJson) {
                    var data = JSON.parse(dataJson);
                    if(data['errors']){
                       alert('Erro no cancelamento da reserva!');
                    }else if(data['success']){
                        window.location.reload();
                    }
                }
            });
        });
    </script>

</body>

</html>