<?php

namespace Yalesov\Vcard\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * KindValue
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class KindValue extends EntityRepository
{
    const DEF           = 'individual';

    const INDIVIDUAL    = 'individual';
    const GROUP         = 'group';
    const ORG           = 'org';
    const ORGANIZATION  = 'org'; // alias
    const LOCATION      = 'location';
}