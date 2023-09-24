<?php
include('../config.inc.php');
global $CONFIG;
$pageId="0608f566-cc20-11ed-afa1-0242ac120002";
$metaDescription = Commerce::getCommerceSettings('daa548ea-f152-11ed-a05b-0242ac120003','description');
$title = CMS::isPage($pageId, "slug");
$featuredImage = CMS::isPage($pageId, "featuredImage");
$siteUrl = $CONFIG['CONF']['siteUrl'];
$tel="+55 11 95569-6541";

// SEO
$metaIdSeo = "0ff54848-c781-11ed-afa1-0242ac120002";
$pgTitle = Seo::isSeo($metaIdSeo, "defaultPageTitle")." - ".$title;
$siteDescription = Seo::isSeo($metaIdSeo, "description");
$siteAuthor = Seo::isSeo($metaIdSeo, "author");
$keywords = Seo::isSeo($metaIdSeo, "keywords");
$favicon = Seo::isSeo($metaIdSeo, "favicon");
$title = "Política de Privacidade";

?>
<!doctype html>
<html lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Pagefai CMS">
        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
        <meta name="description" content="<?= $siteDescription; ?>">
        <meta name="keywords" content="<?= $keywords; ?>">
        <meta name="author" content="<?= $siteAuthor; ?>">
        <?= Seo::structuredDataOrganization(); // structured data for SEO ?>
        <?= Seo::structuredDataBreadcrumb(); // structured data breadCrumb for SEO ?>
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/meanmenu.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/boxicons.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/flaticon.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/odometer.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/nice-select.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/fancybox.min.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/dark.css">
		    <link rel="stylesheet" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/css/responsive.css">
		
		    <title> <?= $pgTitle; ?> </title>

        <link rel="icon" type="image/png" href="<?= $siteUrl; ?>/<?= $siteiUrl; ?>/assets/images/favicon.png">
    </head>

    <body>

       
    <?php include('../components/preloader/preloader.inc.php'); ?>
    <?php include('../components/header/header.inc.php'); ?>
        
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content wow animate__animated animate__fadeInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <h2>
                      <?= $title; ?>
                    </h2>

                    <ul>
                        <li>
                            <a href="<?= $siteUrl; ?>">Home</a>
                        </li>
                        <li> Anúncios </li>
                        <li>
                          <?= $title; ?>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="page-banner-image wow animate__animated animate__fadeInRightight" data-wow-delay="300ms" data-wow-duration="2000ms">
                <img src="<?= $siteiUrl; ?>/assets/images/page-banner.png" alt="image">
            </div>
        </div>
        
        <div class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    

                    <div class="col-lg-12 col-md-12">
                        <div class="about-content">
                           
                            <p>
                            Na Imobiliária, privacidade e segurança são prioridades e nos comprometemos com a transparência do tratamento de dados pessoais dos nossos usuários/clientes. Por isso, esta presente Política de Privacidade estabelece como é feita a coleta, uso e transferência de informações de clientes ou outras pessoas que acessam ou usam nosso site.

Ao utilizar nossos serviços, você entende que coletaremos e usaremos suas informações pessoais nas formas descritas nesta Política, sob as normas de Proteção de Dados (LGPD, Lei Federal 13.709/2018), das disposições consumeristas da Lei Federal 8078/1990 e as demais normas do ordenamento jurídico brasileiro aplicáveis.

Dessa forma, no papel de Controladora de Dados, obrigamo-nos ao disposto na presente Política de Privacidade.

1) Quais dados coletamos sobre você? Qual finalidade? Com quem compartilhamos?

Nosso site coleta e utiliza alguns dados pessoais seus, de forma a viabilizar a prestação de serviços e aprimorar a experiência de uso.

1.1 A Imobiliária coleta dados de uso do USUÁRIO com o único fim de aprimoramento da nossa Plataforma, suas funcionalidades e recursos. Nós coletamos informações sobre como você usa a Plataforma, com o tipo de conteúdo que você visualiza ou com o qual se envolve; os recursos que você usa; as ações que você realiza; as pessoas ou USUÁRIOS com que você interage; e o tempo, frequência e duração das suas atividades. Por exemplo, registramos quando você está usando e a última vez que usou a Plataforma, quais publicações, vídeos e outros conteúdos que você visualizou. Nós também registramos o endereço IP no acesso, o dispositivo usado na conexão e a localização.

