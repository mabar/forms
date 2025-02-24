<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Forms\Controls;

use Nette;


/**
 * Choice control that allows multiple items selection.
 *
 * @property   array $items
 * @property-read array $selectedItems
 *
 * @extends BaseControl<array-key[]>
 */
abstract class MultiChoiceControl extends BaseControl
{
	private bool $checkDefaultValue = true;
	private array $items = [];


	public function __construct($label = null, ?array $items = null)
	{
		parent::__construct($label);
		if ($items !== null) {
			$this->setItems($items);
		}
	}


	public function loadHttpData(): void
	{
		$this->value = array_keys(array_flip($this->getHttpData(Nette\Forms\Form::DataText)));
		if (is_array($this->disabled)) {
			$this->value = array_diff($this->value, array_keys($this->disabled));
		}
	}


	/**
	 * Sets selected items (by keys).
	 * @internal
	 */
	public function setValue($values): static
	{
		if (is_scalar($values) || $values === null) {
			$values = (array) $values;
		} elseif (!is_array($values)) {
			throw new Nette\InvalidArgumentException(sprintf("Value must be array or null, %s given in field '%s'.", get_debug_type($values), $this->name));
		}

		$flip = [];
		foreach ($values as $value) {
			if ($value instanceof \BackedEnum) {
				$value = $value->value;
			} elseif (!is_scalar($value) && !$value instanceof \Stringable) {
				throw new Nette\InvalidArgumentException(sprintf("Values must be scalar, %s given in field '%s'.", get_debug_type($value), $this->name));
			}

			$flip[(string) $value] = true;
		}

		$values = array_keys($flip);
		if ($this->checkDefaultValue && ($diff = array_diff($values, array_keys($this->items)))) {
			$set = Nette\Utils\Strings::truncate(
				implode(', ', array_map(fn($s) => var_export($s, return: true), array_keys($this->items))),
				70,
				'...',
			);
			$vals = (count($diff) > 1 ? 's' : '') . " '" . implode("', '", $diff) . "'";
			throw new Nette\InvalidArgumentException("Value$vals are out of allowed set [$set] in field '{$this->name}'.");
		}

		$this->value = $values;
		return $this;
	}


	/**
	 * Returns selected keys.
	 * @return array-key[]
	 */
	public function getValue(): array
	{
		return array_values(array_intersect($this->value, array_keys($this->items)));
	}


	/**
	 * Returns selected keys (not checked).
	 */
	public function getRawValue(): array
	{
		return $this->value;
	}


	/**
	 * Is any item selected?
	 */
	public function isFilled(): bool
	{
		return $this->getValue() !== [];
	}


	/**
	 * Sets items from which to choose.
	 */
	public function setItems(array $items, bool $useKeys = true): static
	{
		$this->items = $useKeys ? $items : array_combine($items, $items);
		return $this;
	}


	/**
	 * Returns items from which to choose.
	 */
	public function getItems(): array
	{
		return $this->items;
	}


	/**
	 * Returns selected values.
	 */
	public function getSelectedItems(): array
	{
		return array_intersect_key($this->items, array_flip($this->value));
	}


	/**
	 * Disables or enables control or items.
	 */
	public function setDisabled(bool|array $value = true): static
	{
		if (!is_array($value)) {
			return parent::setDisabled($value);
		}

		parent::setDisabled(false);
		$this->disabled = array_fill_keys($value, value: true);
		$this->value = array_diff($this->value, $value);
		return $this;
	}


	/**
	 * Returns HTML name of control.
	 */
	public function getHtmlName(): string
	{
		return parent::getHtmlName() . '[]';
	}


	public function checkDefaultValue(bool $value = true): static
	{
		$this->checkDefaultValue = $value;
		return $this;
	}
}
