<?php
global $CONFIG;
$siteUrl = $CONFIG['CONF']['siteUrl'];
$categories = Commerce::isCategories();

// Social Links
$metaId = "b9c29334-d1c8-11ed-afa1-0242ac120002";
$whatsapp= CMS::isComponent($metaId,"whatsappLink");
$instagram= CMS::isComponent($metaId,"instagram");
$linkedin= CMS::isComponent($metaId,"linkedin");
$facebook= CMS::isComponent($metaId,"facebook");
$phone = CMS::isComponent($metaId,"phoneString");
$email = CMS::isComponent($metaId,"email");
$address = CMS::isComponent($metaId,"address");

?>

<div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="<?= $siteUrl; ?>">
                                <img src="<?= $siteUrl; ?>/assets/images/logotipo-nobreimoveis.svg" class="black-logo" alt="image">
                                <img src="<?= $siteUrl; ?>/assets/images/logotipo-nobreimoveis.svg" class="white-logo" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?= $siteUrl; ?>">
                            <img src="<?= $siteUrl; ?>/assets/images/logotipo-nobreimoveis.png" class="black-logo" alt="image" width="180">
                            <img src="<?= $siteUrl; ?>/assets/images/logotipo-nobreimoveis.png" class="white-logo" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                            <div class="others-options-with-search d-flex align-items-center">
                                <div class="option-item">
                                    <p>Especializado em imóveis residenciais e comerciais</p>
                                </div>
                            </div>

                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="<?= $siteUrl; ?>" class="nav-link">
                                        Home 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= $siteUrl; ?>/imoveis.html" class="nav-link">
                                        Imóveis 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        
                                        <li class="nav-item">
                                            <a href="/imoveis-para-locacao.html" class="nav-link"> Para locação </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/imoveis-para-compra.html" class="nav-link"> Para Comprar </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/imoveis-lancamentos.html" class="nav-link"> de Lançamento </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/tour-virtual-360.html" class="nav-link"> com Tour Virtual 360º </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Empresa 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">
                                            <a href="/quem-somos.html" class="nav-link"> Quem Somos </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="/politica-de-privacidade.html" class="nav-link"> Política de Privacidade </a>
                                        </li>

                                    </ul>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Serviços 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <!-- <li class="nav-item">
                                            <a href="/peca-seu-imovel.html" class="nav-link"> Peça seu Imóvel </a>
                                        </li> -->

                                        <li class="nav-item">
                                            <a href="/anuncie-seu-imovel.html" class="nav-link"> Anuncie seu Imóvel </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?= $siteUrl; ?>/simulacao-de-financiamento.html" class="nav-link"> 
                                            Simule um Financiamento </a>
                                        </li>
                                    </ul>
                                </li>
    
                                <li class="nav-item">
                                    <a href="<?= $siteUrl; ?>/contato.html" class="nav-link"> Contato </a>
                                </li>

                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="/anuncie-seu-imovel.html" class="default-btn"> Anunciar <span></span></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="anuncie-seu-imovel.html" class="default-btn"> Anunciar <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>