<?php

namespace PHPSTORM_META {
    override(
        \Container::get(0),
        map(['new-sub' => \Letter::class])
    );
}