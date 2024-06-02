<?php namespace App;
/** @var string $title */
/** @var string $description */
/** @var array $inputs */
?>

<form class="formFeedback" data-form="form">

  <div class="formFeedbackLoader"></div>

  <h2 class="formFeedbackTitle">
    <?= $title ?>
  </h2>
  <div class="formFeedbackNote">
    <?= $description ?>
  </div>
  <div class="formFeedbackBody">
    <?php foreach ($inputs as $input) :
      $label = $input['label'];
      $isRequired = $input['isRequired'];
      $validationSchemes = $input['validationSchemes'];
      $placeholder = $input['placeholder'];
      $errorText = $input['errorText'];
      ?>
      <label class="formFeedbackField" data-form="field">
        <span class="formFeedbackFieldLabel">
          <span><?= $label ?></span>
          <?php if ($isRequired): ?>
            <span class="formFeedbackFieldLabelRequired">*</span>
          <?php endif; ?>
        </span>
        <input type="text"
               data-form="field-input"
               class="formFeedbackFieldInput"
               placeholder="<?= $placeholder ?>"
               data-validate="<?= $validationSchemes ?>"
          <?= $isRequired ? 'required' : '' ?> >
        <span class="formFeedbackFieldError" data-form="error">
          <?= $errorText ?>
        </span>
      </label>
    <?php endforeach; ?>
    <button class="formFeedbackSubmit" type="submit" data-form="submit">
      Отправить заявку
    </button>
  </div>
  <label class="formFeedbackNote">
    <input type="checkbox" required>
    Отправляя данную форму вы соглашаетесь с обработкой персональных данных и
    <a href="/privacy-policy/">
      политикой конфиденциальности
    </a>
  </label>
</form>

<script>

</script>
