<?php

function getAllUser()
{
    return fetchAll(query("SELECT * FROM user"));
}
