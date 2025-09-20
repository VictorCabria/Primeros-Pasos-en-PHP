
<?php   

class Validator{
   protected $errors = [];
   
   public function __construct(
    protected array $data,
    protected array $rules
   ){
    $this->validate();
   }

public function validate(): void
{
   foreach ($this->rules as $field => $rules) {
    $rules = explode('|', $rules);
    $value = trim($this->data[$field] ?? '');

    foreach ($rules as $rule) {
        [$name, $param] = array_pad(explode(':', $rule), 2, null);

        if ($error = $this->hasError($name, $field, $param, $value)) {
            $this->errors[$field][] = $error;
            break; 
        }
    }
    }
   }

protected function hasError($name, $field, $param, $value): ?string
{
    return match ($name) {
        'required' => $this->validateRequired($field, $value),
        'min' => $this->validateMin($field, $value, $param),
        'max' => $this->validateMax($field, $value, $param),
        'url' => $this->validateUrl($field, $value),
        default => ''
   
    };
}
protected function validateRequired($field, $value): string
{
    return empty($value) ? "El campo $field es obligatorio." : '';
}
protected function validateMin($field, $value, $param): string
{
    return strlen($value) < $param ? "El campo $field debe tener al menos $param caracteres." : '';
}
protected function validateMax($field, $value, $param): string
{
    return strlen($value) > $param ? "El campo $field no debe exceder los $param caracteres." : '';
}
protected function validateUrl($field, $value): string
{
    return !filter_var($value, FILTER_VALIDATE_URL) ? "El campo $field debe ser una URL válida." : '';
}

public function passed(): bool
{
    return empty($this->errors);
}
public function errors(): array
{
    return $this->errors;
}

}