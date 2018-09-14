<?php
get_header();
?>
<div class="wrapper">
    <div class="row-fluid">
        <div class="span12">
            <section class="error-404 clearfix">
                <div class="left-col">
                    <p><?php _e('404', kopa_get_domain());?></p>
                </div><!--left-col-->
                <div class="right-col">
                    <h1><?php _e('Pagina niet gevonden...', kopa_get_domain());?></h1>
                    <p><?php _e("Deze pagina is niet gevonden. Kies één van de onderstaande opties om verder te gaan: ", kopa_get_domain());?></p>
                    <ul class="arrow-list">
                        <li><a href="javascript: history.go(-1);"><?php _e('Ga terug naar de vorige pagina', kopa_get_domain());?></a></li>
                        <li><a href="<?php echo home_url(); ?>"><?php _e('Ga naar de homepagina', kopa_get_domain());?></a></li>
                    </ul>
                </div><!--right-col-->
            </section><!--error-404-->
        </div><!--span12-->

    </div><!--row-fluid-->  

</div><!--wrapper-->

<?php
get_footer();
