<?php namespace Falbar\NovaFieldSystemFile\Field;

/**
 * Class File
 * @package Falbar\NovaFieldSystemFile\Field
 */
class File extends Media
{
    /* @inheritDoc */
    public $meta = ['type' => 'file'];

    protected array $arDefaultRuleList = [];
}
