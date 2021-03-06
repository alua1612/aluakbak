<?php
function joomlaposition_26() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-21') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-21')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-21')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-26 clearfix" <?php echo buildDataPositionAttr('position-21'); ?>>
        <?php echo $view->position('position-21', 'block%joomlaposition_block_26', '26'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-21')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}