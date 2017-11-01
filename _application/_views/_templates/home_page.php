<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestor Patrimonial</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=THEME ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=THEME ?>css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=THEME ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">Home</a>
                    </li>
                    <li>
                        <a href="#services">Serviços</a>
                    </li>
                    <li>
                        <a href="#contact">Contato</a>
                    </li>
                    <li>
                        <a href="<?=DOMAIN?>home/login/">Login</a>
                    </li>
                    <li>
                        <a href="<?=DOMAIN?>home/criarconta/">Criar Conta</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Gestor  Patrimonial</h1>
                        <h3>Ferramenta para Geração de uma Vida Melhor</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://www.facebook.com/saymon.theLeopard" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/alxsay/UFG-CONSTRUCAO-D-SOFTWARE-2017-01" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Controle de Contas e de Receitas</h2>
                    <p class="lead">Essa pode parecer uma dica um tanto quanto óbvia, mas não são todos os gestores que a seguem de forma rígida. É preciso que você mantenha cada entrada e saída, por mais “insignificante” que possa parecer registrada. Desde pequenos reparos de infraestrutura que geram poucos custos a grandes gastos com fornecedores. É preciso que todos estes dados estejam devidamente documentados, discriminando qual a origem da despesa, se é uma despesa eventual ou constante. O mesmo vale para as receitas, que devem estar todas documentadas, independente de serem eventuais (como, por exemplo, algum investimento pontual) ou constantes.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?=THEME ?>img/controle_contas.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Balanço Patrimonial</h2>
                    <p class="lead">O balanço patrimonial é uma demonstração contábil que tem, por finalidade, apresentar a posição contábil, financeira e econômica de uma entidade (em geral, uma empresa) em determinada data, representando uma posição estática (posição ou situação do patrimônio em determinada data). O balanço patrimonial apresenta os ativos (bens e direitos), passivos (exigibilidades e obrigações) e o patrimônio líquido, que é resultante da diferença entre o total de ativos e o total de passivos. O balanço pode ser considerado como uma igualidade contabilística dividida em dois membros, o primeiro membro é representado pelo ativo, e o segundo membro pelo passivo e capital próprio da empresa.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="<?=THEME ?>img/balanco_patrimonial.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Gestão de Metas Financeiras</h2>
                    <p class="lead">Definir metas financeiras no planejamento a curto, médio e longo prazo é um dos principais passos para o sucesso nas finanças. É importante ter objetivos, sejam eles coisas que você pretende alcançar em algum momento no futuro ou hábitos e posturas possam melhorar suas finanças hoje mesmo, como ajudá-lo a economizar dinheiro e a fazer investimentos.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?=THEME ?>img/metas_financeiras.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Serviços</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contato</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Orgulhosamente desenvolvido com Gear Framework</b></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?=THEME ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=THEME ?>js/bootstrap.min.js"></script>

</body>

</html>
