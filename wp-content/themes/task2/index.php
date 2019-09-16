<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <!-- <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.css"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/6c1fa7d998.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/modal.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/mediaImg.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/task1.css">

</head>
<body >
<!--header-->
    <div class="main-content inner bg-home"  id="home">
    <br>

        <nav class="navbar navbar-expand-lg navbar-light navPadding ">
            <a class="navbar-brand padding-left" href="#home"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png"></a>
            <button  class="navbar-toggler btn-nav" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>

            <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <?php $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                    // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

                    $menuID = $menuLocations['header-menu']; // Get the *primary* menu ID

                    $primaryNav = wp_get_nav_menu_items($menuID);
                    $i=0;
                    foreach ( $primaryNav as $navItem ) {
                        $i+=1;
                        if ($i==1)
                        {
                            echo '   <li class="nav-item">
                             <div class="menu-nav active_menu">
                        <a class="nav-link " href="'.$navItem->url.'" title="'.$navItem->title.'"><p class="color-text-nav">'.$navItem->title.'</p></a>
                             </div>
                        </li>';
                        }
                        else
                        {
                            echo '   <li class="nav-item">
                             <div class="menu-nav">
                        <a class="nav-link " href="'.$navItem->url.'" title="'.$navItem->title.'"><p class="color-text-nav">'.$navItem->title.'</p></a>
                             </div>
                        </li>';
                        }


                    }
                    ?>
                   <!-- <li class="nav-item">
                        <div class="menu-nav active_menu">
                            <a class="nav-link " href="#home"><p class="color-text-nav">HOME</p></a>

                    </li>
                    -->
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                </ul>
            </div>

        </nav>
        <br>
		<?php $home = new WP_Query(array(
		'post_type'=>'home',
		'post_per_page' => 1
		));
		if($home->have_posts()): while($home->have_posts()):$home->the_post();
		?>
        <div class="d-flex justify-content-center title"><?php the_title(); ?></div>
        <div class="text-center text-white-center center">
            <div class="d-flex justify-content-center" style="margin-left: 25%;">
                <p> <?php the_field('detail'); ?></p>
            </div>
        </div >
        <?php  endwhile; endif;
        wp_reset_query();
        ?>

        <div class="d-flex justify-content-center button-down"  >
            <a href="#info">
                <div class="down_icon element">
                </div>
            </a>
        </div>

    </div>

<!--&lt;!&ndash;END HEDER&ndash;&gt;

&lt;!&ndash;Informatio&ndash;&gt;!-->
<?php $saga = new WP_Query(array(
    'post_type'=>'saga',
    'post_per_page' => 1
));
if($saga->have_posts()): while($saga->have_posts()):$saga->the_post();
    ?>
    <div class="divPadding" id="info">
         <div class="saga" id="block1">
             <p class="text-title"><?php the_title();  ?></p>
                 <div class="div-hrSAGA">
                     <hr class="hr-long" />
                 </div>
                 <div class="text-left-detail">
                     <p class="text-center-detail">
                         <?php the_field('readLess'); ?>
                         <span id="dots">...</span>
                         <span id="more">
                              <?php the_field('readMore'); ?>
                         </span>
                     </p>
                 </div>
                 <div class="center">
                     <button class="btn border border-dark btn-read-more" id="btn_read_more" onclick="btn_read_more();">
                         <img src="<?php echo get_template_directory_uri() ?>/images/cap.png">
                         READ MORE
                     </button>
                 </div>
         </div>
        <div class="saga" id="block2">
            <div class="saga-img">
                <?php

                $image = get_field('img');
                if( !empty($image) ): ?>
                    <img src="<?php  echo $image['url']; ?>" class="rounded-circle img-SAGA" alt="Cinque Terre">


                <?php endif; ?>
                </div>
        </div>
    </div>
<?php  endwhile; endif;
wp_reset_query();
?>
<!--&lt;!&ndash;END INFOR&ndash;&gt;

