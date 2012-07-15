<?php

/**
 * timestamp Jul 13, 2012 11:39:44 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package callow\util
 *
 *  Interface that forms the root of all event listener type classes.
 *
 *
 */

namespace callow\util;

interface EventListener
{

    public  function update(Event $e);

}

?>