1.2 A Imobiliária também coleta dados, quando você solicita o contato de um Corretor, ao Agendar uma Visita, dados de imóveis, perfil do USUÁRIO, Compra ou Aluga um imóvel, contrata um serviço, produto, etc. Esses dados são coletados de forma explícita, ou seja, o USUÁRIO sabe que está enviando os dados para a nossa Plataforma. Dados de imóveis, nós utilizamos para divulgação no site da Imobiliária, portal de imóveis, Redes de Corretores e Imobiliárias Parceiras, com o objetivo de Vender ou Alugar rapidamente o imóvel.

1.3 Os dados coletados do USUÁRIO, são armazenados e processados usando tecnologia de TERCEIROS, ou seja, serviços de tratamento e inteligência de dados, como a Imobzi, que por sua vez utiliza empresas como a Amazon AWS, Google Cloud, entre outros. Ao se inscrever ou usar a nossa Plataforma, você entende e concorda que os dados não são armazenados em servidores próprios e sim em servidores de TERCEIROS. Você também concorda que esses serviços têm termos de uso e privacidade próprios e que a Imobiliária poderá a qualquer momento readequar o termo de uso para se adaptar ao fornecedor.

1.4 Como explicado anteriormente, a Imobiliária é uma plataforma que utiliza tecnologias de fornecedores, parceiros, pessoas e governos, denominados TERCEIROS, para prover seus produtos e serviços. Nós podemos enviar informações que coletamos de você para TERCEIROS, afim de prover os serviços ou recursos como: assinatura eletrônica, envio e recebimento de e-mails, WhatsApp, SMS, armazenamento de arquivos, serviços bancários, emissão de notas fiscais, DIMOB, publicação de imóveis em portais, cotação de seguro, vistoria de imóveis, consulta de serviço de proteção de crédito, serviços jurídicos, serviços contábeis, consulta de endereços, entrega de chaves, reforma ou manutenção de imóveis, entre inúmeros outros serviços existentes ou que venham a existir e que são necessários para prover a nossa plataforma.

1.5 Também compartilhamos os seus dados com o objetivo de melhorar a sua experiência de uso da nossa plataforma, monitorar atividades e tendências de uso, mensurar interações e audiência dos serviços, produzir estatísticas, estudos, pesquisas e levantamentos apropriados e necessários para oferecer aos USUÁRIOS nossos serviços, sendo que, sempre que possível, os seus dados serão anonimizados para essas finalidades. Esse compartilhamento inclui desde a exibição de publicidade nas nossas plataformas ou em sites de TERCEIROS. Customizar os conteúdos e a publicidade que mostramos em nossas plataformas. Recomendar serviços e produtos, incluindo serviços de TERCEIROS que possam ser do interesse dos USUÁRIOS. Criar um perfil sobre você, personalizando a sua experiência em nossos serviços. Reconhecer e acompanhar a sua navegação. Cumprir com obrigações legais ou regulatórias, bem como exercer direitos em processos judiciais, administrativos ou arbitrais. Terceirizar determinados setores do nosso negócio, e isso inclui desde o setor de marketing, atendimento, operacional, vendas e outros serviços que são necessários para prover a nossa Plataforma.

1.6 Todos os dados gerados pelo USUÁRIO no nosso site e em todas as nossas plataformas, são necessários para prover a melhor experiência de uso. Os dados pertencem única e exclusivamente ao USUÁRIO, a Imobiliária assume o compromisso de não vender, compartilhar ou divulgar os dados gerados pelo USUÁRIO, com exceção para as cláusulas 1.3, 1.4, 1.5 e 1.6 que são necessárias para prover a nossa Plataforma.

1.7 Além disso, também existem outras hipóteses em que seus dados poderão ser compartilhados, que são:

I – Determinação legal, requerimento, requisição ou ordem judicial, com autoridades judiciais, administrativas ou governamentais competentes.

