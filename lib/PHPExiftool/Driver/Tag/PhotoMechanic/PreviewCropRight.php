<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PhotoMechanic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PreviewCropRight extends AbstractTag
{

    protected $Id = 238;

    protected $Name = 'PreviewCropRight';

    protected $FullName = 'PhotoMechanic::SoftEdit';

    protected $GroupName = 'PhotoMechanic';

    protected $g0 = 'PhotoMechanic';

    protected $g1 = 'PhotoMechanic';

    protected $g2 = 'Image';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Preview Crop Right';

}
