<?php declare(strict_types=1);

require_once 'IdentifiableTrait.php';
require_once 'Identifiable.php';
require_once 'IdentifiableTraitImposter.php';

/**
 * Class Song
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Song implements Identifiable
{
    use IdentifiableTrait;
    use IdentifiableTraitImposter{
        IdentifiableTraitImposter::getHexId insteadof IdentifiableTrait;
        IdentifiableTrait::getHexId as getOriginalHexId;
    }

    public function getId(): string
    {
        return 'ID returned from class';
    }
}