<?php

declare(strict_types=1);

use Nette\Forms\Form;
use function PHPStan\Testing\assertType;


$form = new Form;

$input = $form->addText('text');
assertType('string|null', $input->getValue());

$input = $form->addPassword('password');
assertType('string|null', $input->getValue());

$input = $form->addTextArea('textArea');
assertType('string|null', $input->getValue());

$input = $form->addEmail('email');
assertType('string|null', $input->getValue());

$input = $form->addInteger('integer');
assertType('int|null', $input->getValue());

$input = $form->addFloat('float');
assertType('float|null', $input->getValue());

$input = $form->addDate('date');
assertType('DateTimeInterface|string|int|null', $input->getValue());

$input = $form->addTime('time');
assertType('DateTimeInterface|string|int|null', $input->getValue());

$input = $form->addDateTime('dateTime');
assertType('DateTimeInterface|string|int|null', $input->getValue());

$input = $form->addUpload('upload');
assertType('array<Nette\Http\FileUpload>|Nette\Http\FileUpload|null', $input->getValue());

$input = $form->addMultiUpload('multiUpload');
assertType('array<Nette\Http\FileUpload>|Nette\Http\FileUpload|null', $input->getValue());

$input = $form->addHidden('hidden');
assertType('string|null', $input->getValue());

$input = $form->addCheckbox('checkbox');
assertType('bool|null', $input->getValue());

$input = $form->addRadioList('radioList');
assertType('int|string|null', $input->getValue());

$input = $form->addCheckboxList('checkboxList');
assertType('array<(int|string)>', $input->getValue());

$input = $form->addSelect('select');
assertType('int|string|null', $input->getValue());

$input = $form->addMultiSelect('multiSelect');
assertType('array<(int|string)>', $input->getValue());

$input = $form->addColor('color');
assertType('string|null', $input->getValue());

$input = $form->addSubmit('submit');
assertType('string|null', $input->getValue());

$input = $form->addButton('button');
assertType('string|null', $input->getValue());

$input = $form->addImageButton('imageButton');
assertType('array|null', $input->getValue());

$input = $form->addImage('image');
assertType('array|null', $input->getValue());
