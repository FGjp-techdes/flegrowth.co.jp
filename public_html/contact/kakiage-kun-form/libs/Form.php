<?php
class Form {
    private $id;
    private $fields = [];
    private $values = [];
    private $errors = [];
    private $token;

    public function __construct($id) {
        $this->id = $id;
        $this->token = bin2hex(random_bytes(32));
        $_SESSION['ticket'] = $this->token;
    }

    public function addInput($name, $label, $options = []) {
        $defaultOptions = [
            'type' => 'text',
            'required' => false,
            'maxlength' => null,
            'placeholder' => '',
            'pattern' => null,
            'class' => 'form-control',
            'value' => $_SESSION[$name] ?? null,
            'error' => $_SESSION['error'][$name] ?? null
        ];

        $options = array_merge($defaultOptions, $options);
        $this->fields[$name] = [
            'type' => 'input',
            'label' => $label,
            'options' => $options
        ];
        return $this;
    }

    public function addTextarea($name, $label, $options = []) {
        $defaultOptions = [
            'required' => false,
            'maxlength' => null,
            'placeholder' => '',
            'rows' => 3,
            'class' => 'form-control',
            'value' => $_SESSION[$name] ?? null,
            'error' => $_SESSION['error'][$name] ?? null
        ];

        $options = array_merge($defaultOptions, $options);
        $this->fields[$name] = [
            'type' => 'textarea',
            'label' => $label,
            'options' => $options
        ];
        return $this;
    }

    public function addRadio($name, $label, $options = []) {
        $defaultOptions = [
            'required' => false,
            'options' => [],
            'value' => $_SESSION[$name] ?? null,
            'error' => $_SESSION['error'][$name] ?? null
        ];
        
        $options = array_merge($defaultOptions, $options);
        $this->fields[$name] = [
            'type' => 'radio',
            'label' => $label,
            'options' => $options
        ];
        return $this;
    }

    public function addCheckbox($name, $label, $options = []) {
        $defaultOptions = [
            'required' => false,
            'value' => $_SESSION[$name] ?? null,
            'error' => $_SESSION['error'][$name] ?? null
        ];

        $options = array_merge($defaultOptions, $options);
        $this->fields[$name] = [
            'type' => 'checkbox',
            'label' => $label,
            'options' => $options
        ];
        return $this;
    }

    private function renderField($name, $field) {
        if ($field['type'] === 'checkbox') {
            return $this->renderCheckbox($name, $field);
        }

        $html = '<div class="form-group">';
        $html .= '<label for="' . $name . '">' . $field['label'];

        if ($field['options']['required']) {
            $html .= '<span class="mst">必須</span>';
        }

        if ($field['options']['error']) {
            $html .= '<span class="error-php">' . h($field['options']['error']) . '</span>';
        }

        $html .= '</label>';

        switch ($field['type']) {
            case 'input':
                $html .= $this->renderInput($name, $field['options']);
                break;
            case 'textarea':
                $html .= $this->renderTextarea($name, $field['options']);
                break;
            case 'radio':
                $html .= $this->renderRadio($name, $field['options']);
                break;
        }

        $html .= '</div>';
        return $html;
    }

    private function renderInput($name, $options) {
        $classes = [$options['class']];
        if ($options['required']) $classes[] = 'required';
        if ($options['maxlength']) $classes[] = 'maxlength';
        if ($options['pattern']) $classes[] = 'pattern';

        $html = '<input type="' . $options['type'] . '"';
        $html .= ' class="' . implode(' ', $classes) . '"';
        $html .= ' id="' . $name . '"';
        $html .= ' name="' . $name . '"';
        if ($options['maxlength']) $html .= ' data-maxlength="' . $options['maxlength'] . '"';
        if ($options['pattern']) $html .= ' data-pattern="' . $options['pattern'] . '"';
        if ($options['placeholder']) $html .= ' placeholder="' . $options['placeholder'] . '"';
        if ($options['value']) $html .= ' value="' . h($options['value']) . '"';
        $html .= '>';

        return $html;
    }

    private function renderTextarea($name, $options) {
        $classes = [$options['class']];
        if ($options['required']) $classes[] = 'required';
        if ($options['maxlength']) $classes[] = 'maxlength showCount';

        $html = '<textarea';
        $html .= ' class="' . implode(' ', $classes) . '"';
        $html .= ' id="' . $name . '"';
        $html .= ' name="' . $name . '"';
        if ($options['maxlength']) $html .= ' data-maxlength="' . $options['maxlength'] . '"';
        if ($options['placeholder']) $html .= ' placeholder="' . $options['placeholder'] . '"';
        if ($options['rows']) $html .= ' rows="' . $options['rows'] . '"';
        $html .= '>';
        if ($options['value']) $html .= h($options['value']);
        $html .= '</textarea>';

        return $html;
    }

    private function renderRadio($name, $options) {
        $html = '<div class="radio-group radio-inline">';
        foreach ($options['options'] as $value => $label) {
            $html .= '<label class="radio-label">';
            $html .= '<input type="radio" name="' . $name . '" value="' . $value . '"';
            if ($options['value'] === $value) $html .= ' checked';
            if ($options['required']) $html .= ' required';
            $html .= '> ' . $label;
            $html .= '</label>';
        }
        $html .= '</div>';
        return $html;
    }

    private function renderCheckbox($name, $field) {
        $html = '<div class="form-group">';
        
        if ($name === 'agree_terms') {

            $html .= '<div class="checkbox-wrap terms-checkbox" style="text-align: center;">';
            $html .= '<label class="checkbox-label">';
            $html .= '<input type="checkbox" name="' . $name . '" value="1"';
            if ($field['options']['value']) {
                $html .= ' checked';
            }
            if ($field['options']['required']) {
                $html .= ' required';
            }
            $html .= '>';
            $html .= $field['label'];
            $html .= '<span class="mst">必須</span>';
            $html .= '</label>';
            $html .= '</div>';
        } else {
            $html .= '<label>' . $field['label'];
            if ($field['options']['required']) {
                $html .= '<span class="mst">必須</span>';
            }
            if ($field['options']['error']) {
                $html .= '<span class="error-php">' . h($field['options']['error']) . '</span>';
            }
            $html .= '</label>';
            
            $html .= '<div class="checkbox-wrap">';
            $html .= '<label class="checkbox-label">';
            $html .= '<input type="checkbox" name="' . $name . '" value="1"';
            if ($field['options']['value']) {
                $html .= ' checked';
            }
            if ($field['options']['required']) {
                $html .= ' required';
            }
            $html .= '>';
            $html .= $field['options']['label_text'] ?? '必要';
            $html .= '</label>';
            $html .= '</div>';
        }
        
        $html .= '</div>';
        return $html;
    }

    public function display() {
        $html = '<form id="' . $this->id . '" class="validationForm" method="post" action="confirm.php" novalidate>';

        foreach ($this->fields as $name => $field) {
            $html .= $this->renderField($name, $field);
        }

        $html .= '<div class="form-btn-wrap">';
        $html .= '<input type="hidden" name="ticket" value="' . h($this->token) . '">';
        $html .= '<button name="submitted" type="submit" class="btn-submit">確認画面へ</button>';
        $html .= '</div>';
        $html .= '</form>';

        echo $html;
    }
}