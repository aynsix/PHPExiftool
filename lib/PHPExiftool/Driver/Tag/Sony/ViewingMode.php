<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ViewingMode extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'ViewingMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Viewing Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        16 => array(
            'Id' => 16,
            'Label' => 'ViewFinder',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Focus Check Live View',
        ),
        34 => array(
            'Id' => 34,
            'Label' => 'Quick AF Live View',
        ),
    );

}
