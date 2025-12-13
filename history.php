<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $translations->$lang_current->pages->history->meta_desc; ?>">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body--history">
        <!-- Nav menu -->
        <?php require('navbar.php'); ?>
        
        <!-- Main page ontent -->
        <main class="history-main">

            <!-- Partie intro -->
            <div class="history-main__history-sec-intro history-sec-intro">
                <!-- Intro -->
                <div class="history-sec-intro__intro intro">
                    <h2 class="intro__title"><?php echo $translations->$lang_current->pages->history->title; ?></h2>
                    <h3 class="intro__subtitle"><?php echo $translations->$lang_current->pages->history->subtitle; ?></h3>
                </div>
                <div class="history-sec-intro__buttons buttons">
                    <a class="buttons__a-button a-button" href="#history-of-brainrots"><?php echo $translations->$lang_current->pages->history->learn_more; ?></a>
                    <a class="buttons__a-button a-button a-button--transparent" href="roster.php"><?php echo $translations->$lang_current->pages->history->browse; ?></a>
                </div>
            </div>

            <!-- History section -->
            <article id="history-of-brainrots" class="history-main__history-sec-history history-sec-history">
                <!-- Section 1 : Title & paragraph -->
                <div class="history-sec-history__section section section--1">
                    <h2 class="section__title">History of Brainrots</h2>
                    <p class="section__paragraph paragraph paragraph--large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sagittis sem lorem, in vehicula nisi aliquet quis. Phasellus eu lectus in neque varius euismod. Vestibulum et mollis purus, sed fringilla dolor. Donec sed pretium orci. Morbi pulvinar lacus vitae velit imperdiet accumsan. Praesent lectus eros, finibus posuere rhoncus tincidunt, imperdiet id odio. Vestibulum dui nulla, venenatis placerat fermentum non, fermentum eget arcu.</p>
                </div>  

                <!-- Section 2 : Image & description -->
                <div class="history-sec-history__section section section--2">
                    <img class="image section__image" src="assets/images/misc/strawberry_elephant.avif" alt="Image of blablabla" loading="lazy">
                    <p class="section__paragraph paragraph paragraph--tiny">Suspendisse pretium consectetur nulla. Integer bibendum quam nulla. Etiam elit ipsum, egestas non volutpat posuere, fringilla ut nulla. Nullam enim tortor, hendrerit sed ultricies sit amet, commodo nec ex. Phasellus viverra elit urna, at mollis purus semper nec. Maecenas posuere gravida nunc, id elementum mauris molestie dapibus. In hac habitasse platea dictumst. Mauris tristique nibh quis maximus laoreet. Nam luctus rutrum quam non lacinia. In viverra pellentesque egestas. Cras luctus elementum lacus, eget porta odio ultrices eu. Suspendisse potenti. Mauris molestie eros enim, ac mollis neque pharetra a. Morbi a lacus feugiat, lobortis urna a, maximus est. Vivamus vitae faucibus tortor, venenatis elementum mi. Morbi eu mi elit.</p>
                    <img class="image section__image" src="assets/images/misc/smurf_cat.avif" alt="Image of blablabla" loading="lazy">
                </div>

                <!-- Section 3 : Image & conclusion -->
                <div class="history-sec-history__section section section--3">
                    <p class="section__paragraph paragraph paragraph--medium">Nullam tincidunt porta feugiat. In hac habitasse platea dictumst. Vivamus tempor eget mi nec fringilla. Donec libero ex, tristique ut rhoncus eget, laoreet ut metus. Pellentesque neque lacus, luctus nec arcu sed, semper pellentesque tellus. Sed ultrices tortor sit amet nibh lobortis, vel eleifend risus malesuada. Vivamus porttitor condimentum aliquam. Suspendisse vel magna ut augue luctus tincidunt ac et tortor.</p>
                    <img class="image section__image" src="assets/images/misc/tralalero_tralala.avif" alt="Another image of blablabla" loading="lazy">
                </div>

                <!-- Section 4 : Youtube video & text -->
                <div class="history-sec-history__section section section--4">
                    <a class="link-youtube" href="https://youtu.be/fIhUqswc4c4?si=FtBJWkGZG4z0cs-L" target="blank">
                        <img class="image section__image image-youtube" src="https://i.ytimg.com/vi/fIhUqswc4c4/sddefault.jpg" alt="Placeholder, needs to be replaced by a video" loading="lazy">

                        <svg width="100" height="100" viewBox="0 0 2 2" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="red" d="M1.839.579a.22.22 0 0 0-.154-.154C1.548.389 1 .389 1 .389s-.548 0-.685.036a.22.22 0 0 0-.154.154C.125.716.125 1 .125 1s0 .285.036.421c.02.075.079.134.154.154.137.036.685.036.685.036s.548 0 .685-.036a.22.22 0 0 0 .154-.154c.036-.137.036-.421.036-.421s0-.284-.036-.421"/><path fill="#fff" d="m.824 1.264.456-.262L.824.738z"/></svg>

                        <h3 class="section__paragraph paragraph paragraph--medium">BRAINROT MEME (2025-2060) : Offical Music</h3>   
                    </a>

                    
                    
                    <p class="section__paragraph paragraph paragraph--medium">Nullam tincidunt porta feugiat. In hac habitasse platea dictumst. Vivamus tempor eget mi nec fringilla. Donec libero ex, tristique ut rhoncus eget, laoreet ut metus. Pellentesque neque lacus, luctus nec arcu sed, semper pellentesque tellus. Sed ultrices tortor sit amet nibh lobortis, vel eleifend risus malesuada. Vivamus porttitor condimentum aliquam. Suspendisse vel magna ut augue luctus tincidunt ac et tortor.</p>
                </div>

                <!-- Section 4 : Back top top page -->
                <div class="history-sec-history__section section section--5">
                    <a class="buttons__a-button a-button" href="#"><?php echo $translations->$lang_current->pages->history->back_to_top; ?></a>
                </div>


                <!--
                <div class="history-sec-history__section section section--4"><a href="https://youtu.be/fIhUqswc4c4?si=UdE9GmRPT08Cp0t6" target="blank">
                    <img src="https://i.ytimg.com/vi/fIhUqswc4c4/sddefault.jpg" alt="" loading="lazy">
                    <svg width="100" height="100" viewBox="0 0 2 2" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="red" d="M1.839.579a.22.22 0 0 0-.154-.154C1.548.389 1 .389 1 .389s-.548 0-.685.036a.22.22 0 0 0-.154.154C.125.716.125 1 .125 1s0 .285.036.421c.02.075.079.134.154.154.137.036.685.036.685.036s.548 0 .685-.036a.22.22 0 0 0 .154-.154c.036-.137.036-.421.036-.421s0-.284-.036-.421"/><path fill="#fff" d="m.824 1.264.456-.262L.824.738z"/></svg>
                </a></div>
                -->

            </article>
        </main>
    <!-- Load background color changing script -->
    <script src="js/script-bg.js"></script>
    </body>
</html>