<?php 
global $CONFIG;
$metadataId = "ac392262-dd91-11ed-b5ea-0242ac120002";
$siteUrl = $CONFIG['CONF']['siteUrl'];
$aboutCompanyTitle = CMS::isComponent($metadataId,"title");
$aboutCompanyDescription = CMS::isComponent($metadataId,"description");

$metaId = "650660fe-01d0-11ee-be56-0242ac120002";
$data= CMS::isComponent($metaId,"images");

?>
 <div class="about-us-area mt-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-sm-12 col-12 wow animate fadeInLeft" data-wow-delay="0ms"
          data-wow-duration="1500ms">
          <div class="about-left">
            <img src="assets/images/about-left.png" alt="">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-12 col-12 mobt-50">
          <div class="about-right">
            <div class="section-title about-section-title">
              <h1> Cuidamos de pessoas e protegemos patrimônio </h1>
            </div>
            <p>
            A Andorra Neg&oacute;cios e Corretagem de Seguros &eacute; uma empresa familiar que nasceu em l&aacute; em 1999. E olha, ao longo dos anos, mantivemos firme o 
            <br/><br/> compromisso com nossos valores: compet&ecirc;ncia, integridade e cuidado real com as pessoas. <br/>
            Com quase um quarto de s&eacute;culo de trajet&oacute;ria, o pessoal da Andorra Seguros &eacute; puro talento! Temos um tima&ccedil;o de especialistas, todos craques no que fazem. E olha, eles entendem at&eacute; os meandros desse universo dos seguros. E n&atilde;o &eacute; s&oacute; isso, eles est&atilde;o super empenhados em criar solu&ccedil;&otilde;es sob medida para voc&ecirc;, que &eacute; &uacute;nico!
            </p>
          </div>
          <a class="common-btn about-btn wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms"
            href="<?php $siteUrl; ?>/sobre-agente.html"><i class="fas fa-plus"></i> Saiba Mais</a>
        </div>
      </div>
    </div>
  </div>