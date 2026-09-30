<?php
/**
 * Created by MiToVa
 * User: Mila
 * Date: 30/09/2026
 * Time: 14:09
 */

declare(strict_types=1);

namespace Greenter\Builder;

use Greenter\Model\DocumentInterface;

/**
 * Interface BuilderInterface.
 */
interface BuilderInterface
{
    /**
     * Create file for document.
     *
     * @param DocumentInterface $document
     *
     * @return string|null Content File
     */
    public function build(DocumentInterface $document): ?string;
}
