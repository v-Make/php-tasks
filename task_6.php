<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    <style>
        .banned {
            opacity: .4;
        }
    </style>
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <?php
            /*                            $people=[
                                            [
                                            "image" => "img/demo/authors/sunny.png",
                                            "image_alt" => "Sunny A.",
                                            "name" => "Sunny A. (UI/UX Expert)",
                                            "job_title" => "Lead Author",
                                            "twitter_link_href" => "https://twitter.com/@myplaneticket",
                                            "twitter_link_text" => "@myplaneticket",
                                            "email_link_href" => "https://wrapbootstrap.com/user/myorange",
                                            "email_link_text" => '<i class="fal fa-envelope"></i>',
                                            "email_link_title" => "Contact Sunny",
                                            "status" => "active"
                                            ],
                                            [
                                            "image" => "img/demo/authors/josh.png",
                                            "image_alt" => "Jos K.",
                                            "name" => "Jos K. (ASP.NET Developer)",
                                            "job_title" => "Partner &amp; Contributor",
                                            "twitter_link_href" => "https://twitter.com/@atlantez",
                                            "twitter_link_text" => "@atlantez",
                                            "email_link_href" => "https://wrapbootstrap.com/user/Walapa",
                                            "email_link_text" => '<i class="fal fa-envelope"></i>',
                                            "email_link_title" => "Contact Jos",
                                            "status" => "active"
                                            ],
                                            [
                                            "image" => "img/demo/authors/jovanni.png",
                                            "image_alt" => "Jovanni Lo",
                                            "name" => "Jovanni L. (PHP Developer)",
                                            "job_title" => "Partner &amp; Contributor",
                                            "twitter_link_href" => "https://twitter.com/@lodev09",
                                            "twitter_link_text" => "@lodev09",
                                            "email_link_href" => "https://wrapbootstrap.com/user/lodev09",
                                            "email_link_text" => '<i class="fal fa-envelope"></i>',
                                            "email_link_title" => "Contact Jovanni",
                                            "status" => "banned"
                                            ],
                                            [
                                            "image" => "img/demo/authors/roberto.png",
                                            "image_alt" => "Roberto Ro",
                                            "name" => "Roberto R. (Rails Developer)",
                                            "job_title" => "Partner &amp; Contributor",
                                            "twitter_link_href" => "https://twitter.com/@sildur",
                                            "twitter_link_text" => "@sildur",
                                            "email_link_href" => "https://wrapbootstrap.com/user/sildur",
                                            "email_link_text" => '<i class="fal fa-envelope"></i>',
                                            "email_link_title" => "Contact Roberto",
                                            "status" => "banned"
                                            ],
                                        ];*/

                                        $pdo= new PDO("mysql:host=localhost;dbname=my_project","root","");
                                        $sql="SELECT*FROM people";
                                        $statement=$pdo->prepare($sql);
                                        $statement->execute();
                                        $people=$statement->fetchAll(PDO::FETCH_ASSOC);

                                        ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                           <?php foreach($people as $person):?>
                            <div class="<?php echo $person['status']=='banned'?'banned':''?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $person['image']?>" alt="<?php echo $person['image_alt']?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo $person['name']?>
                                        <small class="m-0 fw-300">
                                            <?php echo $person['job_title']?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo $person['twitter_link_href']?>" class="text-info fs-sm" target="_blank"><?php echo $person['twitter_link_text']?></a> -
                                    <a href="<?php echo $person['email_link_href']?>" class="text-info fs-sm" target="_blank" title="<?php echo $person['email_link_title']?>"><?php echo $person['email_link_text']?></a>
                                </div>
                            </div>
                            <?php endforeach;?>
                           </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
