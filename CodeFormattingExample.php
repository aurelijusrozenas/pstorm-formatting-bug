<?php
/**
 * @noinspection ALL
 *
 * The code below is formatted as it is expected. Use this for checking auto format. In different PhpStorm versions there different auto format bugs.
 * https://youtrack.jetbrains.com/issue/WI-65960
 */

function bar($x, $y, int $z = 1)
{
    $violations = $this
        ->getContextualValidator()
        ->validate($object, $classConstraint)
        ->getViolations()
    ;

    $finalQuery = $query
        ->where($query->getRootAlias().'.roles IN (:role)')
        ->setParameter('role', $role)
    ;

    $lastDownStartFormatted = (new DateTime())->setTimestamp($lastDownStart)->format('Y-m-d H:i:s');
}
