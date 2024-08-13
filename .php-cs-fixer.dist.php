<?php

$finder = PhpCsFixer\Finder::create()
    ->notPath('Firefox/FirefoxProfile.php') // need to use str_* instead of mb_str_* methods
    ->in([__DIR__ . '/lib', __DIR__ . '/tests']);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => true,
        'blank_line_before_statement' => ['statements' => ['return', 'try']],
        'braces' => ['allow_single_line_anonymous_class_with_empty_body' => true, 'allow_single_line_closure' => true],
        'cast_spaces' => true,
        'class_attributes_separation' => ['elements' => ['method' => 'one', 'trait_import' => 'none']],
        'clean_namespace' => true,
        'combine_nested_dirname' => true,
        'compact_nullable_typehint' => true,
        'concat_space' => ['spacing' => 'one'],
        'declare_equal_normalize' => true,
        //'declare_strict_types' => true, // TODO: used only in tests, use in lib in next major version
        'fopen_flag_order' => true,
        'fopen_flags' => true,
        'full_opening_tag' => true,
        'function_typehint_space' => true,
        'heredoc_indentation' => ['indentation' => 'same_as_start'],
        'implode_call' => true,
        'is_null' => true,
        'lambda_not_used_import' => true,
        'list_syntax' => true,
        'lowercase_cast' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'mb_str_functions' => true,
        'method_argument_space' => ['after_heredoc' => true],
        'native_function_casing' => true,
        'native_function_type_declaration_casing' => true,
        'new_with_braces' => true,
        'no_alias_functions' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'normalize_index_brace' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use',
            ],
        ],
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => true,
            'remove_inheritdoc' => true,
            'allow_unused_params' => true, // Used in RemoteWebDriver::createBySessionID to maintain BC
        ],
        'no_trailing_comma_in_singleline' => true,
        'no_unreachable_default_argument_value' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_useless_sprintf' => true,
        'no_whitespace_before_comma_in_array' => ['after_heredoc' => true],
        'no_whitespace_in_blank_line' => true,
        'non_printable_character' => true,
        'nullable_type_declaration' => [
            'syntax' => 'question_mark',
        ],
        'nullable_type_declaration_for_default_null_value' => true,
        'object_operator_without_whitespace' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'php_unit_construct' => true,
        'php_unit_dedicate_assert' => true,
        'php_unit_dedicate_assert_internal_type' => true,
        'php_unit_expectation' => ['target' => '8.4'],
        'php_unit_method_casing' => ['case' => 'camel_case'],
        'php_unit_mock_short_will_return' => true,
        'php_unit_mock' => true,
        'php_unit_namespaced' => ['target' => '6.0'],
        'php_unit_no_expectation_annotation' => true,
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_indent' => true,
        'phpdoc_no_access' => true,
        // 'phpdoc_no_empty_return' => true, // disabled to allow forward compatibility with PHP 8.1
        'phpdoc_no_package' => true,
        'phpdoc_order_by_value' => ['annotations' => ['covers', 'group', 'throws']],
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_trim' => true,
        //'phpdoc_to_param_type' => true, // TODO: used only in tests, use in lib in next major version
        //'phpdoc_to_return_type' => true, // TODO: used only in tests, use in lib in next major version
        'phpdoc_types' => true,
        'phpdoc_var_annotation_correct_order' => true,
        'pow_to_exponentiation' => true,
        'psr_autoloading' => true,
        'random_api_migration' => true,
        'self_accessor' => true,
        'set_type_to_cast' => true,
        'short_scalar_cast' => true,
        'single_blank_line_before_namespace' => true,
        'single_quote' => true,
        'single_space_after_construct' => true,
        'single_trait_insert_per_statement' => true,
        'space_after_semicolon' => true,
        'standardize_not_equals' => true,
        'strict_param' => true,
        'switch_continue_to_break' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_elvis_operator' => true,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline' => ['elements' => ['arrays'], 'after_heredoc' => true],
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'visibility_required' => ['elements' => ['method', 'property', 'const']],
        //'void_return' => true, // TODO: used only in tests, use in lib in next major version
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
