<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in([
        __DIR__ . DIRECTORY_SEPARATOR . 'src',
        __DIR__ . DIRECTORY_SEPARATOR . 'tests',
    ])
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::NONE_LEVEL)
    ->fixers([
        'psr0', // PSR-0
        'encoding', // PSR-1
        'short_tag', // PSR-1
        'braces', // PSR-2
        'elseif', // PSR-2
        'eof_ending', // PSR-2
        'function_call_space', // PSR-2
        'function_declaration', // PSR-2
        'indentation', // PSR-2
        'line_after_namespace', // PSR-2
        'linefeed', // PSR-2
        'lowercase_constants', // PSR-2
        'lowercase_keywords', // PSR-2
        'method_argument_space', // PSR-2
        'multiple_use', // PSR-2
        'parenthesis', // PSR-2
        'php_closing_tag', // PSR-2
        'single_line_after_imports', // PSR-2
        'trailing_spaces', // PSR-2
        'visibility', // PSR-2
        'blankline_after_open_tag', // symfony
//      'concat_without_spaces', // symfony // couterpart of concat_with_spaces
        'double_arrow_multiline_whitespaces', // symfony
        'duplicate_semicolon', // symfony
        'empty_return', // symfony
        'extra_empty_lines', // symfony
        'include', // symfony
        'join_function', // symfony
        'list_commas', // symfony
        'multiline_array_trailing_comma', // symfony
        'namespace_no_leading_whitespace', // symfony
        'new_with_braces', // symfony
        'no_blank_lines_after_class_opening', // symfony
//      'no_empty_lines_after_phpdocs', // symfony // -> also removed line between filedoc and namespace!
        'object_operator', // symfony
        'operators_spaces', // symfony
        'phpdoc_indent', // symfony
        'phpdoc_inline_tag', // symfony
        'phpdoc_no_access ', // symfony
//      'phpdoc_no_empty_return', // symfony // -> allow return null and void
        'phpdoc_no_package', // symfony
        'phpdoc_params', // symfony
        'phpdoc_scalar', // symfony
//      'phpdoc_separation', // symfony // -> also puts line between @copyright, @link, @license and @version
        'phpdoc_short_description', // symfony
        'phpdoc_to_comment', // symfony
        'phpdoc_trim', // symfony
        'phpdoc_type_to_var', // symfony
        'phpdoc_var_without_name', // symfony
        'remove_leading_slash_use', // symfony
        'remove_lines_between_uses', // symfony
        'return', // symfony
        'self_accessor', // symfony
        'single_array_no_trailing_comma', // symfony
        'single_blank_line_before_namespace', // symfony
        'single_quote', // symfony
        'spaces_before_semicolon', // symfony
        'spaces_cast', // symfony
        'standardize_not_equal', // symfony
        'ternary_spaces', // symfony
        'trim_array_spaces', // symfony
        'unalign_double_arrow', // symfony // -> counterpart of align_double_arrow
        'unalign_equals', // symfony // -> counterpart of align_equals
        'unary_operators_spaces', // symfony
        'unused_use', // symfony
        'whitespacy_lines', // symfony
//      'align_double_arrow', // contrib // -> counterpart of unalign_double_arrow
//      'align_equals', // contrib // -> counterpart of unalign_equals
        'concat_with_spaces', // contrib
        'ereg_to_preg', // contrib
//      'header_comment', // contrib // -> is broken .. start with /* instead of /**
//      'logical_not_operators_with_spaces', // contrib
//      'logical_not_operators_with_successor_space', // contrib
//      'long_array_syntax', // contrib // -> counterpart of short_array_syntax
        'multiline_spaces_before_semicolon', // contrib
        'newline_after_open_tag', // contrib
//      'no_blank_lines_before_namespace', // contrib // -> counterpart of single_blank_line_before_namespace
        'ordered_use', // contrib
//      'php4_constructor', // contrib // -> results in internal error ...
//      'phpdoc_order', // contrib // -> puts @throws above @returns which I do not want
//      'phpdoc_var_to_type', // contrib // -> counterpart of phpdoc_type_to_var
        'short_array_syntax', // contrib
//      'short_echo_tag', // contrib
//      'strict', // -> do not force, could change code behaviour
//      'strict_param', // -> do not force, could change code behaviour
    ])
    ->finder($finder)
;