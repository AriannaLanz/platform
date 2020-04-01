<?php

/**
 * Repository for Form
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Core\Entity;

use Ushahidi\Core\Entity\Repository\EntityGet;
use Ushahidi\Core\Entity\Repository\EntityExists;

interface FormRepository extends
    EntityGet,
    EntityExists
{
    public function isTypeHidden($form_id, $type);

    /**
     * Get all form attributes and stages for the given forms
     *
     * @param $form_ids
     * @return Collection
     */
    public function getAllFormStagesAttributes(array $form_ids = []);
}
