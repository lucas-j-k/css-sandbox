<?php 
    //Load in the projects metadata from config.json
    $configJson = file_get_contents('config.json');
    $projectsData = json_decode($configJson, true);
?>



<ul class="project-feed">
    
    <?php foreach($projectsData['projects'] as $project){ ?>

        <li class="project-card">
            <a class="project-card__link" href="<?php echo $project['directory'] ?>">
                <div class="project-card__img-wrapper shadow-solid" style="background-image: url('<?php echo $project['thumbnail'] ?>')"></div>
                <h2 class="project-card__title font-title uppercase"><span><?php echo $project['title'] ?></span>
                    <span class="project-card__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.218 19l-1.782-1.75 5.25-5.25-5.25-5.25 1.782-1.75 6.968 7-6.968 7z"/></svg>
                    </span>
                </h2>
            </a>
        </li>
        

    <?php } ?>

</ul>