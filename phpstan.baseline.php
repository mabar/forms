<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$messages on array\\|object\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsDI/FormsExtension.php',
];
$ignoreErrors[] = [
	// identifier: new.static
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormContainerNode.php',
];
$ignoreErrors[] = [
	// identifier: new.static
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormNode.php',
];
$ignoreErrors[] = [
	// identifier: new.static
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormPrintNode.php',
];
$ignoreErrors[] = [
	// identifier: new.static
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/InputErrorNode.php',
];
$ignoreErrors[] = [
	// identifier: new.static
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/InputNode.php',
];
$ignoreErrors[] = [
	// identifier: new.static
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/LabelNode.php',
];
$ignoreErrors[] = [
	// identifier: variable.undefined
	'message' => '#^Undefined variable\\: \\$bp$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Blueprint.php',
];
$ignoreErrors[] = [
	// identifier: arguments.count
	'message' => '#^Callable callable\\(static, mixed\\)\\: void invoked with 1 parameter, 2 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:getForm\\(\\) should return Nette\\\\Forms\\\\Form\\|null but returns Nette\\\\ComponentModel\\\\IComponent\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$ of callable callable\\(static, mixed\\)\\: void expects static\\(Nette\\\\Forms\\\\Container\\), array\\|object given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: identical.alwaysFalse
	'message' => '#^Strict comparison using \\=\\=\\= between \\*NEVER\\* and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: variable.undefined
	'message' => '#^Variable \\$values might not be defined\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getForm\\(\\) should return Nette\\\\Forms\\\\Form\\|null but returns Nette\\\\ComponentModel\\\\IComponent\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:\\$disabled \\(bool\\) does not accept array\\<true\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: classConstant.notFound
	'message' => '#^Access to undefined constant Nette\\\\Forms\\\\Controls\\\\DateTimeControl\\:\\:Date\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/DateTimeControl.php',
];
$ignoreErrors[] = [
	// identifier: match.unhandled
	'message' => '#^Match expression does not handle remaining values\\: int\\<min, 0\\>\\|int\\<4, max\\>$#',
	'count' => 4,
	'path' => __DIR__ . '/src/Forms/Controls/DateTimeControl.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:\\$disabled \\(bool\\) does not accept array\\<true\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:getRules\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:getParent\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$array of function array_key_first expects array, Iterator\\<int\\|string, Nette\\\\ComponentModel\\\\IComponent\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:getHtmlName\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$type of static method Nette\\\\Utils\\\\Image\\:\\:typeToMimeType\\(\\) expects 1\\|2\\|3\\|6\\|18\\|19, Nette\\\\Utils\\\\ImageType given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:getControl\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:getForm\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:getLabel\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:getOption\\(\\)\\.$#',
	'count' => 7,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:hasErrors\\(\\)\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:isRequired\\(\\)\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:setOption\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: variable.undefined
	'message' => '#^Variable \\$control might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: property.notFound
	'message' => '#^Access to an undefined property Nette\\\\Forms\\\\Control\\:\\:\\$name\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:addError\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:isFilled\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:getForm\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Control\\:\\:getName\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\HtmlStringable\\:\\:getText\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: if.alwaysFalse
	'message' => '#^If condition is always false\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/src/compatibility.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to method initialize\\(\\) on an unknown class Container1\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.DI/FormsExtension.phpt',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Instantiated class Container1 not found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.DI/FormsExtension.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Latte\\\\Engine\\:\\:getCompiler\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.button.phpt',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to static method install\\(\\) on an unknown class Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.button.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Latte\\\\Engine\\:\\:getCompiler\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.error.phpt',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to static method install\\(\\) on an unknown class Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.error.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Latte\\\\Engine\\:\\:getCompiler\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.formContainer.phpt',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to static method install\\(\\) on an unknown class Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.formContainer.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Latte\\\\Engine\\:\\:getCompiler\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.forms.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:addError\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.forms.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:getControlPrototype\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.forms.phpt',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to static method install\\(\\) on an unknown class Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.forms.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Latte\\\\Engine\\:\\:getCompiler\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.get.phpt',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to static method install\\(\\) on an unknown class Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte2/FormMacros.get.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:addError\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte3/forms.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:getControlPrototype\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms.Latte3/forms.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Controls\\\\Button\\:\\:test\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/BaseControl.extensionMethod.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Controls\\\\Checkbox\\:\\:test\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/BaseControl.extensionMethod.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Controls\\\\TextInput\\:\\:test\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/BaseControl.extensionMethod.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Forms\\\\Form\\:\\:test\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.extensionMethod.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:addError\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Container.validate().phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:getValues\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.values.array.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:setMappedType\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Container.values.mapping-constructor.phpt',
];
$ignoreErrors[] = [
	// identifier: constructor.unusedParameter
	'message' => '#^Constructor of class FormDataConstruct has an unused parameter \\$extra\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.values.mapping-constructor.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:setMappedType\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Container.values.mapping.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$control of method Nette\\\\Forms\\\\ControlGroup\\:\\:remove\\(\\) expects Nette\\\\Forms\\\\Control, Nette\\\\ComponentModel\\\\IComponent given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/ControlGroup.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:getValue\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Controls.BaseControl.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:isDisabled\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.BaseControl.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:setValue\\(\\) expects BackedEnum\\|int\\|string\\|null, Nette\\\\Utils\\\\DateTime given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Controls.ChoiceControl.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\DateTimeControl\\:\\:setValue\\(\\) expects DateTimeInterface\\|int\\|string\\|null, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.DateTimeControl.value.phpt',
];
$ignoreErrors[] = [
	// identifier: closure.unusedUse
	'message' => '#^Anonymous function has an unused use \\$series\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Controls.MultiSelectBox.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:setValue\\(\\) expects BackedEnum\\|int\\|string\\|null, Nette\\\\Utils\\\\DateTime given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Controls.RadioList.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:setValue\\(\\) expects BackedEnum\\|int\\|string\\|null, Nette\\\\Utils\\\\DateTime given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.SelectBox.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: unaryOp.invalid
	'message' => '#^Unary operation "~" on mixed results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.TextBase.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: property.notFound
	'message' => '#^Access to an undefined property Nette\\\\ComponentModel\\\\IComponent\\:\\:\\$onClick\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.callbackParameters.phpt',
];
$ignoreErrors[] = [
	// identifier: closure.unusedUse
	'message' => '#^Anonymous function has an unused use \\$types\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.callbackParameters.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:getValue\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.getHttpData.get.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:getValue\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.getHttpData.post.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:addError\\(\\)\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/tests/Forms/Forms.isValid.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:addError\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.onSuccess.phpt',
];
$ignoreErrors[] = [
	// identifier: arguments.count
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:__toString\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.1.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$control of method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addConditionOn\\(\\) expects Nette\\\\Forms\\\\Control, Nette\\\\ComponentModel\\\\IComponent given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.1.phpt',
];
$ignoreErrors[] = [
	// identifier: property.notFound
	'message' => '#^Access to an undefined property Nette\\\\Forms\\\\FormRenderer\\:\\:\\$wrappers\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.2.phpt',
];
$ignoreErrors[] = [
	// identifier: arguments.count
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:__toString\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.2.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$control of method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addConditionOn\\(\\) expects Nette\\\\Forms\\\\Control, Nette\\\\ComponentModel\\\\IComponent given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.2.phpt',
];
$ignoreErrors[] = [
	// identifier: arguments.count
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:__toString\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.4.phpt',
];
$ignoreErrors[] = [
	// identifier: arguments.count
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:__toString\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.5.phpt',
];
$ignoreErrors[] = [
	// identifier: arguments.count
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:__toString\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.6.phpt',
];
$ignoreErrors[] = [
	// identifier: property.notFound
	'message' => '#^Access to an undefined property Translator\\:\\:\\$counter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.translate.phpt',
];
$ignoreErrors[] = [
	// identifier: arguments.count
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:__toString\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.translate.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$control of method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addConditionOn\\(\\) expects Nette\\\\Forms\\\\Control, Nette\\\\ComponentModel\\\\IComponent given\\.$#',
	'count' => 25,
	'path' => __DIR__ . '/tests/Forms/Forms.toggle.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$control of method Nette\\\\Forms\\\\Rules\\:\\:addConditionOn\\(\\) expects Nette\\\\Forms\\\\Control, Nette\\\\ComponentModel\\\\IComponent given\\.$#',
	'count' => 25,
	'path' => __DIR__ . '/tests/Forms/Forms.toggle.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$by of method Nette\\\\Forms\\\\Form\\:\\:setSubmittedBy\\(\\) expects Nette\\\\Forms\\\\SubmitterControl\\|null, Nette\\\\ComponentModel\\\\IComponent given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.validationScope.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:getErrors\\(\\)\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/tests/Forms/Rules.formatMessage.phpt',
];
$ignoreErrors[] = [
	// identifier: arguments.count
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:__toString\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Rules.formatMessage.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$control of method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addConditionOn\\(\\) expects Nette\\\\Forms\\\\Control, Nette\\\\ComponentModel\\\\IComponent given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Rules.required.phpt',
];
$ignoreErrors[] = [
	// identifier: unaryOp.invalid
	'message' => '#^Unary operation "~" on mixed results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Rules.required.phpt',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\ComponentModel\\\\IComponent\\:\\:setValue\\(\\)\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/tests/Forms/Rules.valid.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$control of method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addConditionOn\\(\\) expects Nette\\\\Forms\\\\Control, Nette\\\\ComponentModel\\\\IComponent given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Rules.valid.phpt',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
