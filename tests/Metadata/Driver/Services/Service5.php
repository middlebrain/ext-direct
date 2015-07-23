<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 22.07.15
 * Time: 17:30
 */

namespace TQ\ExtDirect\Tests\Metadata\Driver\Services;

use TQ\ExtDirect\Annotation as Direct;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Service5
 *
 * @package TQ\ExtDirect\Tests\Metadata\Driver\Services
 *
 * @Direct\Action("app.direct.test")
 */
class Service5
{
    /**
     * @Direct\Method()
     * @Direct\Parameter("a", { @Assert\NotNull() })
     *
     * @param mixed $a
     */
    public function methodA($a)
    {
    }

    /**
     * @Direct\Method()
     * @Direct\Parameter("a", constraints={ @Assert\NotNull() })
     *
     * @param mixed $a
     */
    public function methodB($a)
    {
    }

    /**
     * @Direct\Method()
     * @Direct\Parameter(name="a", constraints={ @Assert\NotNull() })
     *
     * @param mixed $a
     */
    public function methodC($a)
    {
    }
}