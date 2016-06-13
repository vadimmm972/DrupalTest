<div class="wrapper">
    <?php if($page['header']): ?>
        <div class="header">
             <?php print("<div class='active'>". render($page['header']))."</div>";?>
        </div>
    <?php endif;?>

    <div class="middle">
        <?php if($page['sidebar_first']): ?>
                <div class="left-panel">
                    <?php print render($page['sidebar_first']);?>
    
                </div>
            <?php endif;?>
    
    
    
            <?php if($page['content']): ?>
                <div class="main-content">
                    <?php print render($page['content']);?>
                </div>
            <?php endif;?>
        </div>

        <?php if($page['footer']): ?>
            <div class="footer">
                <?php print render($page['footer']);?>
            </div>
        <?php endif;?>
</div>
