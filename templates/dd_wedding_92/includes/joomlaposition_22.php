<?php
function joomlaposition_22() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('position-18') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-18')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-18')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-22 clearfix" <?php echo buildDataPositionAttr('position-18'); ?>>
        <?php echo $view->position('position-18', 'block%joomlaposition_block_22', '22'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-18')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}