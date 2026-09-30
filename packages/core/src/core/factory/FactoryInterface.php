<?php
/**
 * Created by MiToVa.
 * User: Mila
 * Date: 30/09/2026
 * Time: 14:11.
 */

declare(strict_types=1);

namespace Greenter\Factory;

use Greenter\Model\DocumentInterface;
use Greenter\Model\Response\BaseResult;

/**
 * Interface FactoryInterface.
 */
interface FactoryInterface
{
    /**
     * @param DocumentInterface $document
     *
     * @return BaseResult
     */
    public function send(DocumentInterface $document): ?BaseResult;
}
