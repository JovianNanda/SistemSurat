<?php

function isGuest()
{
    return !isset($_SESSION['superAdmin']);
}