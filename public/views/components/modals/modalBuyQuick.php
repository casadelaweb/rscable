<?php namespace App; ?>

<div class="modalFeedback" data-modal="buy-quick">
  <button class="modalFeedbackClose" type="button" data-modal-close>
    <span class="iconfont icon-close"></span>
  </button>
  <div class="modalFeedbackForm">
    <?php Render::component('forms/formFeedback', [
      'title' => 'Оставьте заявку на обратную связь',
      'description' => 'Оптовая компания "РОСКАБ" специализируется на поставках с минимальным заказом в 100 000 ₽.',
      'inputs' => [
        [
          'label' => 'Контактное лицо',
          'isRequired' => true,
          'validationSchemes' => 'human_name',
          'placeholder' => 'Имя и Фамилия',
          'errorText' => 'Это обязательное поле',
        ],
        [
          'label' => 'Телефон',
          'isRequired' => true,
          'validationSchemes' => 'tel',
          'placeholder' => '+7-xxx-xxx-xx-xx',
          'errorText' => 'Введите номер телефона в формате +7-xxx-xxx-xx-xx',
        ],
        [
          'label' => 'ИНН',
          'isRequired' => true,
          'validationSchemes' => 'inn',
          'placeholder' => 'Например, 777666555444',
          'errorText' => 'ИНН должен содержать 10 или 12 арабских цифр',
        ],
        [
          'label' => 'Email',
          'isRequired' => false,
          'validationSchemes' => 'email',
          'placeholder' => 'name@site.tu',
          'errorText' => '',
        ],
        [
          'label' => 'Интересующий товар',
          'isRequired' => false,
          'validationSchemes' => 'not_empty',
          'placeholder' => '',
          'errorText' => '',
        ],
        [
          'label' => 'Комментарий',
          'isRequired' => false,
          'validationSchemes' => 'not_empty',
          'placeholder' => '',
          'errorText' => '',
        ],
      ],
    ]) ?>
  </div>
</div>
<div class="modalFeedbackOverlay" data-modal-overlay="buy-quick"></div>
