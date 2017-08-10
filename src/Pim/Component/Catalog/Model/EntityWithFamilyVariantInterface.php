<?php

namespace Pim\Component\Catalog\Model;

use Doctrine\Common\Collections\Collection;

/**
 * All entities who can have a family variant must implement this interface,
 * eg. a product model or a variant product
 *
 * @author    Adrien Pétremann <adrien.petremann@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface EntityWithFamilyVariantInterface extends EntityWithValuesInterface
{
    public const ROOT_VARIATION_LEVEL = 0;

    /**
     * @return FamilyVariantInterface|null
     */
    public function getFamilyVariant(): ?FamilyVariantInterface;

    /**
     * @param FamilyVariantInterface $familyVariant
     */
    public function setFamilyVariant(FamilyVariantInterface $familyVariant): void;

    /**
     * Get the variation level of this entity, on a zero-based value.
     * For example, if this entity has 2 parents, it's on level 2.
     * If it has 0 parent, it's on level 0.
     *
     * @return int
     */
    public function getVariationLevel(): int;

    /**
     * @return ProductModelInterface|null
     */
    public function getParent(): ?ProductModelInterface;

    /**
     * @return Collection
     */
    public function getValuesForVariation(): Collection;
}
