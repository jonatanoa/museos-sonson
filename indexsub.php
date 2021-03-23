<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="sass/main.scss">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.php">
    <title>Museos Sonsón</title>
</head>
<body>
    <div class="navigation">  <!--boton de menu-->
		<input type="checkbox" class="navigation__checkbox" id="navi-toggle"> <!--button-->

		<label for="navi-toggle" class="navigation__button"> <!--aqui se ingresa la id del input-->
			<span class="navigation__icon">&nbsp;</span>
		</label>
		<div class="navigation__background">&nbsp;</div> <!--fondo-->

		<nav class="navigation__nav"> <!--nav-->
			<ul class="navigation__list">
				<li class="navigation__item"><a href="index.php" class="navigation__link">Inicio</a></li>
				<li class="navigation__item"><a href="indexson.php" class="navigation__link">Historia de Sonsón</a></li>
				
				<li class="navigation__item"><a href="index.php" class="navigation__link">Algunas Fiestas tradicionales </a></li>
			</ul>
		</nav>
	</div>

    <header class="header"> <!--header-->
        <div class="header-logo-box">
            <img src="img/logo.png" class="header-logo">
        </div>
        <div class="header-text-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main">
          <!---para formatear texto y aplicarle estilos---->
                    Museos
                </span>
                <span class="heading-primary-sub">
                    Museos para cada gusto
                </span>
            </h1>  			
        </div>
    </header>

    <main class="museos">

        <div class="menu"> <!--menu-->
            <nav class="menu-nav">
                <h2>Lista de Museos</h2>
                <ul class="menu-title">
                    <li class="menu-list"><a href="#abuelos" class="menu__link"><p>Museo Casa de los Abuelos</p></a></li>
                    <li class="menu-list"><a href="#religious" class="menu__link"><p>Museo de Arte Religioso</p></a></li>
                    <li class="menu-list"><a href="#uno" class="menu__link"><p>Museo Pablo Jaramillo</p></a></li>
                    <li class="menu-list"><a href="#corn" class="menu__link"><p>Museo Fiesta del Maiz</p></a></li>
                    <li class="menu-list"><a href="#memory" class="menu__link"><p>Salon de la Memoria</p></a></li>
                    <li class="menu-list"><a href="#culture" class="menu__link"><p>Museo de la Cultura</p></a></li>
                    <li class="menu-list"><a href="#arqueologica" class="menu__link"><p>Sala Arqueologica</p></a></li>
                    <li class="menu-list"><a href="#press" class="menu__link"><p>Sala Homenaje a la Prensa Sonsoneña</p></a></li>
                    <li class="menu-list"><a href="#romulo" class="menu__link"><p>Sala Romulo Carvajal</p></a></li>
                    <li class="menu-list"><a href="#pantagoras" class="menu__link"><p>Sala Arqueologica Pantagoras</p></a></li>
                    <li class="menu-list"><a href="#cementery" class="menu__link"><p>Museo Parque Cementerio San José</p></a></li>
                    <li class="menu-list"><a href="#Emilio" class="menu__link"><p>Sala Emilio Perez López</p></a></li>
                </ul>
            </nav>
        </div>

        <section class="museos-intro"><!--intro museos-->
            <div class="museos-intro__title">
                <h2 class="museo-intro__title--2">Introducción</h2>
            </div>
            <div class="museos-intro__detalles">
                <p>
                    <cite> <q> Nunca ha sido un municipio para visitar en un día .
                    Los paisajes, los oficios y productos tradicionales, 
                     la arquitectura, los eventos, la biodiversidad, 
                    se convierten en pretexto para quedarse a conocer, 
                    y los MUSEOS además de ser otro fuerte atractivo, 
                    permiten aproximarse a muchos aspectos de la historia 
                    y sus influencias en la cotidianidad y la cultura</q></cite>
                </p>
                <a href="https://jcmartes.wixsite.com/red-museos-de-sonson" target="_new" class="museos-intro__fuentes">Red de museos</a>
            </div>
        </section>
        <section class="museos-grandparents"> <!--casa de los abuelos-->
            <div class="museos-grandparents__title ">
                <a name="abuelos" />
                <h2 class="titulo-include"><sup> Museo</sup> Casa de <sub> los Abuelos</sub></h2>
            </div>
            <div class="museos-grandparents__img">
                <img src="img/abuelos.jpg" alt="Museo Casa de los Abuelos">
            </div>
            <div class="museos-grandparents__detalles">
                <div class="museos-grandparents__img--text">
                    <img src="img/casa de los abuelos/abuelos trapadvisor.jpg" alt="Casa de los abuelos">
                    
                </div>
                <p>
                    El Museo Casa de los Abuelos (Oficialmente denominado 
                    La Casa de los Abuelos, Museo Folclórico), es un museo 
                    costumbrista y de artes decorativas. 
                    Fue fundado en 1956 por el médico Alfredo Correa Henao, 
                    con el propósito de preservar y divulgar el modo de vida 
                    de los colonizadores de Antioquia y el viejo Caldas, 
                    a través de diferentes elementos propios de la cultura antioqueña 
                    de mediados del siglo XIX y comienzos del siglo XX, 
                    recreando una vivienda propia de ese período.1​ 
                    En la actualidad, el museo cuenta con tres exposiciones permanentes, 
                    la costumbrista ya mencionada, la folclórica, que recrea diferentes 
                    espacios de la vida urbana de la misma época, y la arqueológica 
                    que expone objetos de alfarería de las culturas 
                    prehispánicas que habitaron los territorios de Sonsón.
                    <br><br>
                    <h4><b>Exposición folclórica</b></h4>
                    Hacia finales de la década de 1970, 
                    se planteó la ampliación del museo con el fin de 
                    crear una exposición de los espacios comerciales, 
                    periodísticos y educativos propios de la vida urbana 
                    de Sonsón durante la época expuesta en la vivienda. 
                    De este modo, la Sociedad de Mejoras Públicas adquirió 
                    la casa vecina, y con la asesoría de Pablo Jaramillo, 
                    un grupo de estudiantes de Arquitectura de la Universidad 
                    Pontificia Bolivariana diseñaron e integraron los espacios 
                    de las edificaciones así como la fachada actual, 
                    siguiendo los criterios arquitectónicos del inmueble patrimonial.
                    <br>
                    Esta intervención dio paso a las recreaciones de la sala 
                    bancaria y de fotografía, la escuela primaria, la imprenta 
                    y la tienda de abarrotes, así como dos patios realizados 
                    en piedra de canto rodado, según las técnicas tradicionales, 
                    y un mural conmemorativo a los 50 años de la Fiesta del Maíz. 
                    Con el nombre de Museo folclórico, esta intervención fue inaugurada en 1982
                    <br><br>
                   <h4>Sala arqueológica</h4>
                   <br>
                   <div class="museos-grandparents__img--text">
                    <img src="img/casa de los abuelos/abuelos vymaps.jpg" alt="casa de los abuelos">
                    
                </div>
                   
                    La Sala Arqueológica en el Museo Casa de los Abuelos, 
                    nació con el propósito de articular la historia de la 
                    colonización antioqueña con el pasado prehispánico de 
                    los actuales territorios de Sonsón y como testimonio de 
                    un período poco documentado de la historia de la región, 
                    además de convertir el espacio en un sitio de conservación 
                    del patrimonio arqueológico en riesgo de desaparecer por 
                    actividades ilícitas como la guaquería.
                    <br>
                    Esta iniciativa, surgió hacia finales de la década de 1990, 
                    cuando Luis Guillermo López Bonilla y Juan Manuel Jaramillo 
                    Villegas, estudiantes universitarios con interés en el 
                    patrimonio aborigen, decidieron reunir algunas piezas que 
                    habían recolectado en las zonas rurales de Sonsón a la vez 
                    que promovieron la donación de nuevos objetos para establecer
                     un primer acervo. El proyecto de creación de la sala arqueológica 
                     fue presentado ante el gobierno municipal, quien comprometió recursos 
                     para la creación del museo. Para la consecución del espacio, 
                     los promotores del proyecto solicitaron al entonces presidente 
                     de la Sociedad de Mejoras Públicas, el médico Argemiro Franco Henao,
                      un salón dentro de la Casa de los Abuelos sustentando la relación 
                      histórica mencionada. La idea fue apoyada por la entidad cívica y 
                      con el apoyo del arquitecto Carlos Andrés Flórez y Carlos Augusto Murillo, 
                      amigos e integrantes del equipo inicial, se concretó el diseño del espacio 
                      que contó con asesoría técnica para la catalogación y exposición de las piezas, 
                      así como un espacio idóneo siguiendo los estándares de exposición museográfica de la época.
                    <br>
                    Desde su creación, la sala arqueológica ha promovido 
                    la recuperación de múltiples piezas arqueológicas en 
                    manos de particulares, así como la difusión de la 
                    importancia de estos bienes, logrando la denuncia 
                    de actividades ilegales en torno a este patrimonio y 
                    la recuperación de múltiples elementos en peligro de llegar al mercado negro.
                </p>
                <a href="https://es.wikipedia.org/wiki/Museo_Casa_de_los_Abuelos" target="_new" class="museos-grandparents__fuentes">Wikipedia</a>
            </div>
        </section>

        <section class="museos-religious"> <!--arte religioso-->
            <div class="museos-religious__title">
                <a name="religious" />
                <h2 class="titulo-include"><sup> Museo de</sup> Arte <sub> Religioso</sub></h2>
            </div>
            <div class="museos-religious__img">
                <img src="img/religioso.jpg" alt="Museo de Arte Religioso">
            </div>
            <div class="museos-religious__detalles">
                <div class="museos-religious__img--text">
                    <img src="img/arte religioso/tripAvisor.jpg" alt="Museo de Arte Religioso">
                </div>
                <p>
                    Museo fundado en el año de 1971. por la Parroquia de la Catedral 
                    de Sonsón, con el fin de guardar el patrimonio historico-religioso 
                    del municipio de Sonsón. Cuanta con varias colecciones: ornamentos 
                    del ceremonial religioso, la escultura de los hnos Carvajal, 
                    piezas de origen frances entre otros.
                </p>
                <a href="http://simco.museoscolombianos.gov.co/Home/Museo?personaJuridicaId=119" target="_new" class="museos-religious__fuentes">SIMCO</a>
            </div>
        </section>

        <section class="museos-pablo"> <!--pablo jaramillo-->
            <div class="museos-pablo__title">
                <a name="uno" />
                <h2 class="titulo-include"><sup> Museo</sup> Pablo <sub> Jaramillo</sub></h2>
            </div>
            <div class="museos-pablo__img">
                <img src="img/ciudadela.jpg" alt="Museo Pablo Jaramillo">
            </div>
            <div class="museos-pablo__detalles">
                <div class="museos-pablo__img--text">
                    <img src="img/pablo jaramillo/oriente antioqueño.jpg" alt="Museo Pablo Jaramillo">
                    
                </div>
                <p>
                    Desde el año 2.009 a través de la Administración Municipal, 
                    nace la iniciativa de recoger la obra del Maestro Pablo Jaramillo 
                    en un museo para la historia, tras la valiosa donación de más 
                    de trescientas obras que el artista hace a su pueblo natal. 
                    El 4 de Agosto de 2012 se puede ver realizado este sueño y
                     se inaugura en La Ciudadela Educativa y Cultural El Lago 
                     "El Museo Pablo Jaramillo Sonsón" como un regalo que en su 
                     aniversario 212, le hace el maestro Pablo y el Municipio 
                     a la comunidad sonsoneña. Gracias a esta generosa donación, 
                     el pueblo colombiano y visitantes extranjeros, han podido 
                     conocer y apreciar la obra del maestro. Este museo inicia 
                     su recorrido en la fachada principal del edificio, para 
                     seguir a través del hall del primer piso, y continuar por 
                     una rampa que lleva al espectador al segundo piso, donde 
                     la ruta visual y táctil de sus obras desemboca en el 
                     “área propia del museo”
                     <br><br>
                     <h4>Pablo Jaramillo</h4>
                     <br>
                     <p>
                        Pablo Jaramillo Jaramillo (Sonsón, 2 de enero de 1938) 
                        es un ceramista, dibujante y académico colombiano.
                        Su obra abarca la reinterpretación de la cerámica 
                        indígena, la figuración y la geometrización a través 
                        del módulo, con un marcado estilo personal.
                        <br>
                        Nació en Sonsón el 2 de enero de 1938, en el 
                        hogar conformado por Antonio Jaramillo y Lía Jaramillo. 
                        Desde muy niño empezó a experimentar con el barro. 
                        Realizó sus estudios de bachillerato en el 
                        Liceo Braulio Mejía, del cual egresó en 1958. 
                        Ese año escribió su primer artículo de prensa, 
                        sobre Enrique Gallego Velázquez.
                        Sintiendo vocación por la vida artística, 
                        se matriculó en la Universidad Nacional donde 
                        cursó estudios de dibujo con especialización 
                        en pintura, y obtuvo el correspondiente título 
                        <div class="museos-pablo__img--text">
                            <img src="img/pablo jaramillo/alcaldia de sonson.jpg" alt="Museo Pablo Jaramillo">
                        </div>
                        <p>
                        de maestro en 1963. Ese mismo año le fue otorgada 
                        una mención honorífica en el Primer Salón de grabado 
                        de Cúcuta. Poco después, se vinculó al periódico La 
                        Acción, y en él comenzó a escribir sobre temas locales, 
                        particularmente los relacionados con su área profesional.
                        </p>
                        <br>
                    </p>
                </p>
                <a href="http://simco.museoscolombianos.gov.co/Directorio/Museo?personaJuridicaId=2888" target="_new" class="museos-pablo__fuentes">SIMCO</a>
            </div>
        </section>

        <section class="museos-corn"> <!--fiestas del maiz-->
            <div class="museos-corn__title">
                <a name="corn" />
                <h2 class="titulo-include"><sup> Museo</sup> Fiestas <sub> del Maiz</sub></h2>
            </div>
            <div class="museos-corn__img">
                <img src="img/maiz.jpg" alt="Museo fiesta del maiz">
            </div>
            <div class="museos-corn__detalles">
                <div class="museos-corn__img--text">
                    <img src="img/fiesta del maiz/periodicodigitalelparamo.jpg" alt="Museo Fiesta del maiz">
                </div>
                <p>
                    El museo fiesta del maíz hace parte activa 
                    de la red de museos de Sonsón desde su inauguración, 
                    la cual se realizó a finales del año 2015.
                Su finalidad es conservar los recuerdos de cada fiesta 
                del maíz, (fiesta popular del pueblo) la cual se celebró 
                por primera vez el 11 de agosto de 1938.
                Este museo adicional a las salas de exposición cuenta con 
                espacio adecuado para la realización de diferentes eventos
                 culturales, Tiene como primera etapa un manejo de fotografías y 
                 recuerdos de cada uno de los desfiles
                    <br>
                    
                    Las tradicionales fiestas del maíz constituyen la celebración 
                    folclórica más importante de Antioquia relacionada con la colonización 
                    antioqueña, como evento histórico constituyente de la actual nacionalidad 
                    colombiana. <div class="museos-corn__img--text">
                        <img src="img/fiesta del maiz/unnamed.png" alt="Museo Fiesta del maiz">
                    </div>
                    <p>
                    Surgieron por iniciativa comunitaria en el año 1938 con el propósito de
                     resaltar todo el acervo colonizador en el municipio de Sonsón. Desde entonces los 
                     ejes articuladores de la fiesta son los desfiles tradicionales y el reinado del maíz.
                     </p>
                </p>
            </div>
        </section>

        <section class="museos-memory"> <!--salon de la memoria-->
            <div class="museos-memory__title">
                <a name="memory" />
                <h2 class="titulo-include__m"><sup> Salon</sup> de la  <sub> Memoria</sub></h2>
            </div>
            <div class="museos-memory__img">
                <img src="img/casa de la memoria/memoria.jpg" alt="Museo Casa de los Abuelos">
            </div>
            <div class="museos-memory__detalles">
                <div class="museos-memory__img--text">
                    
                    <img src="img/casa de la memoria/laprensaoriente.jpg" alt="Salon de la memoria">
                </div>
                <p>
                    En el marco del día nacional de la memoria y la solidaridad con las víctimas, 
                    el 9 de abril del 2015, nace el Salón de Memoria de Sonsón, como un nuevo lugar 
                    de memoria que busca articular las iniciativas de los ciudadanos de la zona Páramo 
                    del Oriente. 
                    <br>
                    El Salón de la Memoria de Sonsón sobrevive gracias a la persistencia de las víctimas. 
                    De no ser por el trabajo voluntario de las mujeres del Costurero de Tejedoras por  <div class="museos-memory__img--text">
                        <img src="img/casa de la memoria/descarga.jpg" alt="salon de la memoria">
                    </div>
                    <p> 
                    la Memoria 
                    y de algunos ciudadanos comprometidos, este espacio desaparecería por falta de apoyo institucional.
                    </p>
                    <br>
                </p>
                <a href="http://hacemosmemoria.org/2018/06/05/estado-salon-memoria-sonson/" target="_new" class="museos-memory__fuentes">Hacemos Memoria</a>
            </div>
        </section>

        <section class="museos-culture"> <!--casa museo de la cultura-->
            <div class="museos-culture__title">
                <a name="culture" />
                <h2 class="titulo-mm titulo-mm__n--q"><sup> Casa</sup> Museo de  <sub> la Cultura</sub></h2>
            </div>
            <div class="museos-culture__img">
                <img src="img/casa museo de la cultura/museocultura.jpg" alt="casa museo de la cultura">
            </div>
            <div class="museos-culture__detalles">
                <div class="museos-culture__img--text">
                    <img src="img/casa museo de la cultura/simco.png" alt="casa museo de la cultura">
                </div>
                <p>
                    Es una casa colonial de dos plantas en bloque y adobe macizo. 
                    En el centro hay un patio empedrado, donado en 1970 por la Sociedad 
                    de Mejoras Públicas en honor a Roberto Jaramillo Arango. 
                    También un busto del fundador de Sonsón, José Joaquín Ruiz y Zapata. 
                    En el primer piso están la biblioteca Benigno Gutiérrez, quien fue 
                    personero de Sonsón y se destacó por su civismo; la sala Celia Ramos Toro, 
                    quien fue presidenta de la Sociedad de Mejoras Públicas y se destacó por su 
                    civismo; sala Rómulo Carvajal, escultor dedicado al arte religioso y autor 
                    de mucha de la iconografía religiosa del municipio. Además la Casa 
                    posee taller de tallas en madera y yeso, un patio con un mural,
                    <div class="museos-culture__img--text">
                        <img src="img/casa museo de la cultura/cultura.jpg" alt="casa museo de la cultura">
                    </div> 
                    <p>
                    homenaje a la Rueda del arquitecto sonsoneño Pablo Jaramillo, 
                    una fuente de piedra y granito que era de la antigua catedral, 
                    Auditorio Lucía Javier para 112 personas y nombrado en honor a 
                    una poetiza sonsoneña, archivo fotográfico de las Reinas del Maíz, 
                    centro de historia San José de Ezpeleta, donde se encuentran el primer 
                    libro notarial, datos de la fundación del municipio, genealogías sonsoneñas 
                    e historia de personajes ilustres. Está también la sala Rodrigo Correa Palacio, 
                    historiador y hombre de la radio conocido por su programa "Arrieros Somos". 
                    Finalmente hay Salón de Música, Taller de Confecciones y tres salones en los 
                    que se dictan clases de guitarra, lira y piano
                    </p>
                </p>
                <a href="https://turismo-cultural4.webnode.com.co/news/casa-de-la-cultura/" target="_new" class="museos-culture__fuentes">Turismo-cultural4</a>
            </div>
        </section>

        <section class="museos-arqueologica"> <!--sala arqueologica-->
            <div class="museos-arqueologica__title">
                <a name="arqueologica" />
                <h2 class="titulo-include__m"><sup> Sala</sup><sub> Arqueologica</sub></h2>
            </div>
            <div class="museos-arqueologica__img">
                <img src="img/sala arqueologica/arqueoligica.jpg" alt="sala arqueologica">
            </div>
            <div class="museos-arqueologica__detalles">
                <div class="museos-arqueologica__img--text">
                    <img src="img/sala arqueologica/descargas.jpg" alt="Sala arqueologica">
                </div>
                <p>
                    La Sala Arqueológica de Sonsón es la sala-museo que 
                    desde hace más de 20 años salvaguarda e invita a conocer 
                    la historia de las comunidades aborígenes del municipio.
                    <br>
                    Fue abierta al público el 11 de agosto de 1999 exhibiendo 
                    una colección de piezas arqueológicas representativas de 
                    los grupos humanos que a lo largo de varios milenios habitaron 
                    el territorio sonsoneño desde el cañón del río Arma hasta las 
                    tierras bajas de la confluencia del río La Miel, en el Magdalena.
                    <br>
                    Actualmente la colección comprende cerca de 3000 objetos articulados
                     a partir de un guion museográfico que presenta los avances en el 
                     conocimiento sobre la arqueología regional y la interpretación de la 
                     colección de una manera didáctica, para acercar público.
                    <br>  <div class="museos-arqueologica__img--text">
                        <img src="img/sala arqueologica/descarga.jpg" alt="Sala arqueologica">
                    </div>
                    <p>
                    Con ello esta sala se ha encargado de generar procesos de apropiación 
                    social de los sonsoneños con respecto a su patrimonio cultural, dándole 
                    una mirada al pasado indígena, reconociendo las diferentes comunidades y 
                    su transición en la conquista, dominio y exterminio.
                    Esta sala hace parte del Museo Folklórico Casa de los Abuelos, lugar 
                    donde se ubica.
                    </p>
                </p>
                <a href="https://orienteantioqueno.com/turismo-en-sonson/sala-arqueologica-sonson/" target="_new" class="museos-arqueologica__fuentes">Oriente antioqueño</a>
            </div>
        </section>

        <section class="museos-press"> <!--homenaje a la prensa-->
            <div class="museos-press__title">
                <a name="press" />
                <h2 class="titulo-mm__n titulo-mm__n--h "><sup> Sala</sup> Homenaje a  <sub> la Prensa</sub></h2>
            </div>
            <div class="museos-press__img">
                <img src="img/homenaje a la prensa/prensa.jpg" alt="Sala homenaje a la prensa">
            </div>
            <div class="museos-press-detalles">
                <div class="museos-press__img--text">
                    <img src="img/homenaje a la prensa/img2.PNG" alt="Sala homenaje a la prensa">
                </div>
                <p>
                    El Museo Homenaje a la prensa Sonsoneña nace desde la iniciativa 
                    de un grupo de personas, en especial el señor Luis Guillermo Henao Gómez, 
                    quien propone a la familia Gómez dueños de la antigua tipografía Gomezul 
                    donar la imprenta para la creación del Museo en el Centro de Convivencia 
                    Ciudadana del municipio de Sonsón. Es así como en el año 2012 el señor alcalde 
                    en un reconocimiento a este espacio deposita la custodia de este inmueble patrimonial, 
                    haciendo realidad uno de los proyectos nacidos desde la dirección técnica de Cultura 
                    en su afán por rescatar y salvaguardar la riqueza patrimonial del municipio.
                </p>
                <a href="http://simco.museoscolombianos.gov.co/Home/Museo?personaJuridicaId=2908" target="_new" class="museos-press__fuentes">SIMCO</a>
            </div>
        </section>

        <section class="museos-romulo"> <!--sala romulo carvaja-->
            <div class="museos-romulo__title">
                <a name="romulo" />
                <h2 class="titulo-mm__n  titulo-mm__n--h "><sup> Sala</sup> Romulo<sub> Carvajal<sub></h2>
            </div>
            <div class="museos-romulo__img">
                <img src="img/sala romulo/romulo.jpg" alt="sala Romulo Carvajal">
            </div>
            <div class="museos-romulo__detalles">
                <div class="museos-romulo__img--text">
                    
                    <img src="img/sala romulo/periodicodigitalelparamo.jpg" alt="sala Romulo Carvajal">
                </div>
                <h4>Rómulo Carvajal</h4>
                <p>
                    
                    <br>
                        Un artista que llegó a Sonsón en 1918 y que se estableció acá 
                        en nuestro municipio: Nos dejó todo este legado que está saliendo
                         hoy en este documental. Este es un legado grande que se fundó 
                         primero en la casa de la Cultura donde era la residencia de
                          Don Rómulo, y luego en el 2014 lo trajimos como un anexo al Museo de Arte Religioso.
                        La creación de esta sala el 2 de agosto de 2014, se da gracias
                         a una serie de gestiones de personas e instituciones, 
                         la Universidad Nacional Sede Manizales, Universidad Autónoma Del Valle, 
                         Universidad Nacional Sede Medellín, arquitecta Marta Lucia Londoño Carvajal 
                         (familiar de Rómulo Carvajal), el director de patrimonio de 
                         Antioquia Guillermo López Bonilla, todos interesados en rescatar las obras 
                         de uno de los principales exponentes de la imagineria religiosa a nivel nacional.
                         <div class="museos-romulo__img--text">
                            <img src="img/sala romulo/elcolombiano.png" alt="sala Romulo Carvajal">
                            
                        </div>
                        <p>
                        En esta sala se pueden observar elementos que muestran las diferentes etapas 
                        que conlleva la creación de una de estas imágenes, al igual que la creación 
                        del maestro Carvajal, prototipos en cera, en yeso y obras reflejadas en la semana santa.
                        </p>

                </p>
                <!-- <a href="https://es.wikipedia.org/wiki/Museo_Casa_de_los_Abuelos" target="_new" class="romulo-fuentes">Wikipedia</a> -->
            </div>
        </section>

        <section class="museos-pantagoras"> <!--Sala Arqueologica Pantagorass-->
            <div class="museos-pantagoras__title">
                <a name="pantagoras" />
                <h2 class="titulo-mm__n--c  titulo-mm__n--h "><sup> Sala</sup> Arqueologica<sub> Pantagoras<sub></h2>
            </div>
            <div class="museos-pantagoras__img">
                <img src="img/pantagoras/pantagoras.jpg" alt="Museo Sala Arqueologica Pantagorass">
            </div>
            <div class="museos-pantagoras__detalles">
                <div class="museos-pantagoras__img--text">
                    <img src="img/pantagoras/oriente.jpg" alt="Sala Arqueologica Pantagorass">
                    
                </div>
                <p>
                   La Sala Arqueológica, abrió sus puertas en el Corregimiento San Miguel, 
                   con lo que se pretende ubicar allí las piezas arqueológicas más representativas 
                   del territorio; mostrando costumbres como la pesca, la minería en batea y la 
                   ganadería, las cuales aún siguen vigentes y que se han venido consolidando a 
                   través de la tipología, arqueología y cosmología de lo ancestral y local, 
                   rescatando en el territorio nuestras raíces de manera que ese patrimonio 
                   permanezca siempre y se potencialice en los habitantes de la región.
                    “Esta es una apuesta que tiene el municipio desde tiempo atrás, para 
                    mostrar un potencial diferenciador, teniendo presente que somos cuna 
                    de la colonización antioqueña y que debemos conservar nuestro patrimonio 
                    para darlo a conocer a los turistas y nuevas generaciones”, expresó, 
                    Edwin Alonso Galeano Pareja, Director Técnico de Cultura del municipio de Sonsón.
                    <br><br>
                    <div class="museos-pantagoras__img--text">
                        
                        <img src="img/pantagoras/descarga.jpg" alt="Sala Arqueologica Pantagorass">
                    </div>
                    <p>
                    En este espacio museográfico se pueden observar algunas de las piezas 
                    arqueológicas de las principales tribus que se asentaron en la zona de Butantán 
                    Magdalena Medio; fundamentalmente de la tribu Pantágoras, cercanos al río La Miel, 
                    vital fuente de comunicación fluvial de la región y de esta tribu.
                    En consecuencia, por fuera del área metropolitana, Sonsón es el municipio con 
                    mayor número de museos en el departamento de Antioquia, contando ahora con seis 
                    de estos atractivos,​ con lo que el municipio se ha ganado el apelativo de “Sonsón Ciudad Museo.”
                    Esta sala se gesta gracias a una alianza entre el Ministerio de Cultura, la 
                    Gobernación de Antioquia, el Instituto de Cultura y Patrimonio de Antioquia y 
                    la administración municipal de Sonsón.
                    Con esta nueva sala en esta ocasión en San Miguel, Sonsón le sigue apostando al 
                    Arte y a la cultura como una fuente de turismo cultural y de progreso para el municipio y la región.
                    </p>
                </p>
                <a href="https://orientese.co/corregimiento-san-miguel-sonson-abren-sala-arqueologica/" target="_new" class="museos-pantagoras__fuentes">Orientese.co</a>
            </div>
        </section>

        <section class="museos-cemetery"> <!--cementerio-->
            <div class="museos-cemetery__title">
                <a name="cementery" />
                <h2 class="titulo-mm__n--c  titulo-mm__n--h "><sup> Museo Parque</sup> Cementerio San josé<sub> de Sonsón<sub></h2>
            </div>
            <div class="museos-cemetery__img">
                <img src="img/cementerio/cementerio.jpg" alt="Museo Parque Cementerio San José de Sonsón">
            </div>
            <div class="museos-cemetery__detalles">
                <div class="museos-cemetery__img--text">
                    <img src="img/cementerio/carlosvalencia.jpg" alt="Museo Parque Cementerio San José de Sonsón">
                    
                </div>
                <p>
                    A través del programa de fortalecimiento de museos del Ministerio de 
                    la Cultura de Colombia fue elevado a esa categoría el cementerio del 
                    municipio de Sonsón, en el Sur del departamento de Antioquia.
                    <br><br>
                    Y es que el Museo parque cementerio San José de Sonsón fue distinguido 
                    por cumplir a cabalidad con todos los requerimientos de ley por lo que 
                    podrá gozar del estatus durante tres años a partir de la fecha.
                    Cuenta con una gran colección de imagineria, su arquictura del 
                    siglo pasado, con afluencia de turistas, bovedas con personejes historicos, 
                    lapidas con más de cien años.
                    <div class="museos-cemetery__img--text">
                       
                        <img src="img/cementerio/rafaelalvarez.jpg" alt="Museo Parque Cementerio San José de Sonsón">
                    </div>
                    <br><br>
                    <p>
                    La misiva enviada hasta la dirección del sitio en el mencionado 
                    municipio fue firmada por Daniel Castro, director del Museo Nacional de Colombia.
                    </p>
                </p>
                <a href="https://www.minuto30.com/antioquia/el-cementerio-de-sonson-fue-elevado-a-museo-por-parte-del-ministerio-de-cultura/710788/" target="_new" class="museos-cemetery__fuentes">  Minuto30</a>
            </div>
        </section>

        <section class="museos-Emilio"> <!--sala Emilio Perez López-->
            <div class="museos-Emilio__title">
                <a name="Emilio" />
                <h2 class="titulo-mm__n--c titulo-mm__n--h "><sup> Sala</sup> Emilio<sub> Perez López<sub></h2>
            </div>
            <div class="museos-Emilio__img">
                <img src="img/sala emilio/emilio.jpg" alt="sala Emilio Perez López">
            </div>
            <div class="museos-Emilio__detalles">
                <div class="museos-Emilio__img--text">
                    <img src="img/sala emilio/img23.PNG" alt="sala Emilio Perez López">
                    
                </div>
                <p>
                    Emilio Pérez López nació en La Ceja del Tambo a principios del siglo XX, emigró al 
                    municipio de Sonsón en plena juventud y en 1922 abrió el servicio de Fotografía Venus. 
                    Su reputación como un buen fotógrafo de estudio le permitió ampliar el área de acción a 
                    los municipios de Argelia, Nariño y Abejorral.
                    <br><br>
                    La Fotografía Venus se encontraba ubicada en la carrera séptima, sector comercial 
                    La Cañada y desde allí el fotógrafo tuvo la oportunidad de registrar los momentos
                     más representativos en la historia de los habitantes de la región: bautismos, 
                     primeras comuniones, ordenaciones sacerdotales, sepelios. Su cámara logró captar 
                     momentos sociales y familiares, costumbres y tradiciones, así como paisajes que 
                     hacen parte de la memoria visual del colectivo regional del suroriente antioqueño.
                     <br><br>
                    Adicional a su labor, Don Emilio prestó servicio de revelado, de ahí que su archivo 
                    compilado entre 1922 y 1982, contenga toda una gama de personajes, aconteceres y sitios
                     de referencia histórica sin precedentes.
                     <br><br>
                     <div class="museos-Emilio__img--text">
                        
                        <img src="img/sala emilio/muestra-fotos-de-Antioquia-1140x570.jpg" alt="sala Emilio Perez López">
                    </div>
                    <p>
                    En el año 1983 la familia de Pérez López entrega en calidad de donación a la Casa de los 
                    Abuelos Museo Folclórico la colección fotográfica del cejeño, allí inició un largo proceso 
                    de valoración que poco a poco fue revelando el talento y la habilidad con la cámara y los 
                    químicos que poseía el retratista quién en ocasiones coloreaba a manos sus trabajos.
                    <br><br>
                    Las fotografías de Emilio Pérez siempre fueron bien valoradas y las familias numerosas 
                    posaron ante su lente durante más de 60 años en el siglo XX.
                    <br><br>
                    Pese a que los expertos en la actualidad destacan la rigurosidad y seriedad artística del 
                    fotógrafo, para la archivista Gabriela Grisales, investigadora principal de esta colección,
                     el componente más valioso de este acervo es el registro del devenir histórico de toda una región y 
                     agregó: “Si bien la historia de Antioquia y la región está bien documentada, no cuenta con el respaldo
                      fotográfico que ofrece esta colección y recordemos que una imagen vale más que mil palabras. 
                      Es muy importante que todos los antioqueños se enteren, se apropien, amen, busquen, indaguen 
                      y recuperen en este archivo parte de la vida y aconteceres de sus antepasados”.
                      </p>
                </p>
                <a href="http://diarioriente.com/paramo/46-00.html" target="_new" class="museos-Emilio__fuentes">DiariOriente</a>
            </div>
        </section>
        
    </main>

    <footer class="footer uno">  <!--footer-->
		<div class="footer__logo-box">
			<img src="img/logo.png" alt="Paramo Software" class="footer__logo">
		</div>
		<div class="row">
			<div class="col-1-of-2">
				<div class="footer__navigation"> <!--linea debajo de los elemento de navegacion-->
					<ul class="footer__list">
						<li class="footer__item"><a href="#" class="footer__link">Company</a></li>
						<li class="footer__item"><a href="#" class="footer__link">contact </a></li>
						<li class="footer__item"><a href="#" class="footer__link">Paramo Software </a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-of-2">
				<p class="footer__copyright">
					Creado por <a href="#" class="footer__link">Jonatan Osorio A.</a> Diseñado por<a href="#" class="footer__link">Jonatan Osorio A. </a>
				</p>
			</div>
		</div>
	</footer>
   
    
</body>
</html>