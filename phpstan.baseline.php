<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$messages on array\\|object\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsDI/FormsExtension.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$name on Latte\\\\Compiler\\\\Nodes\\\\Html\\\\ElementNode\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/FormsExtension.php',
];
$ignoreErrors[] = [
	// identifier: foreach.nonIterable
	'message' => '#^Argument of an invalid type array\\<Latte\\\\Compiler\\\\Nodes\\\\AreaNode\\>\\|null supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FieldNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$content on Latte\\\\Compiler\\\\Nodes\\\\Html\\\\ElementNode\\|null\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FieldNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$name on Latte\\\\Compiler\\\\Nodes\\\\Html\\\\ElementNode\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FieldNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Nodes\\\\FieldNNameNode\\:\\:findUsedAttributes\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FieldNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Nodes\\\\FieldNNameNode\\:\\:init\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FieldNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$el of static method Nette\\\\Bridges\\\\FormsLatte\\\\Nodes\\\\FieldNNameNode\\:\\:findUsedAttributes\\(\\) expects Latte\\\\Compiler\\\\Nodes\\\\Html\\\\ElementNode, Latte\\\\Compiler\\\\Nodes\\\\Html\\\\ElementNode\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FieldNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Nodes\\\\FormContainerNode\\:\\:create\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormContainerNode.php',
];
$ignoreErrors[] = [
	// identifier: new.static
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormContainerNode.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$content on Latte\\\\Compiler\\\\Nodes\\\\Html\\\\ElementNode\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Nodes\\\\FormNNameNode\\:\\:init\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$children of class Latte\\\\Compiler\\\\Nodes\\\\FragmentNode constructor expects array\\<Latte\\\\Compiler\\\\Nodes\\\\AreaNode\\>, array\\<int, Latte\\\\Compiler\\\\Nodes\\\\AreaNode\\|null\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$el of static method Nette\\\\Bridges\\\\FormsLatte\\\\Nodes\\\\FieldNNameNode\\:\\:findUsedAttributes\\(\\) expects Latte\\\\Compiler\\\\Nodes\\\\Html\\\\ElementNode, Latte\\\\Compiler\\\\Nodes\\\\Html\\\\ElementNode\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormNNameNode.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Nodes\\\\FormNode\\:\\:create\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/FormNode.php',
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
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Nodes\\\\LabelNode\\:\\:create\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/LabelNode.php',
];
$ignoreErrors[] = [
	// identifier: new.static
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Nodes/LabelNode.php',
];
$ignoreErrors[] = [
	// identifier: foreach.nonIterable
	'message' => '#^Argument of an invalid type array\\<int, string\\>\\|false supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Runtime.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Runtime\\:\\:item\\(\\) has parameter \\$global with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Runtime.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Runtime\\:\\:item\\(\\) has parameter \\$item with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Runtime.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Bridges\\\\FormsLatte\\\\Runtime\\:\\:renderFormBegin\\(\\) has parameter \\$attrs with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Bridges/FormsLatte/Runtime.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method class@anonymous/src/Forms/Blueprint\\.php\\:90\\:\\:receiveHttpData\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Blueprint.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$search of function str_replace expects array\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Blueprint.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$string of function ucwords expects string, int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Blueprint.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\|string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Blueprint.php',
];
$ignoreErrors[] = [
	// identifier: missingType.property
	'message' => '#^Property class@anonymous/src/Forms/Blueprint\\.php\\:98\\:\\:\\$inner has no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Blueprint.php',
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
	// identifier: offsetAssign.dimType
	'message' => '#^Cannot assign offset int\\|string to Nette\\\\Forms\\\\Container\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:__call\\(\\) has parameter \\$args with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:addCheckboxList\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:addHidden\\(\\) has parameter \\$default with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:addMultiSelect\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:addRadioList\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:addSelect\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:extensionMethod\\(\\) has parameter \\$callback with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:getErrors\\(\\) return type has no value type specified in iterable type array\\.$#',
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
	// identifier: missingType.return
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:getUnsafeValues\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:getUnsafeValues\\(\\) has parameter \\$controls with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:getUnsafeValues\\(\\) has parameter \\$returnType with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:getUntrustedValues\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:getValues\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:setDefaults\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Container\\:\\:setValues\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
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
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$label of class Nette\\\\Forms\\\\Controls\\\\DateTimeControl constructor expects string\\|Stringable\\|null, object\\|string\\|null given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$objectOrClass of class ReflectionClass constructor expects class\\-string\\<T of object\\>\\|T of object, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Container.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$returnType of method Nette\\\\Forms\\\\Container\\:\\:getUntrustedValues\\(\\) expects object\\|string\\|null, object\\|string\\|false\\|null given\\.$#',
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
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Control\\:\\:getErrors\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Control.php',
];
$ignoreErrors[] = [
	// identifier: method.notFound
	'message' => '#^Call to an undefined method object\\:\\:getForm\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/ControlGroup.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\ControlGroup\\:\\:add\\(\\) has parameter \\$items with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/ControlGroup.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\ControlGroup\\:\\:getControls\\(\\) should return array\\<Nette\\\\Forms\\\\Control\\> but returns array\\<int\\<0, max\\>, object\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/ControlGroup.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\ControlGroup\\:\\:getOptions\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/ControlGroup.php',
];
$ignoreErrors[] = [
	// identifier: missingType.generics
	'message' => '#^Property Nette\\\\Forms\\\\ControlGroup\\:\\:\\$controls with generic class WeakMap does not specify its types\\: TKey, TValue$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/ControlGroup.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\ControlGroup\\:\\:\\$options type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/ControlGroup.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method getHttpData\\(\\) on Nette\\\\Forms\\\\Form\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method getName\\(\\) on Nette\\\\Forms\\\\Form\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method getTranslator\\(\\) on Nette\\\\Forms\\\\Form\\|null\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:__call\\(\\) has parameter \\$args with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addCondition\\(\\) has parameter \\$validator with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addCondition\\(\\) has parameter \\$value with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addConditionOn\\(\\) has parameter \\$validator with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:addConditionOn\\(\\) has parameter \\$value with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:extensionMethod\\(\\) has parameter \\$callback with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getControlPart\\(\\) should return Nette\\\\Utils\\\\Html\\|null but returns Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getErrors\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getForm\\(\\) should return Nette\\\\Forms\\\\Form\\|null but returns Nette\\\\ComponentModel\\\\IComponent\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getHttpData\\(\\) has parameter \\$type with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getLabelPart\\(\\) should return Nette\\\\Utils\\\\Html\\|null but returns Nette\\\\Utils\\\\Html\\|string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getOption\\(\\) has parameter \\$key with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getOptions\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:getTranslator\\(\\) should return Nette\\\\Localization\\\\Translator\\|null but returns Nette\\\\Localization\\\\Translator\\|false\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:setDefaultValue\\(\\) has parameter \\$value with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:setOption\\(\\) has parameter \\$key with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:translate\\(\\) has parameter \\$value with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:\\$caption \\(string\\|Stringable\\) does not accept string\\|Stringable\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:\\$errors type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:\\$options type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/BaseControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\Button\\:\\:getLabel\\(\\) has parameter \\$caption with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/Button.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method checked\\(\\) on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/Checkbox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\Checkbox\\:\\:getLabel\\(\\) has parameter \\$caption with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/Checkbox.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\Checkbox\\:\\:getLabelPart\\(\\) should return Nette\\\\Utils\\\\Html but returns Nette\\\\Utils\\\\Html\\|string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/Checkbox.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$attrs on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Controls/CheckboxList.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method addAttributes\\(\\) on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/CheckboxList.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method for\\(\\) on Nette\\\\Utils\\\\Html\\|string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/CheckboxList.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method getHttpData\\(\\) on Nette\\\\Forms\\\\Form\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/CheckboxList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\CheckboxList\\:\\:__construct\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/CheckboxList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\CheckboxList\\:\\:getControlPart\\(\\) has parameter \\$key with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/CheckboxList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\CheckboxList\\:\\:getLabel\\(\\) has parameter \\$caption with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/CheckboxList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\CheckboxList\\:\\:getLabelPart\\(\\) has parameter \\$key with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/CheckboxList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:__construct\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:__construct\\(\\) has parameter \\$label with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:getItems\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:setDisabled\\(\\) has parameter \\$value with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:setItems\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:\\$disabled \\(bool\\) does not accept array\\<true\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:\\$items type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method addAttributes\\(\\) on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ColorPicker.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\ColorPicker\\:\\:__construct\\(\\) has parameter \\$label with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/ColorPicker.php',
];
$ignoreErrors[] = [
	// identifier: classConstant.notFound
	'message' => '#^Access to undefined constant Nette\\\\Forms\\\\Controls\\\\DateTimeControl\\:\\:Date\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/DateTimeControl.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method addAttributes\\(\\) on Nette\\\\Utils\\\\Html\\|string\\.$#',
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
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\DateTimeControl\\:\\:getAttributesFromRules\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/DateTimeControl.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\DateTimeControl\\:\\:formatHtmlValue\\(\\) expects DateTimeInterface\\|int\\|string, bool\\|DateTimeInterface\\|float\\|int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/DateTimeControl.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method addError\\(\\) on Nette\\\\Forms\\\\Form\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/HiddenField.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\HiddenField\\:\\:__construct\\(\\) has parameter \\$persistentValue with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/HiddenField.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\HiddenField\\:\\:getLabel\\(\\) has parameter \\$caption with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/HiddenField.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:__construct\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:__construct\\(\\) has parameter \\$label with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:getItems\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:getRawValue\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:getSelectedItems\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:getValue\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:setDisabled\\(\\) has parameter \\$value with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:setItems\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\BaseControl\\:\\:\\$disabled \\(bool\\) does not accept array\\<true\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\MultiChoiceControl\\:\\:\\$items type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiChoiceControl.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$attrs on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiSelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiSelectBox\\:\\:__construct\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiSelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiSelectBox\\:\\:__construct\\(\\) has parameter \\$label with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiSelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiSelectBox\\:\\:addOptionAttributes\\(\\) has parameter \\$attributes with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiSelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiSelectBox\\:\\:getOptionAttributes\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiSelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\MultiSelectBox\\:\\:setItems\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiSelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\MultiSelectBox\\:\\:\\$optionAttributes type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiSelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\MultiSelectBox\\:\\:\\$options type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/MultiSelectBox.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$attrs on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Controls/RadioList.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$id on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/RadioList.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method addAttributes\\(\\) on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/RadioList.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method for\\(\\) on Nette\\\\Utils\\\\Html\\|string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/RadioList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\RadioList\\:\\:__construct\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/RadioList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\RadioList\\:\\:getControlPart\\(\\) has parameter \\$key with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/RadioList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\RadioList\\:\\:getLabel\\(\\) has parameter \\$caption with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/RadioList.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\RadioList\\:\\:getLabelPart\\(\\) has parameter \\$key with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/RadioList.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$attrs on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\SelectBox\\:\\:__construct\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\SelectBox\\:\\:__construct\\(\\) has parameter \\$label with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\SelectBox\\:\\:addOptionAttributes\\(\\) has parameter \\$attributes with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\SelectBox\\:\\:getOptionAttributes\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\SelectBox\\:\\:setItems\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\SelectBox\\:\\:\\$optionAttributes type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SelectBox.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\SelectBox\\:\\:\\$options type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SelectBox.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method isSubmitted\\(\\) on Nette\\\\Forms\\\\Form\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SubmitButton.php',
];
$ignoreErrors[] = [
	// identifier: method.nonObject
	'message' => '#^Cannot call method setSubmittedBy\\(\\) on Nette\\\\Forms\\\\Form\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SubmitButton.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\SubmitButton\\:\\:getControl\\(\\) has parameter \\$caption with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SubmitButton.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\SubmitButton\\:\\:getValidationScope\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SubmitButton.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\SubmitButton\\:\\:setValidationScope\\(\\) has parameter \\$scope with no value type specified in iterable type iterable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SubmitButton.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\SubmitButton\\:\\:\\$onClick type has no value type specified in iterable type array\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Controls/SubmitButton.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Controls\\\\SubmitButton\\:\\:\\$validationScope type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/SubmitButton.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$attrs on Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/TextBase.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Controls\\\\TextBase\\:\\:getControl\\(\\) should return Nette\\\\Utils\\\\Html but returns Nette\\\\Utils\\\\Html\\|string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Controls/TextBase.php',
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
	// identifier: missingType.return
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:beforeRender\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:getErrors\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:getHttpRequest\\(\\) should return Nette\\\\Http\\\\IRequest but returns Nette\\\\Http\\\\IRequest\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:getOwnErrors\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:getToggles\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:invokeHandlers\\(\\) has parameter \\$button with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:invokeHandlers\\(\\) has parameter \\$handlers with no value type specified in iterable type iterable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:receiveHttpData\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Form\\:\\:render\\(\\) has parameter \\$args with no type specified\\.$#',
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
	// identifier: argument.type
	'message' => '#^Parameter \\#3 \\$type of static method Nette\\\\Forms\\\\Helpers\\:\\:extractHttpData\\(\\) expects int, int\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Form\\:\\:\\$errors type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Form\\:\\:\\$httpData type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Form.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Form\\:\\:\\$httpRequest \\(Nette\\\\Http\\\\IRequest\\) does not accept Nette\\\\Http\\\\IRequest\\|null\\.$#',
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
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:createInputList\\(\\) has parameter \\$inputAttrs with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:createInputList\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:createInputList\\(\\) has parameter \\$labelAttrs with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:createInputList\\(\\) has parameter \\$wrapper with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:createSelectBox\\(\\) has parameter \\$items with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:createSelectBox\\(\\) has parameter \\$optionAttrs with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:createSelectBox\\(\\) has parameter \\$selected with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:exportRules\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:extractHttpData\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:extractHttpData\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:getSingleType\\(\\) has parameter \\$reflection with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:getSupportedImages\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:prepareAttrs\\(\\) has parameter \\$attrs with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:prepareAttrs\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:sanitize\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Helpers\\:\\:sanitize\\(\\) has parameter \\$value with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$s of static method Nette\\\\Utils\\\\Strings\\:\\:normalizeNewLines\\(\\) expects string, bool\\|float\\|int\\|string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$type of static method Nette\\\\Utils\\\\Image\\:\\:typeToMimeType\\(\\) expects 1\\|2\\|3\\|6\\|18\\|19, Nette\\\\Utils\\\\ImageType given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#3 \\$offset of function substr_replace expects array\\|int, int\\<0, max\\>\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Utils\\\\Html\\:\\:\\$attrs \\(array\\<string, mixed\\>\\) does not accept array\\<int\\|string, mixed\\>\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/src/Forms/Helpers.php',
];
$ignoreErrors[] = [
	// identifier: foreach.nonIterable
	'message' => '#^Argument of an invalid type array\\<int, string\\>\\|false supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
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
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Rendering\\\\DefaultFormRenderer\\:\\:doRenderErrors\\(\\) has parameter \\$errors with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rendering/DefaultFormRenderer.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Rendering\\\\DefaultFormRenderer\\:\\:\\$wrappers type has no value type specified in iterable type array\\.$#',
	'count' => 1,
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
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$branch on Nette\\\\Forms\\\\Rule\\|false\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$isNegative on Nette\\\\Forms\\\\Rule\\|false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: property.nonObject
	'message' => '#^Cannot access property \\$validator on Nette\\\\Forms\\\\Rule\\|false\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: clone.nonObject
	'message' => '#^Cannot clone Nette\\\\Forms\\\\Rule\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:addCondition\\(\\) has parameter \\$arg with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:addCondition\\(\\) has parameter \\$validator with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:addConditionOn\\(\\) has parameter \\$arg with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:addConditionOn\\(\\) has parameter \\$validator with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:addConditionOn\\(\\) should return Nette\\\\Forms\\\\Rules but returns Nette\\\\Forms\\\\Rules\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:getCallback\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:getToggleStates\\(\\) has parameter \\$toggles with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:getToggleStates\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Rules\\:\\:getToggles\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Rules\\:\\:\\$rules \\(array\\<Nette\\\\Forms\\\\Rule\\>\\) does not accept array\\<bool\\|Nette\\\\Forms\\\\Rule\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Rules\\:\\:\\$toggles type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Rules.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\SubmitterControl\\:\\:getValidationScope\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/SubmitterControl.php',
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
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:toArray\\(\\) has parameter \\$value with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:toArray\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateEqual\\(\\) has parameter \\$arg with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateFileSize\\(\\) has parameter \\$limit with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateLength\\(\\) has parameter \\$range with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateMax\\(\\) has parameter \\$maximum with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateMaxLength\\(\\) has parameter \\$length with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateMin\\(\\) has parameter \\$minimum with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateMinLength\\(\\) has parameter \\$length with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateNotEqual\\(\\) has parameter \\$arg with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method Nette\\\\Forms\\\\Validator\\:\\:validateRange\\(\\) has parameter \\$range with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Forms/Validator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Nette\\\\Forms\\\\Validator\\:\\:\\$messages type has no value type specified in iterable type array\\.$#',
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
	// identifier: missingType.parameter
	'message' => '#^Method MyControl\\:\\:getLabel\\(\\) has parameter \\$c with no type specified\\.$#',
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
	// identifier: missingType.parameter
	'message' => '#^Method MyControl\\:\\:getLabel\\(\\) has parameter \\$c with no type specified\\.$#',
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
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'age\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.values.array.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'second\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
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
	// identifier: missingType.return
	'message' => '#^Function hydrate\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.values.mapping-constructor.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Function hydrate\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.values.mapping-constructor.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method FormDataConstruct\\:\\:__construct\\(\\) has parameter \\$extra with no type specified\\.$#',
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
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'age\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.values.mapping.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'second\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.values.mapping.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Function hydrate\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Container.values.mapping.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'child\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/ControlGroup.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'inner\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/ControlGroup.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'street\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/tests/Forms/ControlGroup.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'text1\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/ControlGroup.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'text2\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/ControlGroup.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'town\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/tests/Forms/ControlGroup.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Function createContainer\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/ControlGroup.phpt',
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
	// identifier: missingType.parameter
	'message' => '#^Method class@anonymous/tests/Forms/Controls\\.BaseControl\\.phpt\\:157\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.BaseControl.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method class@anonymous/tests/Forms/Controls\\.BaseControl\\.phpt\\:157\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.BaseControl.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.Button.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.Button.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.Checkbox.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.Checkbox.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.CheckboxList.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.CheckboxList.render.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:setValue\\(\\) expects BackedEnum\\|int\\|string\\|null, Nette\\\\Utils\\\\DateTime given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Controls.ChoiceControl.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func expects callable\\(\\)\\: mixed, array\\{Nette\\\\Forms\\\\Controls\\\\CsrfProtection, \'Nette\\\\\\\\Forms…\'\\} given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/tests/Forms/Controls.CsrfProtection.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\DateTimeControl\\:\\:setValue\\(\\) expects DateTimeInterface\\|int\\|string\\|null, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.DateTimeControl.value.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'image\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.ImageButton.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.ImageButton.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.ImageButton.render.phpt',
];
$ignoreErrors[] = [
	// identifier: closure.unusedUse
	'message' => '#^Anonymous function has an unused use \\$series\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Controls.MultiSelectBox.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.MultiSelectBox.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.MultiSelectBox.render.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:setValue\\(\\) expects BackedEnum\\|int\\|string\\|null, Nette\\\\Utils\\\\DateTime given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/tests/Forms/Controls.RadioList.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.RadioList.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.RadioList.render.phpt',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of method Nette\\\\Forms\\\\Controls\\\\ChoiceControl\\:\\:setValue\\(\\) expects BackedEnum\\|int\\|string\\|null, Nette\\\\Utils\\\\DateTime given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.SelectBox.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.SelectBox.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.SelectBox.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.TextArea.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.TextArea.render.phpt',
];
$ignoreErrors[] = [
	// identifier: unaryOp.invalid
	'message' => '#^Unary operation "~" on mixed results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.TextBase.loadData.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.TextInput.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.TextInput.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.UploadControl.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$s with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.UploadControl.render.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method StringWrapper\\:\\:__construct\\(\\) has parameter \\$message with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.translate().phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$message with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.translate().phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.translate().phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.property
	'message' => '#^Property StringWrapper\\:\\:\\$message has no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Controls.translate().phpt',
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
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Container\\:\\:\\$onValidate \\(array\\<callable\\(Nette\\\\Forms\\\\Form, mixed\\)\\: void\\>\\) does not accept array\\{Closure\\(mixed, mixed\\)\\: void, Closure\\(mixed, array\\)\\: void, Closure\\(mixed, mixed\\)\\: void, Closure\\(mixed, mixed\\)\\: void, Closure\\(mixed, mixed\\)\\: void, Closure\\(mixed\\)\\: void, Closure\\(array\\)\\: void, Closure\\(Nette\\\\Forms\\\\Form\\)\\: void, \\.\\.\\.\\}\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.callbackParameters.phpt',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property Nette\\\\Forms\\\\Form\\:\\:\\$onSuccess \\(array\\<callable\\(Nette\\\\Forms\\\\Form, mixed\\)\\: void\\>\\) does not accept array\\{Closure\\(mixed, mixed\\)\\: void, Closure\\(mixed, array\\)\\: void, Closure\\(mixed, mixed\\)\\: void, Closure\\(mixed, mixed\\)\\: void, Closure\\(mixed, mixed\\)\\: void, Closure\\(mixed\\)\\: void, Closure\\(array\\)\\: void, Closure\\(Nette\\\\Forms\\\\Form\\)\\: void, \\.\\.\\.\\}\\.$#',
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
	// identifier: method.nonObject
	'message' => '#^Cannot call method addError\\(\\) on Nette\\\\Forms\\\\Form\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.onClick.phpt',
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
	// identifier: missingType.return
	'message' => '#^Function createContainer\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.5.phpt',
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
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$message with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.translate.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method Translator\\:\\:translate\\(\\) has parameter \\$parameters with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.renderer.translate.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property Translator\\:\\:\\$counter type has no value type specified in iterable type array\\.$#',
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
	// identifier: missingType.return
	'message' => '#^Function myValidator1\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.userValidator.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Function myValidator1\\(\\) has parameter \\$arg with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.userValidator.phpt',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Function myValidator1\\(\\) has parameter \\$item with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.userValidator.phpt',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'age\' on Nette\\\\ComponentModel\\\\IComponent\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/Forms/Forms.validationScope.phpt',
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
