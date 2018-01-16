<?php
declare(strict_types=1);

namespace Shoot\Shoot\Tests\Fixtures;

use Shoot\Shoot\Context;
use Shoot\Shoot\HasDataTrait;
use Shoot\Shoot\PresentationModel;
use Shoot\Shoot\PresenterInterface;

final class ItemPresenter implements PresenterInterface
{
    use HasDataTrait;

    /**
     * @param Context           $context
     * @param PresentationModel $presentationModel
     *
     * @return PresentationModel
     */
    public function present(Context $context, PresentationModel $presentationModel): PresentationModel
    {
        if (!$this->hasData($presentationModel)) {
            $presentationModel = $presentationModel->withVariables([
                'name' => 'item',
                'description' => 'description',
            ]);
        }

        return $presentationModel;
    }
}