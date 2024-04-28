<?php namespace App; ?>

<div class="modalFeedback" data-modal="feedback">
  <button class="modalFeedbackClose" type="button" data-modal-close>
    <span class="iconfont icon-close"></span>
  </button>
  <div class="modalFeedbackForm">
    <?php Render::component('forms/formFeedback') ?>
  </div>
</div>
<div class="modalFeedbackOverlay" data-modal-overlay="feedback"></div>
