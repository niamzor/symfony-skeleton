<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class DefaultEntity
{
    /**
     * @Assert\AtLeastOneOf({
     *      @Assert\Blank,
     *      @Assert\Sequentially({
     *          @Assert\Type("numeric"),
     *          @Assert\AtLeastOneOf({
     *              @Assert\Length(min = 2, max = 2),
     *              @Assert\Length(min = 4, max = 4)
     *          })
     *      })
     * })
     */
    private string $prop;

    public function __construct(string $prop)
    {
        $this->prop = $prop;
    }
}