II – Caso de movimentações societárias, como fusão, aquisição e incorporação, de forma automática

III – Proteção dos direitos da Imobiliária em qualquer tipo de conflito, inclusive os de teor judicial.

1.8 Transferência internacional de dados

Alguns dos terceiros com quem compartilhamos seus dados podem ser localizados ou possuir instalações localizadas em países estrangeiros. Nessas condições, de toda forma, seus dados pessoais estarão sujeitos à Lei Geral de Proteção de Dados e às demais legislações brasileiras de proteção de dados.

Nesse sentido, a Imobiliária se compromete a sempre adotar eficientes padrões de segurança cibernética e de proteção de dados, nos melhores esforços de garantir e cumprir as exigências legislativas.

Ao utilizar nossos serviços, você concorda com essa Política de Privacidade, com esse compartilhamento de dados, que se dará conforme as finalidades descritas no presente instrumento.
 
2) Consentimento

É a partir do seu consentimento que tratamos os seus dados pessoais. O consentimento é a manifestação livre, informada e inequívoca pela qual você nos autoriza a tratar seus dados.

Assim, em consonância com a Lei Geral de Proteção de Dados, seus dados estão sendo coletados, tratados e armazenados com a sua ciência e consentimento. 

Ao utilizar os serviços da Imobiliária e fornecer seus dados pessoais, você está ciente e consentindo com as disposições desta Política de Privacidade, além de conhecer seus direitos e como exercê-los.

A qualquer tempo e sem nenhum custo, você poderá entrar em contato conosco e solicitar a exclusão dos seus dados e também do seu consentimento.

3) Quais são os seus direitos?

3.1 A Imobiliária assegura a seus USUÁRIOS/CLIENTES seus direitos de titular previstos no artigo 18 da Lei Geral de Proteção de Dados. Dessa forma, você pode, de maneira gratuita e a qualquer tempo:

3.2 Confirmar a existência de tratamento de dados, de maneira simplificada ou em formato claro e completo. Solicitar uma cópia legível por meio eletrônico, seguro e idôneo.

3.3 Corrigir seus dados, ao solicitar a edição, correção ou atualização destes. Limitar seus dados quando desnecessários, excessivos ou tratados em desconformidade com a legislação através da anonimização, bloqueio ou eliminação.

3.4 Solicitar a portabilidade de seus dados, através de um relatório de dados cadastrais que a Imobiliária trata a seu respeito. Eliminar seus dados tratados a partir de seu consentimento, exceto nos casos previstos em lei.

3.5 Revogar seu consentimento, desautorizando o tratamento de seus dados. Informar-se sobre a possibilidade de não fornecer seu consentimento e sobre as consequências da negativa. É importante destacar que a revogação do consentimento para o tratamento dos dados pode implicar a impossibilidade da performance adequada de alguma funcionalidade da nossa Plataforma que dependa da operação. Tais consequências serão informadas previamente. Também a revogação do consentimento pode não ser possível em alguns casos, como por exemplo após visitar, comprar, alugar um imóvel, etc.

4) Como você pode exercer seus direitos de titular?

Para exercer seus direitos de titular, você deve entrar em contato com a Imobiliária através do nosso site/plataforma ou de meios publicados nele, como Telefone, WhatsApp, E-mail, etc.

De forma a garantir a sua correta identificação como titular dos dados pessoais objeto da solicitação, é possível que solicitemos documentos ou demais comprovações que possam comprovar sua identidade. Nessa hipótese, você será informado previamente.

5) Como e por quanto tempo seus dados serão armazenados?

De modo geral, seus dados pessoais coletados pela Imobiliária, serão utilizados e armazenados, enquanto a relação comercial ou contratual entre você e a Imobiliária perdurar. 

No caso de inexistir uma relação comercial ou contratual entre as partes, os dados serão excluídos nas nossas bases de dados ou anonimizados, SE SOLICITADOS pelo USUÁRIO, ressalvadas as hipóteses legalmente previstas no artigo 16, da lei geral de proteção de dados, a saber:

I – cumprimento de obrigação legal ou regulatória pelo controlador;

II – estudo por órgão de pesquisa, garantida, sempre que possível, a anonimização dos dados pessoais;

