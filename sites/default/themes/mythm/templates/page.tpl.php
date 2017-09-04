<div class="header">
	<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
	
	<?php print render($page['header']); ?>
</div>
<div class="content">
	<?php print render($page['content']); ?>
</div>
<div class="content_right">
	<?php print render($page['content_right']); ?>
</div>
<div class="footer"><?php print render($page['footer']); ?></div>