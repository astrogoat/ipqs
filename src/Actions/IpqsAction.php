<?php

namespace Astrogoat\Ipqs\Actions;

use Helix\Lego\Apps\Actions\Action;

class IpqsAction extends Action
{
    public static function actionName(): string
    {
        return 'Ipqs action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
