<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$messages on array\\|object\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsDI/FormsExtension.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to constant PREFIX_NONE on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$content on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$empty on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$htmlNode on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$innerContent on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 7,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$modifiers on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$name on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$openingCode on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$prefix on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$replaced on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 8,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$startLine on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 13,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Access to property \\$tokenizer on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 14,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: classConstant.notFound
	'message' => '#^Access to undefined constant Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:AUTO_EMPTY\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:addMacro\\(\\)\\.$#',
	'count' => 9,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to method getNotation\\(\\) on an unknown class Latte\\\\MacroNode\\.$#',
	'count' => 13,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to method write\\(\\) on an unknown class Latte\\\\PhpWriter\\.$#',
	'count' => 14,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: new.noConstructor
	'message' => '#^Class Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros does not have a constructor and must be instantiated without any parameters\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$compiler of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:install\\(\\) has invalid type Latte\\\\Compiler\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroForm\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroFormContainer\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroFormContext\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroFormPrint\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroInput\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroInputError\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroLabel\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroLabelEnd\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroName\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroNameAttr\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$node of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroNameEnd\\(\\) has invalid type Latte\\\\MacroNode\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroForm\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroFormContainer\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroFormContext\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroFormPrint\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroInput\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroInputError\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroLabel\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroLabelEnd\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroName\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroNameAttr\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Parameter \\$writer of method Nette\\\\Bridges\\\\FormsLatte\\\\FormMacros\\:\\:macroNameEnd\\(\\) has invalid type Latte\\\\PhpWriter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormMacros.php',
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

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