&lt;!&ndash;THE CHARACTER&ndash;&gt;-->

    <div id="character" class="bg-character" >
        <div class="divPadding">
            <div class="d-flex justify-content-center title-bg" > THE CHARACTERS </div>
            <hr class="hr-long" />
            <hr class="hr-short"/>
            <div  class="d-flex justify-content-center text-center">
                <div class="owl-carousel owl-theme carousel" >

                    <?php $character = new WP_Query(array(
                        'post_type'=>'character',
                        'post_per_page' => 6
                    ));
                    if($character->have_posts()): while($character->have_posts()):$character->the_post();
                    ?>
                    <div class="item carousel-item-character">
                        <div class="item2" >
                            <div class="item-character">
                                <div class="d-flex justify-content-center">
                                    <div class="mediaImg">
                                        <img src="<?php   $image = get_field('img');  echo $image['url']; ?>"  class="rounded-circle img-character" >
                                    </div>
                                </div>
                                <p class="font-size-character"><?php the_field('name'); ?></p>

                                <p >Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <?php  endwhile; endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>


<!--
&lt;!&ndash;END THE CHARACTER&ndash;&gt;
&lt;!&ndash;THE CREW&ndash;&gt;
-->
<?php $crew = new WP_Query(array(
    'post_type'=>'crew',
    'post_per_page' => 1
));
if($crew->have_posts()): while($crew->have_posts()):$crew->the_post();
?>
  <div class="divPadding">
        <div id="crew" class="d-flex justify-content-center text-title" > <?php the_title(); ?></div>
        <hr class="hr-long" />
        <hr class="hr-short"/>
        <div class="d-flex justify-content-center text-center padding-top"  >
            <p class="text-center-detail">
                <?php the_field('readLess'); ?>
                <span id="dots1">...</span>
                <span id="more1">
                    <?php the_field('readMore'); ?>
                    </span>
            </p>
        </div>
        <div class="d-flex justify-content-center text-center padding-top"  >
        <button class="btn border border-dark btn-read-more" id="btn_read_more1" onclick="btn_read_more1()">
            <img src="<?php echo get_template_directory_uri() ?>/images/cap.png">  READ MORE</button>
        </div>
    </div>
<?php  endwhile; endif;
wp_reset_query();
?>


    <div id="world" class="bg-novellas">
        <div class="divPadding">
            <div class="d-flex justify-content-center title-bg" > THE NOVELLAS </div>
            <hr class="hr-long" />
            <hr class="hr-short"/>
            <br>
            <div  class="d-flex justify-content-center ">
                <div class="owl-carousel owl-theme carousel" >
                    <?php $novellas = new WP_Query(array(
                        'post_type'=>'novellas',
                        'post_per_page' => 6
                    ));
                    if($novellas->have_posts()): while($novellas->have_posts()):$novellas->the_post();
                    ?>
                    <div class="item center">
                        <div class="item1 item-novellas-margin">
                            <button class="btn border border-dark btn-item-novellas"><?php the_title(); ?>: <?php the_field('detail'); ?></button>
                        </div>
                    </div>
                    <?php  endwhile; endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>

    </div>

<!--
&lt;!&ndash;END THE CREW&ndash;&gt;

&lt;!&ndash;SEE OUR WORLD&ndash;&gt;-->
<?php $see_our = new WP_Query(array(
		'post_type'=>'see_our',
		'post_per_page' => 1
		));
if($see_our->have_posts()): while($see_our->have_posts()):$see_our->the_post();
?>
    <div id="seeour" class="divPadding">
        <div class="d-flex justify-content-center text-title"><?php the_title() ?></div>
        <hr class="hr-long" />
        <hr class="hr-short"/>
        <div class="d-flex justify-content-center text-center">
            <p class="text-center-detail">
                <?php the_field('detail'); ?>
                </p>
        </div>
    </div>
