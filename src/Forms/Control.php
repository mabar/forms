<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Forms;


/**
 * Defines method that must be implemented to allow a component to act like a form control.
 *
 * @template T_VALUE of mixed
 */
interface Control
{
	/**
	 * Sets control's value.
	 * @param T_VALUE $value
	 * @return static
	 */
	function setValue(mixed $value);

	/**
	 * Returns control's value.
	 * @return T_VALUE
	 */
	function getValue();

	function validate(): void;

	/**
	 * Returns errors corresponding to control.
	 */
	function getErrors(): array;

	/**
	 * Is control value excluded from $form->getValues() result?
	 */
	function isOmitted(): bool;
}


interface_exists(IControl::class);
