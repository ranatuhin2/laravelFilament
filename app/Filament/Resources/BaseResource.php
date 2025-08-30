<?php
declare(strict_types=1);

namespace App\Filament\Resources;


trait BaseResource {
     
     protected function getMaxContentWidth(): string
     {
          return 'full';
     }

}