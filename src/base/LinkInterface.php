<?php
namespace presseddigital\linkit\base;

use presseddigital\linkit\base\Link;

use Craft;
use craft\base\SavableComponentInterface;
use craft\base\ElementInterface;
use craft\base\FieldInterface;

interface LinkInterface extends SavableComponentInterface
{
    // Static
    // =========================================================================

    public static function group(): string;
    public static function groupTitle(): string;
    public static function defaultLabel(): string;
    public static function defaultPlaceholder(): string;
    public static function settingsTemplatePath(): string;
    public static function inputTemplatePath(): string;
    public static function hasSettings(): bool;
    public static function elementType();
    public static function hasElement(): bool;

    // Public Methods
    // =========================================================================

    public function __toString(): string;

    public function setOwnerElement(ElementInterface $element = null);
    public function getOwnerElement(): ElementInterface;

    public function setField(FieldInterface $field = null);
    public function getField(): FieldInterface;

    public function defaultSelectionLabel(): string;

    public function getLabel(): string;
    public function getSelectionLabel(): string;

    public function getInputHtml(string $name, $field, Link $currentLink = null): string;
    public function getSettingsHtml(): string;

    public function getType(): string;
    public function getTypeHandle(): string;

    public function getLink($raw = true);
    public function getUrl(): string;
    public function getText(): string;

    public function getLinkAttributes(): array;
    public function getTargetString(): string;

    public function isAvailable(): bool;
}