<?php  endwhile; endif;
                    wp_reset_query();
                    ?>
<br>
<!--&lt;!&ndash;END SEE OUR WORLD&ndash;&gt;
<br>
&lt;!&ndash;FILTER BY TYPE&ndash;&gt;-->

    <div id="fiel" class="d-flex justify-content-center divPadding"  >
        <div class="filter">
            <div class="row">
                <div class="col-sm col-lg-6">
                    <h5>FILTER BY TYPE</h5>
                </div>
                <div class="col-sm col-lg-6" >
                    <ul class="nav nav-tabs float-right" >
                        <li class="active"><a class="a-black active" data-toggle="tab" href="#menu1">The Characters</a></li>
                        &nbsp;|&nbsp;
                        <li><a class="a-black" data-toggle="tab" href="#menu2">Conceptual Artwork</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="menu1" class="tab-pane active">
                  <!--  &lt;!&ndash; The Modal &ndash;&gt;-->
                   <div class="row">
                       <?php $img_character = new WP_Query(array(
                           'post_type'=>'img_character',
                           'posts_per_page' => 12,
                           'orderby'        => 'id',
                           'order'          => 'ASC',
                       ));

                       $i=0;
                       if($img_character->have_posts()): while($img_character->have_posts()):$img_character->the_post();
                        $i+=1;
                           $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
                           ?>
                       <div class="widthIMG "><img class="item3" id="myImg<?php echo $i; ?>"  src="<?php   echo $url; ?>"></div>
                       <?php  endwhile; endif;
                       wp_reset_query();
                       ?>

                       </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="row">
                        <?php $con_art = new WP_Query(array(
                            'post_type'=>'con_art',
                            'posts_per_page' => 12,
                            'orderby'        => 'id',
                            'order'          => 'DESC',
                        ));

                        $i=12;
                        if($con_art->have_posts()): while($con_art->have_posts()):$con_art->the_post();
                        $i+=1;
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
                        ?>
                        <div class="widthIMG "><img class="item3" id="myImg<?php echo $i;?>" src="<?php echo $url; ?>"></div>
                        <?php  endwhile; endif;
                        wp_reset_query();
                        ?>
                    </div>


                </div>
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                </div>
            </div>
        </div>
    </div>

<!--&lt;!&ndash;END FILTER BY TYPE&ndash;&gt;
<br><br>

&lt;!&ndash;BAZAAR&ndash;&gt;-->
<?php $bazaar = new WP_Query(array(
    'post_type'=>'bazaar',
    'posts_per_page' => 1,
    'orderby'        => 'id',
    'order'          => 'DESC',
));
if($bazaar->have_posts()): while($bazaar->have_posts()):$bazaar->the_post();
?>
    <div id="bazaar" class="bg-bazaar">
        <div class="divPadding">
            <div class="d-flex justify-content-center title-bg" >
                <?php the_title(); ?>
            </div>
            <hr class="hr-long" />
            <hr class="hr-short"/>
            <div class="d-flex justify-content-center text-center" >
                <p class="text-white-center" >
                <?php the_field('detail'); ?>
                </p>
            </div>
        </div>
    </div>
        <?php  endwhile; endif;
        wp_reset_query();
        ?>
  <!--
    &lt;!&ndash;END BARAZA&ndash;&gt;
    <br>
    <br>
    &lt;!&ndash;THE CONTRACT &ndash;&gt;