III – transferência a terceiro, desde que respeitados os requisitos de tratamento de dados dispostos nesta Lei; ou

IV – uso exclusivo do controlador, vedado seu acesso por terceiro, e desde que anonimizados os dados.

Isto é, informações pessoais sobre você que sejam imprescindíveis para o cumprimento de determinações legais, judiciais e administrativas e/ou para o exercício do direito de defesa em processos judiciais e administrativos serão mantidas, a despeito da exclusão dos demais dados. 

O armazenamento de dados coletados pela Imobiliária reflete o nosso compromisso com a segurança e privacidade dos seus dados. Empregamos medidas e soluções técnicas de proteção aptas a garantir a confidencialidade, integridade e inviolabilidade dos seus dados. Além disso, também contamos com medidas de segurança apropriadas aos riscos e com controle de acesso às informações armazenadas.

6) O que fazemos para manter seus dados seguros?

Para mantermos suas informações pessoais seguras, usamos ferramentas físicas, eletrônicas e gerenciais orientadas para a proteção da sua privacidade.

Aplicamos essas ferramentas levando em consideração a natureza dos dados pessoais coletados, o contexto e a finalidade do tratamento e os riscos que eventuais violações gerariam para os direitos e liberdades do titular dos dados coletados e tratados.

Entre as medidas que adotamos, destacamos as seguintes:

I - Apenas pessoas autorizadas têm acesso a seus dados pessoais
II - O acesso a seus dados pessoais é feito somente após o compromisso de confidencialidade
III - Seus dados pessoais são armazenados em ambiente seguro e idôneo.
IV - Para proteger suas informações pessoais, tomamos precauções razoáveis e seguimos as melhores práticas da indústria para nos certificar que elas não serão perdidas inadequadamente, usurpadas, acessadas, divulgadas, alteradas ou destruídas.

A Imobiliária se compromete a adotar as melhores posturas para evitar incidentes de segurança. Contudo, é necessário destacar que nenhuma página virtual é inteiramente segura e livre de riscos. É possível que, apesar de todos os nossos protocolos de segurança, problemas de culpa exclusivamente de terceiros ocorram, como ataques cibernéticos de hackers, fora dos limites da previsibilidade técnica do momento em que a mesma vier a ocorrer ou também em decorrência da negligência ou imprudência do próprio USUÁRIO/CLIENTE. A Imobiliária não será responsável por violações dos dados e informações resultantes de atos de funcionários, prepostos ou de pessoas autorizadas pelo USUÁRIO.

Em caso de incidentes de segurança que possa gerar risco ou dano relevante para você ou qualquer um de nossos USUÁRIOS/CLIENTES, comunicaremos aos afetados e a Autoridade Nacional de Proteção de Dados sobre o ocorrido, em consonância com as disposições da Lei Geral de Proteção de Dados.

7) Cookies ou dados de navegação

Nós fazemos o uso de Cookies ou tecnologia similares, que são arquivos de texto e/ou armazenamento local enviados pela plataforma ao seu computador e que nele se armazenam, que contém informações relacionadas à navegação do site. Em suma, os Cookies e/ou similares são utilizados para aprimorar a experiência de uso.

Ao acessar nosso site, você está de acordo com o uso dessas tecnologias e também manifesta conhecer e aceitar a utilização de um sistema de coleta de dados de navegação com o uso de Cookies e/ou tecnologia similares em seu dispositivo.

Para uma melhor experiência de uso do nosso site, precisamos que você permita o uso de Cookies e/ou tecnologia similares, se desejar não permitir o armazenamento desses dados no seu navegador, você pode alterar as permissões no seu navegador e bloquear a gravação e coleta de dados, recusando os Cookies e tecnologia similares. Todavia, o bloqueio de Cookies e/ou tecnologia similares, pode inviabilizar o funcionamento correto de alguns recursos da plataforma. Ainda assim, alguns dados podem ser enviados por você de forma anônima, como por exemplo uma pesquisa de imóvel. Outros dados podem ser requeridos, para que possamos entrar em contato, como por exemplo seu Nome, Telefone, e-mail, CPF/CNPJ, dados de endereço, etc.

