<?php declare(strict_types=1);

require_once 'IdentifiableTrait.php';
require_once 'IdentifiableChapter4.php';
require_once 'IdentifiableTraitImposter.php';

/**
 * Class Song
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Song implements IdentifiableChapter4
{
    use IdentifiableTrait;
    use IdentifiableTraitImposter{
        IdentifiableTraitImposter::getHexId insteadof IdentifiableTrait;
        IdentifiableTrait::getHexId as getOriginalHexId;
    }

    private string $name;
    private int $id;

    public function getId(): string
    {
        return 'ID returned from the class';
    }

    public function getName(): string
    {
        return $this->name;
    }
}