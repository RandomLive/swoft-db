<?php

namespace Swoft\Db\Validator;

use Swoft\Bean\Annotation\Bean;
use Swoft\Exception\ValidatorException;

/**
 * @Bean("DbNumberValidator")
 */
class NumberValidator implements ValidatorInterface
{
    /**
     * @param string $column    Colunm name
     * @param mixed  $value     Column value
     * @param array  ...$params Other parameters
     * @throws ValidatorException When validation failures, will throw an Exception
     * @return bool When validation successful
     */
    public function validate(string $column, $value, ...$params): bool
    {
        if (! \is_numeric($value)) {
            throw new ValidatorException('数据库字段值验证失败，不是number类型，column=' . $column);
        }
        return true;
    }
}
