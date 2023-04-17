<section id="carousel">
    <div id="owl-carousel">
        
        <?php 
            foreach ($pages as $page):
                if ($page['page_id'] == 1): ?>
                    <div class="carousel-item" style="display: block;"><a href="#"><img src= <?=$page['page_link']?> alt=<?=$page['page_id']?>></a></div>
                <?php endif; ?>
                    <div class="carousel-item" style="display: none;"><a href="#"><img src=<?= $page['page_link']?> alt=<?=$page['page_id']?>></a></div>
            <?php endforeach;?>
        <a href="#" class="js-prev" onclick="minusSlides()"><span></span></a>
        <a href="#" class="js-next" onclick="plusSlides()"><span></span></a>
    </div>
</section>