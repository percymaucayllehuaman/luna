
    <?php

    /**
     *
     * Theme Name: Luna
     *
     *
     *
     * @package WordPress
     * @subpackage Luna
     * @since Luna 1.0
     */

        // get_header();
        require('header.php');
    ?>


    <header class="header_main_luna bg-white overflow-hidden box-border w-full h-[80px] relative z-[9999] section" id="inicioluna">
        <div class="wrap_center_width h-[80px] w-full fixed oerverflow-hidden flex justify-between px-2 sm:px-[4rem] bg-white">
            <div class="main_left_wrap_logo box-border items-center h-full flex mr-5">
                <img src="./assets/logo/Logo_Luna.png" alt="Logo de Luna" class="h-[65px]">
            </div>
            <div>
            </div>
            <div class="wrap_menu_top flex flex-row w-auto h-full">
                <nav class="header_nav flex-row w-auto h-full">
                    <ul class="ul_header flex-row w-auto h-full flex gap-3 py-2 sm:py-0 sm:gap-5 items-center flex-wrap justify-end">
                        <li class="li_header">
                            <a class="a_header selected_link_header tracking-widest font-bold text-[#264F73]" href="#inicioluna">
                                INICIO
                            </a>
                        </li>
                        <li class="li_header">
                            <a class="a_header tracking-widest font-bold text-[#264F73]" href="#lunaservices">
                                SERVICIOS
                            </a>
                        </li>
                        <li class="li_header">
                            <a class="a_header tracking-widest font-bold text-[#264F73]" href="#aboutusluna">
                                NOSOTROS
                            </a>
                        </li>
                        <li class="li_header">
                            <a class="a_header tracking-widest font-bold text-[#264F73]" href="#contactsluna">
                                CONTACTOS
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="container_imagin_background w-full flex items-center">
        <div class="wrap_section_box w-auto h-auto px-2 z-[9999] sm:left-[3rem] relative w-full lg:left-[6rem]">
            <div class="content_texts w-full">
                <p class="text-[30px] text-[#FFF] font-bold my-0 text-center w-full sm:text-[40px]">
                    Digitalizamos tus ideas con
                </p>
                <p class="text_s_h2 font-bold text-[42px] text-center my-0 sm:text-[80px]">
                    Alegría
                </p>
            </div>
            <div class="contents_links_social_networks relavite">
                <ul class="ul_clas_socialnetworks menu_ul_h flex justify-center gap-5">
                    <li class="li_icons mt-3">
                        <a class="a_link_social_net" href="http://instagram" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/iconspng/tiktok.png" alt="Icon Tiktok" class="icon_socialnetworks w-[50px]">
                        </a>
                    </li>
                    <li class="li_icons mt-3">
                        <a class="a_link_social_net" href="http://instagram" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/iconspng/linkedin.png" alt="icon in" class="icon_socialnetworks w-[50px]">
                        </a>
                    </li>
                    <li class="li_icons mt-3">
                        <a class="a_link_social_net" href="http://instagram" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/iconspng/fb.png" alt="Icon Fb" class="icon_socialnetworks w-[50px]">
                        </a>
                    </li>
                    <li class="li_icons mt-3">
                        <a class="a_link_social_net" href="http://instagram" target="_blank" rel="noopener noreferrer">
                            <img src="assets/iconspng/instg.png" alt="icon Inst" class="icon_socialnetworks w-[50px]">
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="content_services_luna sm:my-10 block section" id="lunaservices">
        <h2 class="question_title text-center text-[2rem] sm:text-[3rem] font-bold my-8 px-1 " style="color: var(--primary-color);">
            ¿Qué te ofrecemos?
        </h2>
        <div class="box_services flex justify-center mb-10">
            <div class="wrap_sections flex items-center max-w-fit gap-1 flex-col sm:justify-evently sm:flex-row sm:gap-[1rem] md:gap[3rem] lg:gap-[10rem]">
                <section class="relative mt-[150px] section_serv w-[22rem] min-h-[20rem] box-border">
                    <img class="h-[330px] mt-[-150px] relative" src="assets/content_imgs/landing-development.png" alt="">
                    <div class="w-full">
                        <p class="text-center my-6 text-[1.5rem]" style="color: var(--secondary-color);">
                            <strong>Desarrollo Web</strong>
                        </p>
                        <p class="text-justify px-5 pb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor. Phasellus condimentum justo in luctus iaculis. Suspendisse porta sapien id orci convallis consequat. Proin vel orci a odio dignissim ultricies quis nec mauris.
                        </p>

                    </div>
                </section>
                <section class="relative mt-[150px] section_serv  w-[22rem] min-h-[20rem] box-border">
                    <img class="h-[330px] mt-[-150px] relative" src="assets/content_imgs/landing-digital-marketing.png" alt="">
                    <div class="w-full">
                        <p class="text-center my-6 text-[1.5rem]" style="color: var(--secondary-color);">
                            <strong>Marketing Digital

                            </strong>
                        </p>
                        <p class="text-justify px-5 pb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor. Phasellus condimentum justo in luctus iaculis. Suspendisse porta sapien id orci convallis consequat. Proin vel orci a odio dignissim ultricies quis nec mauris.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="content_we flex justify-center">
        <div class="wrap_content_we flex flex-wrap w-[90%] gap-3 md:gap-10 flex-col-reverse md:flex-row mb-10">
            <div class="team_img md:w-[45%]">
                <img class="min-w-[300px]" src="assets/content_imgs/image_team.png" alt="we_team">
            </div>
            <style>
                @media (min-width:768px) {
                    .wrap_content_we .aboutus_right {
                        width: calc(55% - 2.5rem);
                    }
                }
            </style>
            <div class="aboutus_right">
                <h2 class="title_aboutus my-3 text-center font-bold text-[2rem] sm:text-[3rem] px-1 relative md:mt-[-30px]" style="color: var(--primary-color);">
                    ¿Quienes somos?
                </h2>
                <div class="mb-4">
                    <p class="text-justify py-2 mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor. Phasellus condimentum justo in luctus iaculis. Suspendisse porta sapien id orci convallis consequat. Proin vel orci a odio dignissim ultricies quis nec mauris.
                    </p>
                    <div class="items flex flex-col gap-5">
                        <div class="item flex gap-4 px-4 py-2 items-center" style="background: rgba(142, 128, 191, 0.4);">
                            <img class="h-[20px]" src="assets/iconspng/Vector_arrow.png" alt="arrow">
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui
                            </p>
                        </div>
                        <div class="item flex gap-4 px-4 py-2 items-center" style="background: rgba(142, 128, 191, 0.4);">
                            <img class="h-[20px]" src="assets/iconspng/Vector_arrow.png" alt="arrow">
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui
                            </p>
                        </div>
                        <div class="item flex gap-4 px-4 py-2 items-center" style="background: rgba(142, 128, 191, 0.4);">
                            <img class="h-[20px]" src="assets/iconspng/Vector_arrow.png" alt="arrow">
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolioluna" class="portfolio_luna relative w-full h-auto">
        <h2 class="title_aboutus text-center font-bold text-[2rem] sm:text-[3rem] mt-4" style="color: var(--primary-color);">
            Portafolio
        </h2>
        <div class="w-full flex justify-center my-4">
            <p class="w-[70%] text-center py-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor. Phasellus condimentum justo in luctus iaculis. Suspendisse porta sapien id orci convallis consequat. Proin vel orci a odio dignissim ultricies quis nec mauris.
            </p>
        </div>

        <div class="conatainer_grid w-full flex justify-center mb-10">
            <div class="relative">
                <div class="grid_images my-5">
                    <div class="one item_img" style="z-index: 999;">
                        <img src="assets/content_imgs/Rectangle_61.png" alt="">
                    </div>
                    <div class="two item_img">
                        <img src="assets/content_imgs/Rectangle63.png" alt="">
                    </div>
                    <div class="three item_img">
                        <img src="assets/content_imgs/Rectangle67.png" alt="">
                    </div>
                    <div class="four item_img">
                        <img src="assets/content_imgs/Rectangle68.png" alt="">
                    </div>
                    <div class="five item_img">
                        <img src="assets/content_imgs/Rectangle69.png" alt="">
                    </div>
                </div>
                <div class="row_buttton w-full h-auto flex justify-center">
                    <a class="bg-[#918ABF] font-bold text-white rounded-2xl px-5 py-3 text-[1.3rem]" href="#" target="_blank" rel="noopener noreferrer">
                        ¡Quiero ver más!
                    </a>
                </div>
                <div class="absolute w-fit h-fit bottom-0 left-[-20px]" style="z-index: 1;">
                    <img class="w-[150px]" src="assets/content_imgs/Rectangle79.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="customersluna" class="customersluna my-5">
        <h2 class="title_aboutus text-center font-bold text-[2rem] sm:text-[3rem]" style="color: var(--primary-color);">
            Clientes satisfechos
        </h2>
        <div class="">
            <h3 class="title_aboutus text-center font-bold text-[1.2rem] my-5" style="color: var(--primary-color);">
                "Diseños increibles y trabajos de calidad"
            </h3>
            <div class="customers_items justify-center flex flex-wrap gap-3 mb-10">
                <acticle class="item_article w-[500px] flex flex-col">
                    <p class="text-center my-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor.
                    </p>
                    <div class="flex justify-center">
                        <img src="assets/content_imgs/Ellipse1.png" alt="">
                    </div>
                    <h3 class="text-center text-[1.3rem] font-bold my-3" style="color: var(--primary-color);">
                        Cliente 1
                    </h3>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet
                    </p>
                </acticle>
                <acticle class="item_article w-[500px] flex flex-col">
                    <p class="text-center my-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor.
                    </p>
                    <div class="flex justify-center">
                        <img src="assets/content_imgs/Ellipse1.png" alt="">
                    </div>
                    <h3 class="text-center text-[1.3rem] font-bold my-3" style="color: var(--primary-color);">
                        Cliente 2
                    </h3>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet
                    </p>
                </acticle>
            </div>
        </div>
    </div>
    <div class="aboutusluna my-5 section" id="aboutusluna">
        <h2 class="title_aboutus text-center font-bold text-[2rem] sm:text-[3rem]" style="color: var(--primary-color);">
            Conoce a nuestro equipo
        </h2>
        <div class="my-5 flex justify-center text-center">
            <p class="mt-5 w-[85%] md:w-[50%] max-w-[700px]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor. Phasellus condimentum justo in luctus iaculis. Suspendisse porta sapien id orci convallis consequat. Proin vel orci a odio dignissim ultricies quis nec mauris.
            </p>
        </div>
        <div class="my-8 w-full">
            <div class="customers_items justify-center flex flex-wrap gap-5">
                <acticle class="item_article w-auto flex flex-col">
                    <div class="flex justify-center">
                        <img class="w-[300px] h-[260px] rounded-3xl" src="assets/content_imgs/Rectangle65.png" alt="">
                    </div>
                    <h3 class="text-center text-[1.3rem] font-bold my-3" style="color: var(--secondary-color);">
                        Colaborador 1
                    </h3>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet
                    </p>
                </acticle>
                <acticle class="item_article w-auto flex flex-col">
                    <div class="flex justify-center">
                        <img class="w-[300px] h-[260px] rounded-3xl" src="assets/content_imgs/Rectangle62.png" alt="">
                    </div>
                    <h3 class="text-center text-[1.3rem] font-bold my-3" style="color: var(--secondary-color);">
                        Colaborador 2
                    </h3>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet
                    </p>
                </acticle>
                <acticle class="item_article w-auto flex flex-col">
                    <div class="flex justify-center">
                        <img class="w-[300px] h-[260px] rounded-3xl" src="assets/content_imgs/Rectangle66.png" alt="">
                    </div>
                    <h3 class="text-center text-[1.3rem] font-bold my-3" style="color: var(--secondary-color);">
                        Colaborador 3
                    </h3>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet
                    </p>
                </acticle>
            </div>
        </div>
    </div>
    <div class="results my-[20px] w-full my-[30px]">
        <div class="customers_items justify-center flex flex-wrap gap-5">
            <acticle class="item_article w-auto flex flex-row items-center gap-4 w-[300px] justify-center">
                <h3 class="text-center text-[3rem] font-bold my-3" style="color: var(--secondary-color);">
                    20
                </h3>
                <span class="text-center font-bold w-min" style="color: var(--primary-color)">
                    Años de Eperiencia
                </span>
            </acticle>
            <acticle class="item_article w-auto flex flex-row items-center gap-4 w-[300px] justify-center">
                <h3 class="text-center text-[3rem] font-bold my-3" style="color: var(--secondary-color);">
                    100
                </h3>
                <span class="text-center font-bold w-min" style="color: var(--primary-color)">
                    Proyectos realizados
                </span>
            </acticle>
            <acticle class="item_article w-auto flex flex-row items-center gap-4 w-[300px] justify-center">
                <h3 class="text-center text-[3rem] font-bold my-3" style="color: var(--secondary-color);">
                    10K
                </h3>
                <span class="text-center font-bold w-min" style="color: var(--primary-color)">
                    Clientes satisfechos
                </span>
            </acticle>
        </div>
    </div>
    <div class="contactsluna w-full section" id="contactsluna">
        <div class="">
            <h2 class="text-[2rem] sm:text-[3rem] font-bold text-center my-8" style="color: var(--primary-color)">
                Te gustaría empezar tu proyecto con nosotros?
            </h2>
        </div>
        <div class="flex-col md:flex-row w-full flex flex-wrap items-center md:justify-center md:gap-5 md:mb-8">
            <div class="md:w-[60%] max-w-fit items-center">
                <p class="text-center px-5 max-w-[600px] md:text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor. Phasellus condimentum justo in luctus iaculis. Suspendisse porta sapien id orci convallis consequat. Proin vel orci a odio dignissim ultricies quis nec mauris.
                </p>
            </div>
            <div class="w-fit my-10">
                <a class="w-fit bg-[#55C04C] py-3 px-10 h-auto flex flex-row gap-2 items-center text-white font-bold text-[1.2rem]" href="https://api.whatsapp.com/send?phone=51904531809&text=" target="_blank" rel="" style="border-radius: 2rem;">
                    <img class="h-8" src="assets/iconspng/icons8-whatsapp.png" alt="">
                    904 531 809
                </a>
            </div>
        </div>
    </div>
    <div class="footer_luna flex flex-wrap justify-center text-white" style="background: var(--primary-color);">
        <div class="w-[90%] flex flex-wrap justify-center gap-5 mt-8">
            <section class="max-w-[400px]">
                <img src="assets/logo/Logo_luna_white.png" alt="">
                <p class="text-[.8rem] pt-5 w-[90%]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur tristique magna quis vulputate. Nulla vel magna sit amet ligula viverra tempus nec a dui. Quisque tristique ut arcu eget auctor. Phasellus condimentum justo in luctus iaculis.
                </p>
            </section>
            <section class="w-fit md:w-[15%]">
                <h2 class="text-[1.5rem] font-bold">Compañía</h2>
                <ul class="flex flex-col">
                    <li class="">
                        <a class="py-2 w-full flex text-[1.2rem]" href="#inicioluna">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a class="py-2 w-full flex text-[1.2rem]" href="#lunaservices">
                            Servicio
                        </a>
                    </li>
                    <li>
                        <a class="py-2 w-full flex text-[1.2rem]" href="#aboutusluna">
                            Nosotros
                        </a>
                    </li>
                </ul>
            </section>
            <section class="w-fit md:w-[15%]">
                <h2 class="text-[1.5rem] font-bold">Negocios</h2>
                <ul>
                    <li class="flex">
                        <a class="py-2 w-full text-[1.2rem]" href="#portfolioluna">
                            Portafolio
                        </a>
                    </li>
                    <li class="flex">
                        <a class="py-2 w-full text-[1.2rem]" href="#customersluna">
                            Clientes
                        </a>
                    </li>
                    <li class="flex">
                        <a class="py-2 w-full text-[1.2rem]" href="#aboutusluna">
                            Equipo
                        </a>
                    </li>
                </ul>
            </section>
            <section class="w-fit md:w-[20%] ">
                <h2 class="text-[1.5rem] font-bold">Contáctanos</h2>
                <div class="flex gap-3 mt-7 flex-wrap">
                    <a href="w-min hover:pointer" target="_blank">
                        <img class="h-[22px]" src="assets/iconspng/icons8-whatsapp.png" alt="">
                    </a>
                    <a href="" target="_blank">
                        <img class="h-[22px]" src="assets/iconspng/tiktok.png" alt="">
                    </a>
                    <a href="" target="_blank">
                        <img class="h-[22px]" src="assets/iconspng/linkedin.png" alt="">
                    </a>
                    <a href="" target="_blank">
                        <img class="h-[22px]" src="assets/iconspng/fb.png" alt="">
                    </a>
                    <a href="" target="_blank">
                        <img class="h-[22px]" src="assets/iconspng/instg.png" alt="">
                    </a>
                </div>

            </section>
        </div>
        <div class="">
            <p class="text-white mt-5 mb-3">
                Todos los Derechos Reservados © Luna 2022
            </p>
        </div>
    </div>
</body>

</html>
