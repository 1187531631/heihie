<?php
/**
 * Validator
 * Copyright 2017-2018 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation;

/**
 * The ValidationRule interface that every rule has to implement.
 */
interface ValidationRule {
    /**
     * This method validates the value using the rule's implementation.
     * @param mixed                                  $value       The value of the field to validate.
     * @param string                                 $key         The key of the field.
     * @param array                                  $fields      The fields.
     * @param mixed                                  $options     Any rule options.
     * @param bool                                   $exists      If the field exists ($value is null on false).
     * @param \CharlotteDunois\Validation\Validator  $validator   The Validator instance
     * @return bool|string|array  Return false to "skip" the rule. Return true to mark the rule as passed.
     */
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator);
}
