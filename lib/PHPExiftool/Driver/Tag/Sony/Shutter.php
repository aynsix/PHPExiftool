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
class Shutter extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'Shutter';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Shutter';

    protected $flag_Permanent = true;

    protected $MaxLength = 3;

    protected $Values = array(
        '0 0 0' => array(
            'Id' => '0 0 0',
            'Label' => 'Silent / Electronic (0 0 0)',
        ),
    );

}