Para gerenciar os cookies do seu navegador, basta fazê-lo diretamente nas configurações do navegador, na área de gestão de Cookies. Você pode aprender mais sobre o assunto pesquisando na Internet.

8) Alteração desta Política de Privacidade

A atual versão da Política de Privacidade foi formulada e atualizada pela última vez em 06/09/2021.

Reservamos o direito de modificar essa Política de Privacidade a qualquer tempo, principalmente em função da adequação a eventuais alterações feitas em nosso site ou em âmbito legislativo. Recomendamos que você a revise com frequência.

Eventuais alterações entrarão em vigor a partir de sua publicação em nosso site e sempre lhe notificaremos acerca das mudanças ocorridas.

Ao utilizar nossos serviços e fornecer seus dados pessoais após tais modificações, você as consente. 

9) Responsabilidade

A Imobiliária prevê a responsabilidade dos agentes que atuam nos processos de tratamento de dados, em conformidade com os artigos 42 ao 45 da Lei Geral de Proteção de Dados.

Nos comprometemos em manter esta Política de Privacidade atualizada, observando suas disposições e zelando por seu cumprimento.

Além disso, também assumimos o compromisso de buscar condições técnicas e organizativas seguramente aptas a proteger todo o processo de tratamento de dados.

Caso a Autoridade Nacional de Proteção de Dados exija a adoção de providências em relação ao tratamento de dados realizado pela Imobiliária, comprometemo-nos a segui-las. 

9.1 Isenção de responsabilidade

Conforme mencionado no Tópico 6, embora adotemos elevados padrões de segurança a fim de evitar incidentes, não há nenhuma página virtual inteiramente livre de riscos. Nesse sentido, a Imobiliária não se responsabiliza por:

I – Quaisquer consequências decorrentes da negligência, imprudência ou imperícia dos USUÁRIOS em relação a seus dados individuais. Garantimos e nos responsabilizamos apenas pela segurança dos processos de tratamento de dados e do cumprimento das finalidades descritas no presente instrumento.

Destacamos que a responsabilidade em relação à confidencialidade dos dados de acesso é do USUÁRIO.

II – Ações maliciosas de terceiros, como ataques de hackers, exceto se comprovada conduta culposa ou deliberada da Imobiliária.

Destacamos que em caso de incidentes de segurança que possam gerar risco ou dano relevante para você ou qualquer um de nossos USUÁRIOS/CLIENTES, comunicaremos aos afetados e a Autoridade Nacional de Proteção de Dados sobre o ocorrido e cumpriremos as providências necessárias.

III – Inveracidade das informações inseridas pelo USUÁRIO/CLIENTE nos registros necessários para a utilização dos serviços da Imobiliária; quaisquer consequências decorrentes de informações falsas ou inseridas de má-fé são de inteiramente responsabilidade do USUÁRIO/CLIENTE.

10) Encarregado de Proteção de Dados

A Imobiliária disponibiliza os seguintes meios para que você possa entrar em contato conosco para exercer seus direitos de titular: [meios de contato, como site, telefone, e-mail, etc.].

Caso tenha dúvidas sobre esta Política de Privacidade ou sobre os dados pessoais que tratamos, você pode entrar em contato com o nosso Encarregado de Proteção de Dados Pessoais, através dos seguintes canais:

[Nome do Encarregado (CPF do Encarregado)]
[Email do Encarregado]
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../components/banners/beneficios.inc.php'); ?>
        <?php include('../components/footer/footer.inc.php'); ?>

        <div class="go-top">
            <i class='bx bx-chevron-up'></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Links of JS files -->
        <script src="<?= $siteiUrl; ?>/assets/js/jquery.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/jquery.meanmenu.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/jquery.appear.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/odometer.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/nice-select.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/jquery-ui.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/fancybox.min.js"></script>
		<script src="<?= $siteiUrl; ?>/assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?= $siteiUrl; ?>/assets/js/form-validator.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/contact-form-script.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/wow.min.js"></script>
        <script src="<?= $siteiUrl; ?>/assets/js/main.js"></script>
    </body>


</html>