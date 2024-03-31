@if ($this->getRecord()->relationLoaded('availabilities'))
yes, availabilities eager loaded
@else
no, availabilities not eager loaded
@endif