-->
        <div class="divPadding">
            <div  class="d-flex justify-content-center font-size-title">FEEL FREE TO &nbsp;<b>CONTRACT US</b> </div>
            <hr class="hr-long" />
            <hr class="hr-short"/>
            <div  class="d-flex justify-content-center text-center" >
                <p class="text-center-detail">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
            </div>
            <div id="content" class=" justify-content-center">
                <div class="padding-text width25" >
                    <p>Name <span class="color-red">*</span></p>
                    <input type="text" class="form-control" >
                </div>
                <div class="padding-text width25" >
                    <p>Address <span class="color-red">*</span></p>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="padding-none-top width50" >
                    <p>Message <span class="color-red">*</span></p>
                    <textarea class="text-area" rows="4" cols="50" name="comment">
                        </textarea>
                </div>
            </div>
            <div class=" marginSend" >
                <div class="padding-text" >
                        <button class="btn btn-send" >SEND</button>
                </div>
            </div>
        </div>

  <!--  &lt;!&ndash;THE END CONTRACT&ndash;&gt;-->
<div>
    <div class="bg-footer">
        <div class="row ">
            <div class="width50 text-center padding-footer">
                ALLRIGHTS RESVERVED. COPYRIGHT @ 2015 <b>THE CURSEBORN SAGA</b>
            </div>
            <div class="width50 text-center padding-footer">
                <img class="img-icon"  src="<?php echo get_template_directory_uri() ?>/images/icon/fb.png">
                <img class="img-icon" src="<?php echo get_template_directory_uri() ?>/images/icon/tw.png">
                <img class="img-icon" src="<?php echo get_template_directory_uri() ?>/images/icon/gg.png">
                <img class="img-icon" src="<?php echo get_template_directory_uri() ?>/images/icon/in.png">
                <img class="img-icon" src="<?php echo get_template_directory_uri() ?>/images/icon/icon.png">
            </div>
        </div>

    </div>
</div>


</body>
</html>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({

        nav:true,
        responsive:{
            300:{
                items:1
            },
            600:{
                items:1
            },
            1024:{
                items:2
            },
            1200:{
                items:4
            }
        }
    });


    //read more
    function btn_read_more() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("btn_read_more");
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = ' <img src="'+'<?php echo get_template_directory_uri() ?>'+'/images/cap.png">' +" READ MORE" ;
            document.getElementById("btn_read_more").className = "btn border border-dark btn-read-more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";

            btnText.innerHTML = ' <img src="'+'<?php echo get_template_directory_uri() ?>' +'/images/cap.png">' +" READ LESS" ;
            document.getElementById("btn_read_more").className = "btn border border-dark btn-read-more";
            moreText.style.display = "inline";
        }
    }

    function btn_read_more1() {

        var dots1 = document.getElementById("dots1");
        var moreText = document.getElementById("more1");
        var btnText = document.getElementById("btn_read_more1");
        if (dots1.style.display === "none") {
            dots1.style.display = "inline";
            btnText.innerHTML = ' <img src="'+'<?php echo get_template_directory_uri() ?>'+'/images/cap.png">' +" READ MORE" ;
            document.getElementById("btn_read_more").className = "btn border border-dark btn-read-more";
            moreText.style.display = "none";
        } else {
            dots1.style.display = "none";
            btnText.innerHTML = ' <img src="<?php echo get_template_directory_uri() ?>/images/cap.png">' +" READ LESS" ;
            document.getElementById("btn_read_more").className = "btn border border-dark btn-read-more";
            moreText.style.display = "inline";
        }
    }


    // Get the modal
    var modal = document.getElementById("myModal");
    for (var i=1;i<=24;i++)
    {
        var img = document.getElementById("myImg"+i);
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        };
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };
    }
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    //Get the button
    var mybutton = document.getElementById("myBtn");
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    // Add active class to the current
    var header = document.getElementById("home");
    var btns = header.getElementsByClassName("menu-nav");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active_menu");
            current[0].className = current[0].className.replace(" active_menu", "");
            this.className += " active_menu";
        });
    }

    var header1 = document.getElementById("fiel");
    var a = header.getElementsByClassName("a-black");
    for (var i = 0; i < a.length; i++) {
        a[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active_filter");
            current[0].className = current[0].className.replace(" active_filter", "");
            this.className += " active_filter";
        });
    }
</script>