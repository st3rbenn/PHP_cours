<?php
/**
 * @param string $nomAFormater
 * @return string
 */
function formaterNom(string $nomAFormater): string
{
    return ucfirst(strtolower($nomAFormater));
}
