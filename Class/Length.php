<?php

// membuat attribute dengan nama Length dan target penggunaanya di property
#[Attribute(Attribute::TARGET_PROPERTY)]
class Length{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}