<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class OverflowColor extends AbstractTag
{

    protected $Id = 12;

    protected $Name = 'OverflowColor';

    protected $FullName = 'FLIR::PaletteInfo';

    protected $GroupName = 'FLIR';

    protected $g0 = 'APP1';

    protected $g1 = 'FLIR';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Overflow Color';

    protected $MaxLength = 3;

}
