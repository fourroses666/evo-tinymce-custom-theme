<?php
/*
 * All available config-params of TinyMCE4
 * https://www.tinymce.com/docs/configure/
 *
 * Belows default configuration setup assures all editor-params have a fallback-value, and type per key is known
 * $this->set( $editorParam, $value, $type, $emptyAllowed=false )
 *
 * $editorParam     = param to set
 * $value           = value to set
 * $type            = string, number, bool, json (array or string)
 * $emptyAllowed    = true, false (allows param:'' instead of falling back to default)
 * If $editorParam is empty and $emptyAllowed is true, $defaultValue will be ignored
 *
 * $this->modxParams holds an array of actual Modx- / user-settings
 *
 * */

$this->set('plugins', 'anchor advlist autolink lists modxlink image charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen spellchecker insertdatetime media nonbreaking save table contextmenu directionality emoticons paste textcolor codesample colorpicker textpattern imagetools paste youtube', 'string');
$this->set('toolbar1', 'undo redo | bold italic underline strikethrough | copy paste | searchreplace | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent', 'string');
$this->set('toolbar2', 'styleselect formatselect link unlink image media table | hr removeformat | charmap | nonbreaking | preview fullscreen code', 'string');