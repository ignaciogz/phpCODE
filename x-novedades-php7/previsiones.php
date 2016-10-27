<?php
ini_set('assert.exception',1);
class ClaseError extends AssertionError {}

assert(false, new ClaseError('Mensaje que mostraría el detalle de un error'));
