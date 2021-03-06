<?php
function joomlaposition_21() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-17') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-17')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-17')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-21 clearfix" <?php echo buildDataPositionAttr('position-17'); ?>>
        <?php echo $view->position('position-17', 'block%joomlaposition_block_21', '21'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-17')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}