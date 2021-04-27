<?php
//Conexao
include_once '../controller/dbconexao.php';
//Header
include '../include/header.php';
?>
<head>
    <meta charset="utf-8" />
    <title>Register Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="../assets/css/apple/app.min.css" rel="stylesheet" />
    <link href="../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
</head>

<body class="pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(../Public/imagem/teste.jpg)"></div>
                <div class="news-caption">
                    <p>
                        Sistema iniciado no ano de 2021, com o intuito de estudar e aprender a programar em busca de uma oportunidade
                        de emprego e começar seguir carreira.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                    Registre-se
                    <small> Bem vindo ao caldo de cana do coquinho.</small>
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form action="../controller/registrar.php" method="POST" class="margin-bottom-0">
                        <label class="control-label">Nome <span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-6 m-b-15">
                                <input type="text" class="form-control" name="nome" placeholder="Nome" required />
                            </div>
                            <div class="col-md-6 m-b-15">
                                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required />
                            </div>
                        </div>
                        <label class="control-label">Telefone <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control telefone" name="telefone" id="telefone" placeholder="Telefone" required />
                            </div>
                        </div>
                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" required />
                            </div>
                        </div>
                        <label class="control-label">Senha <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="senha" placeholder="Senha" required />
                            </div>
                        </div>

                        <div class="register-buttons">
                            <button type="submit" name="btn-registrar" class="btn btn-primary btn-block btn-lg">Salvar</button>
                        </div>
                        <div class="m-t-30 m-b-30 p-b-30">
                            Já possui Cadastro? Click <a href="login.php">aqui</a> para fazer o login.
                        </div>
                        <hr />
                        <p class="text-center mb-0">
                            &copy;  Reserved 2021
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
    </div>
    <!-- end page container -->

<?php
include '../include/footer.php';
?>
<!-- ================== BEGIN BASE JS ================== -->
<script src="../assets/js/app.min.js"></script>
<script src="../assets/js/theme/apple.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');
</script>

<!-- Mirrored from seantheme.com/color-admin/admin/apple/register_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 23:55:27 GMT -->

</html>